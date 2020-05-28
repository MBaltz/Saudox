<?php

use Illuminate\Database\Seeder;

class EnderecosAutSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        include('database/seeds/SeedsConfig.php');

        //Gerando endereços automaticamente
        for($i = 0; $i < $qtd_enderecos; $i++){
          DB::table('enderecos')->insert([
            'estado' => Str::random(10),
            'cidade' => Str::random(10),
            'bairro' => Str::random(10),
            'nome_rua' =>  Str::random(15),
            'numero_casa' => ($i.$i.$i),
            'descricao' => Str::random(30),
            'ponto_referencia' => Str::random(15),
          ]);
        }
    }
}
