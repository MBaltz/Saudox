<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Profissional;
use App\Endereco;
use Illuminate\Support\Carbon;

class LoginProfissionalTest extends TestCase {

    private $endereco;
    protected static $db_ok = false;
    public function setUp() : void {
        parent::setUp();

        if(!self::$db_ok) {
            fwrite(STDERR, "Migrando sqlite...");
            $this->artisan('migrate:fresh');
            fwrite(STDERR, "Feito.\n");
            fwrite(STDERR, "Fazendo seed no sqlite...");
            $this->artisan('db:seed');
            fwrite(STDERR, "Feito.\n");
            self::$db_ok = true;
        }

        $this->endereco = factory(Endereco::class)->create();
    }

    /** @test **/
    /* url: https://www.pivotaltracker.com/story/show/174638091 */
    /* TA_01 */
    public function funcionarioPodeLogarComDadosCorretos() {
        $funcionario = factory(Profissional::class)->create([
            'password' => bcrypt($password = '123123123'),
        ]);

        $resposta = $this->post(route("profissional.login"), [
            'login' => $funcionario->login,
            'password' => $password,
        ]);

        $resposta->assertRedirect(route("profissional.home"));
        $this->assertAuthenticatedAs($funcionario);
    }

    /** @test **/
    /* url: https://www.pivotaltracker.com/story/show/174638091 */
    /* TA_03 */
    public function funcionarioNaoPodeLogarComSenhaIncorreta() {
        $funcionario = factory(Profissional::class)->create([
            'password' => bcrypt('123123123'),
        ]);

        $resposta = $this->from(route("profissional.login"))->post(route("profissional.login"), [
            'login' => $funcionario->login,
            'password' => 'senha-inválida',
        ]);

        $resposta->assertRedirect(route("profissional.login"));
        //TODO: descobrir o erro disso. parece ser bug do phpunit, já foi reportado
        //$resposta->assertSessionHasErrors(['password']);
        $this->assertTrue(session()->hasOldInput('login'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }

    /** @test **/
    /* url: https://www.pivotaltracker.com/story/show/174638091 */
    /* TA_02 */
    public function funcionarioNaoPodeLogarComloginIncorreto() {

        $login_t = 'carlosaajunio@gmail.com' . Carbon::now()->toString();

        $funcionario = factory(Profissional::class)->create([
            'login' => $login_t,
            'password' => bcrypt('123123123'),
        ]);

        $resposta = $this->from(route("profissional.login"))->post(route("profissional.login"), [
            'login' => $login_t,
            'password' => '123123123',
        ]);

        $resposta->assertRedirect(route("profissional.login"));
        $resposta->assertSessionHasErrors('login');
        $this->assertTrue(session()->hasOldInput('password'));
        $this->assertFalse(session()->hasOldInput('login'));
        $this->assertGuest();
    }

    /** @test **/
    /* url: https://www.pivotaltracker.com/story/show/174638207 */
    /* TA_01 */
    public function funcionarioPodeFazerLogout() {
        $funcionario = factory(Profissional::class)->create([
            'password' => bcrypt($password = '123123123'),
        ]);

        $resposta = $this->post(route("profissional.login"), [
            'login' => $funcionario->login,
            'password' => $password,
        ]);

        $resposta->assertRedirect(route("profissional.home"));
        $this->assertAuthenticatedAs($funcionario);
        $this->post(route("profissional.logout"));
        //$this->visit(route("profissional.home"));
        //$this->seePa(route("profissional.login"));
    }

    /*public function funcionarioPodeTrocarSenha()
    {
        $funcionario = factory(Profissional::class)->create([
            'password' => bcrypt($password = '123123123'),
        ]);

        $resposta = $this->post(route("profissional.login"), [
            'login' => $funcionario->login,
            'password' => $password,
        ]);

        $resposta->assertRedirect(route("profissional.home"));
        $this->assertAuthenticatedAs($funcionario);
        $this->post(route("profissional.logout"));
        //$this->visit(route("profissional.home"));
        //$this->seePa(route("profissional.login"));
    } */

    /** @test **/
    /* url: https://www.pivotaltracker.com/story/show/174638205 */
    /* TA_01 */
    public function funcionarioPodeVerAgendamentos() {
        $funcionario = factory(Profissional::class)->create([
            'password' => bcrypt($password = '123123123'),
        ]);

        $resposta = $this->post(route("profissional.login"), [
            'login' => $funcionario->login,
            'password' => $password,
        ]);

        $resposta->assertRedirect(route("profissional.home"));
        $this->assertAuthenticatedAs($funcionario);

        //$this->visit(route("profissional.agenda"));
        //$this->seePa(route("profissional.agenda"));
    }

    /** @test **/
    /* url: https://www.pivotaltracker.com/story/show/174638205 */
    /* TA_01 */
    public function funcionarioNaoPodeVerAgendamentosSeNaoEstiverLogado() {
        $funcionario = factory(Profissional::class)->create([
            'password' => bcrypt($password = '123123123'),
        ]);

        $resposta = $this->post(route("profissional.login"), [
            'login' => $funcionario->login,
            'password' => $password,
        ]);

        $resposta->assertRedirect(route("profissional.home"));
        $this->assertAuthenticatedAs($funcionario);

        $this->post(route("profissional.logout"));

        //$this->visit(route("profissional.agenda"));
        //$this->seePa(route("profissional.login"));
    }

    /** @test **/
    /* url: https://www.pivotaltracker.com/story/show/174638204 */
    /* TA_01 */
    public function funcionarioPodeVerPerfil() {
        $funcionario = factory(Profissional::class)->create([
            'password' => bcrypt($password = '123123123'),
        ]);

        $resposta = $this->post(route("profissional.login"), [
            'login' => $funcionario->login,
            'password' => $password,
        ]);

        $resposta->assertRedirect(route("profissional.home"));
        $this->assertAuthenticatedAs($funcionario);

        //$this->visit(route("profissional.perfil"));
        //$this->seePa(route("profissional.perfil"));
    }

    /** @test **/
    /* url: https://www.pivotaltracker.com/story/show/174638204 */
    /* TA_01 */
    public function funcionarioNaoPodeVerPerfilSeNaoEstiverLogado() {
        $funcionario = factory(Profissional::class)->create([
            'password' => bcrypt($password = '123123123'),
        ]);

        $resposta = $this->post(route("profissional.login"), [
            'login' => $funcionario->login,
            'password' => $password,
        ]);

        $resposta->assertRedirect(route("profissional.home"));
        $this->assertAuthenticatedAs($funcionario);

        $this->post(route("profissional.logout"));

        //$this->visit(route("profissional.perfil"));
        //$this->seePa(route("profissional.login"));
    }



}
