<?php

Route::get('login', function() {
    return View::make('login');
})->before('guest');

Route::post('login', 'LoginController@checkUser');

Route::get('logout', function() {
    if (Auth::check()) {
        Auth::logout();
    }
    return Redirect::to('login');
});

Route::group(['before' => 'auth'], function() {
    Route::get('/', 'FuncionariosController@index');
    Route::resource('funcionarios', 'FuncionariosController', array('except' => array('show')));
});
