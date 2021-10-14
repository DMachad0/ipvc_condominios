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
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
Route::get('forgot-password', [AuthController::class, 'pwreset'])->name('password.request');
Route::post('forgot-password', [AuthController::class, 'pwreset2'])->name('password.email');
Route::get('reset-password/{token}', [AuthController::class, 'pwreset3'])->name('password.reset');
Route::post('reset-password',[AuthController::class, 'pwreset4'])->name('password.update');
