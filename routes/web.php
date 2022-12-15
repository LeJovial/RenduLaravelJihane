<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\VignetteController;

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

Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('/show/{id}', [VignetteController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/add', [VignetteController::class, 'create']);
Route::get('/admin/edit/{id}', [VignetteController::class, 'edit']);

Route::post('/admin/validForm', [VignetteController::class, 'store']);
Route::get('/admin/delete/{id}', [VignetteController::class, 'destroy']);
Route::post('/admin/editForm/{id}', [VignetteController::class, 'update']);
