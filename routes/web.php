<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('user/{user}', [UserController::class, 'show']);

Route::get('/', function () {
    
    return view('welcome');
});
