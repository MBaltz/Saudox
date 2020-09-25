<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration {

    public function up() {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('estado');
            $table->string('cidade');
            $table->string('bairro')->nullable(true);
            $table->string('nome_rua')->nullable(true);
            $table->unsignedInteger('numero_casa')->nullable(true);
            $table->text('descricao')->nullable(true);
            $table->string('ponto_referencia');
        });
    }

    public function down() {
        Schema::dropIfExists('enderecos');
    }
}
