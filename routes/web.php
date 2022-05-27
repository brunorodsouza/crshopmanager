<?php

use App\Http\Controllers\PessoaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\VeiculoController;

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


Route::get('/material', [MaterialController::class, 'index'])->name('material');
Route::get('/material/novo', [MaterialController::class, 'create'])->name('material.novo');
Route::post('/material/store', [MaterialController::class, 'store'])->name('material.store');
Route::get('/material/{id}', [MaterialController::class, 'show'])->name('material.show');
Route::get('/material/editar/{id}', [MaterialController::class, 'edit'])->name('material.editar');
Route::put('/material/update/{id}', [MaterialController::class, 'update'])->name('material.update');
Route::get('/material/remover/{id}', [MaterialController::class, 'destroy'])->name('material.remover');


Route::get('/servico', [ServicoController::class, 'index'])->name('servico');
Route::get('/servico/novo', [ServicoController::class, 'create'])->name('servico.novo');
Route::post('/servico/store', [ServicoController::class, 'store'])->name('servico.store');
Route::get('/servico/{id}', [ServicoController::class, 'show'])->name('servico.show');
Route::get('/servico/editar/{id}', [ServicoController::class, 'edit'])->name('servico.editar');
Route::put('/servico/update/{id}', [ServicoController::class, 'update'])->name('servico.update');
Route::get('/servico/remover/{id}', [ServicoController::class, 'destroy'])->name('servico.remover');

Route::get('/veiculo', [VeiculoController::class, 'index'])->name('veiculo');
Route::get('/veiculo/novo', [VeiculoController::class, 'create'])->name('veiculo.novo');
Route::post('/veiculo/store', [VeiculoController::class, 'store'])->name('veiculo.store');
Route::get('/veiculo/{id}', [VeiculoController::class, 'show'])->name('veiculo.show');
Route::get('/veiculo/editar/{id}', [VeiculoController::class, 'edit'])->name('veiculo.editar');
Route::put('/veiculo/update/{id}', [VeiculoController::class, 'update'])->name('veiculo.update');
Route::get('/veiculo/remover/{id}', [VeiculoController::class, 'destroy'])->name('veiculo.remover');