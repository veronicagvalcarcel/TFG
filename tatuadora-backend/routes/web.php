<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test-client', [ClienteController::class, 'crearEjemplo']);
