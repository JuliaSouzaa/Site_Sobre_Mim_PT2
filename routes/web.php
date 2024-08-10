<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::get('/quem-sou', function () {
    return view('quem-sou');
})->name('quem-sou');

Route::get('/contato', [ContatoController::class, 'create'])->name('contato');
Route::post('/contato', [ContatoController::class, 'store']);

