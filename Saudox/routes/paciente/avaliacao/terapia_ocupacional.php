<?php

Route::get('teste', function () {
    return 'terapia_ocupacional.php';
});

Route::get('ver', 'PacienteAvaliacaoController@verTerapiaOcupacional')->name('.ver');
