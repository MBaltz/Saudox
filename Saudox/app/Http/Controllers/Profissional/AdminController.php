<?php
namespace App\Http\Controllers\Profissional;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Paciente;
use App\Profissional;
use App\Endereco;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller {

    private $mensagens =  [
        'required' => 'O campo :attribute é obrigatório.',
        'min' => 'O campo :attribute é deve ter no minimo :min caracteres.',
        'max' => 'O campo :attribute é deve ter no máximo :max caracteres.',
        'password.required' => 'A senha é obrigatória.',
        'unique' => 'O :attribute já está cadastrado',
    ];


    public function adminHome() {

        //Pegando tanto os paciente quanto profissionais que foram editados (ou criados) recentemente;
        //Pegando apenas o id, nome e cpf.

        $lista_pacientes = Paciente::select('id', 'nome_paciente', 'cpf')
            ->orderBy('updated_at', 'desc')
            ->take(50)
            ->get();

        $lista_profissionais = Profissional::select('id', 'nome', 'cpf')
            ->orderBy('updated_at', 'desc')
            ->take(50)
            ->get();


        return view('profissional/admin/home', ['pacientes' => $lista_pacientes,'profissionais' => $lista_profissionais]);
    }

    public function cadastroProfissional() {
        return view('profissional/admin/criar_profissional');
    }

    public function editarProfissional($id_profissional) {
        $profissional = Profissional::find($id_profissional);

        if(!$profissional) {
            return view('erro', ['msg_erro' => "Profissional inexistente..."]);
        }

        return view('profissional/admin/editar_profissional', ['profissional' => $profissional]);
    }

    public function salvarEditarProfissional(Request $request) {


        $entrada = $request->all();

        $profissional = Profissional::find($entrada['id']);

        if(!$profissional) {
            return view('erro', ['msg_erro' => "Profissional inexistente..."]);
        }


        if(!$this->validarTelefone($entrada["telefone_1"])) {
            return redirect()->back()
                             ->withErrors(['telefone_1'=>'Telefone 1 inválido!'])
                             ->withInput();
        }

        if(!$this->validarTelefone($entrada["telefone_2"])) {
            return redirect()->back()
                             ->withErrors(['telefone_2'=>'Telefone 2 inválido!'])
                             ->withInput();
        }

        if($entrada["estado_civil"] != "solteiro" && $entrada["estado_civil"] != "casado") {
            return redirect()->back()
                             ->withErrors(['estado_civil'=>'Estado Civil inválido!'])
                             ->withInput();
        }

        $validator_endereco = Validator::make($entrada, Endereco::$regras_validacao, $this->mensagens);
        if ($validator_endereco->fails()) {
            return redirect()->back()
                             ->withErrors($validator_endereco)
                             ->with(['profissional' => $profissional]);
        }

        $regra_validacao_aux = Profissional::$regras_validacao_editar_com_senha;
        if($entrada['password'] == "" || !isset($entrada['password'])) {
            $regra_validacao_aux = Profissional::$regras_validacao_editar_sem_senha;
        }
        $validator_profissional = Validator::make($entrada, $regra_validacao_aux, $this->mensagens);
        if ($validator_profissional->fails()) {
            return redirect()->back()
                             ->withErrors($validator_profissional)
                             ->with(['profissional' => $profissional]);
        }


        $endereco = Endereco::find($entrada['id_endereco']);
        $endereco->fill($entrada);
        $endereco->save();

        $validar_cpf = $this->validaCPF($entrada['cpf']);
        if (!$validar_cpf) {
            return redirect()->back()
                             ->withErrors(['cpf'=>'Cpf inválido!'])
                             ->withInput();
        }


        $profissional->fill($entrada);
        $profissional->status = $entrada['status'];

        $profisssoes = $entrada['profissoes'];
        $str_profissoes = "";
        foreach($profisssoes as $profissao) {
            $str_profissoes .= $profissao . ";";
        }
        $profissional->profissao = $str_profissoes;
        //Se existe o campo password, e o campo password não está vazio (foi modificado)
        if(isset($entrada['password']) && $entrada['password'] != "") {
            $profissional->password = Hash::make($entrada['password']);
        }
        $profissional->save();

        return redirect()->route('profissional.ver', $profissional->id);
    }

    public function salvarCadastrarProfissional(Request $request) {

        $entrada = $request->all();

        if(!$this->validarTelefone($entrada["telefone_1"])) {
            return redirect()->back()
                             ->withErrors(['telefone_1'=>'Telefone 1 inválido!'])
                             ->withInput();
        }

        if(!$this->validarTelefone($entrada["telefone_2"])) {
            return redirect()->back()
                             ->withErrors(['telefone_2'=>'Telefone 2 inválido!'])
                             ->withInput();
        }

        if($entrada["estado_civil"] != "solteiro" && $entrada["estado_civil"] != "casado") {
            return redirect()->back()
                             ->withErrors(['estado_civil'=>'Estado Civil inválido!'])
                             ->withInput();
        }

        $validator_endereco = Validator::make($entrada, Endereco::$regras_validacao, $this->mensagens);
        if ($validator_endereco->fails()) {
            return redirect()->back()
                             ->withErrors($validator_endereco)
                             ->withInput();
        }

        $validator_profissional = Validator::make($entrada, Profissional::$regras_validacao_criar, $this->mensagens);
        if ($validator_profissional->fails()) {
            return redirect()->back()
                             ->withErrors($validator_profissional)
                             ->withInput();
        }


        $endereco = new Endereco;
        $endereco->fill($entrada);
        $endereco->save();

        $validar_cpf = $this->validaCPF($entrada['cpf']);
        if (!$validar_cpf) {
            return redirect()->back()
                             ->withErrors(['cpf'=>'Cpf inválido!'])
                             ->withInput();
        }


        $profissional = new Profissional;
        $profissional->fill($entrada);
        $profissional->id_endereco = $endereco->id;
        $profissional->status = Profissional::Trabalhando;

        $profisssoes = $entrada['profissoes'];
        $str_profissoes = "";
        foreach($profisssoes as $profissao) {
            $str_profissoes .= $profissao . ";";
        }
        $profissional->profissao = $str_profissoes;
        $profissional->password = Hash::make($entrada['password']);
        $profissional->save();

        return redirect()->route('profissional.ver', $profissional->id);
    }

}
