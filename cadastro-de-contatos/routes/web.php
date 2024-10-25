<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/contatos/create', [ContatoController::class, 'create'])->name('contatos.create');
Route::get('/', [ContatoController::class, 'index'])->name('contatos.index');
Route::post('/contatos', [ContatoController::class, 'store'])->name('contatos.store');
Route::get('/contatos/{id}', [ContatoController::class, 'show'])->name('contatos.show');
Route::put('/contatos/{id}', [ContatoController::class, 'update'])->name('contatos.update');
Route::delete('/contatos/{id}', [ContatoController::class, 'destroy'])->name('contatos.destroy');