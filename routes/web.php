<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
