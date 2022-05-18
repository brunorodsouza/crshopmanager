<?php

use App\Http\Controllers\PessoaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/auth',[LoginController::class,'auth'])->name('auth.user');
Route::post('/store',[LoginController::class,'store'])->name('store.user');
Route::get('/novasenha', [LoginController::class, 'novasenha'])->name('novasenha');
Route::get('/registrar', [LoginController::class, 'registrar'])->name('registrar');
Route::get('/esqueceusenha', [LoginController::class, 'esqueceusenha'])->name('esqueceusenha');

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/pessoa', [PessoaController::class, 'index'])->name('pessoa');
Route::get('/pessoa/novo', [PessoaController::class, 'create'])->name('pessoa.novo');
Route::post('/pessoa/store', [PessoaController::class, 'store'])->name('pessoa.store');
Route::get('/pessoa/{id}', [PessoaController::class, 'show'])->name('pessoa.show');
Route::get('/pessoa/editar/{id}', [PessoaController::class, 'edit'])->name('pessoa.editar');
Route::put('/pessoa/update/{id}', [PessoaController::class, 'update'])->name('pessoa.update');
Route::get('/pessoa/remover/{id}', [PessoaController::class, 'destroy'])->name('pessoa.remover');
