<?php

use Illuminate\Support\Facades\Route;

Route::prefix('usuarios')->group(function() {
     Route::get('', function() {
        return 'usuário';
    })->name('usuario');
    Route::get('/{id}', function() {
        return 'Mostra detralhes';
    })->name('usuario.show');
     Route::get('/{id}/tags', function() {
        return 'Tags do usuário';
    })->name('usuario.tags');
       
});

Route::get('/a-empresa/{string?}', function ($string = null) {
    return $string;
    //return view('welcome');
})->name('a-empresa');

Route::get('/users/{paramA}/{paramB}', function ($paramA, $paramB) {
    return $paramA . ' - ' . $paramB;
    //return view('welcome');
});
