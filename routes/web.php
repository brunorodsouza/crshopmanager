<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/auth',[LoginController::class,'auth'])->name('auth.user');
Route::post('/store',[LoginController::class,'store'])->name('store.user');
Route::get('/novasenha', [LoginController::class, 'novasenha'])->name('novasenha');
Route::get('/registrar', [LoginController::class, 'registrar'])->name('registrar');
Route::get('/esqueceusenha', [LoginController::class, 'esqueceusenha'])->name('esqueceusenha');

Route::get('/home', [HomeController::class, 'index'])->name('home');

