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
Route::post('editar', [UtilizadoresController::class, 'confirmarEditarUser'])->name('confirmarEditarUser');

Route::get('habitacoes', [UtilizadoresController::class, 'habitacoes'])->name('habitacoes');
Route::get('novaHabitacao', [UtilizadoresController::class, 'novaHabitacao'])->name('novaHabitacao');
Route::post('novaHabitacao', [UtilizadoresController::class, 'confirmarNovaHabitacao'])->name('confirmarNovaHabitacao');

Route::get('novoCondominio', [UtilizadoresController::class, 'novoCondominio'])->name('novaHabitacao');
Route::post('novoCondominio', [UtilizadoresController::class, 'confirmarNovoCondominio'])->name('confirmarNovoCondominio');

Route::get('proprietarios', [UtilizadoresController::class, 'proprietarios'])->name('proprietarios');

Route::get('despesas', [UtilizadoresController::class, 'despesas'])->name('despesas');

Route::get('atas', [UtilizadoresController::class, 'atas'])->name('atas');
Route::get('novaAta', [UtilizadoresController::class, 'novaAta'])->name('novaAta');
Route::post('novaAta', [UtilizadoresController::class, 'confirmarNovaAta'])->name('confirmarNovaAta');

Route::post('confirmarSelecionarCondominio', [UtilizadoresController::class, 'confirmarSelecionarCondominio'])->name('confirmarSelecionarCondominio'); 

//api datatables
Route::get('api/admins', [ApiController::class, 'admins'])->name('admins');
Route::get('api/admins_cond', [ApiController::class, 'admins_cond'])->name('admins_cond');
Route::get('api/props', [ApiController::class, 'props'])->name('props');

Route::get('api/minhas_habitacoes', [ApiController::class, 'minhas_habitacoes'])->name('minhas_habitacoes');

Route::get('api/proprietario/{cc}', [ApiController::class, 'proprietario']);

Route::post('api/novaHabitacao', [ApiController::class, 'novaHabitacao'])->name('novaHabitacao');

Route::get('api/meus_proprietarios', [ApiController::class, 'meus_proprietarios'])->name('meus_proprietarios');

Route::get('api/minhas_despesas/{estado}', [ApiController::class, 'minhas_despesas'])->name('minhas_despesas');
Route::post('api/atualizarEstado', [ApiController::class, 'atualizarEstado'])->name('atualizarEstado');

Route::get('api/minhas_atas', [ApiController::class, 'minhas_atas'])->name('minhas_atas');