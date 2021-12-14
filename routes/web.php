<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UtilizadoresController;
use App\Http\Controllers\ApiController;

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
Route::get('/', [AuthController::class, 'dashboard']); 

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'confirmarLogin'])->name('confirmarLogin'); 

Route::get('registration', [AuthController::class, 'registro'])->name('registro');
Route::post('registration', [AuthController::class, 'confirmarRegistro'])->name('confirmarRegistro'); 

Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::get('forgot-password', [AuthController::class, 'esquecerPw'])->name('password.request');
Route::post('forgot-password', [AuthController::class, 'confirmarEsquecerPw'])->name('password.email');

Route::get('reset-password/{token}', [AuthController::class, 'resetPw'])->name('password.reset');
Route::post('reset-password',[AuthController::class, 'confirmarResetPw'])->name('password.update');


Route::get('novo', [UtilizadoresController::class, 'adminNewUser'])->name('adminNewUser');
Route::post('novo', [UtilizadoresController::class, 'confirmarNovoUtilizador'])->name('confirmarNovoUtilizador');

Route::get('editar/{id}', [UtilizadoresController::class, 'adminEditarUser'])->name('adminEditarUser');
Route::post('editar/{id}', [UtilizadoresController::class, 'confirmarEditarUser'])->name('confirmarEditarUser');

Route::get('habitacoes', [UtilizadoresController::class, 'habitacoes'])->name('habitacoes');

Route::get('proprietarios', [UtilizadoresController::class, 'proprietarios'])->name('proprietarios');

Route::get('despesas', [UtilizadoresController::class, 'despesas'])->name('despesas');

Route::get('atas', [UtilizadoresController::class, 'atas'])->name('atas');

//api datatables
Route::get('api/admins', [ApiController::class, 'admins'])->name('admins');
Route::get('api/admins_cond', [ApiController::class, 'admins_cond'])->name('admins_cond');
Route::get('api/props', [ApiController::class, 'props'])->name('props');

