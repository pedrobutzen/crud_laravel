<?php

Route::get('/', 'FuncionariosController@index');

Route::resource('funcionarios', 'FuncionariosController');
