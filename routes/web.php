<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\BerandaController::class, 'index']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/beranda', [App\Http\Controllers\HomeController::class, 'home']);
Route::get('data-beranda', [App\Http\Controllers\HomeController::class, 'index']);
Route::post('add-beranda', [App\Http\Controllers\HomeController::class, 'store']);
Route::patch('update-beranda', [App\Http\Controllers\HomeController::class, 'update']);
Route::delete('beranda/{id}', [App\Http\Controllers\HomeController::class, 'destroy']);

Route::get('tentang-gas', [App\Http\Controllers\TentangController::class, 'index']);
Route::post('add-tentang', [App\Http\Controllers\TentangController::class, 'store']);
Route::patch('update-tentang', [App\Http\Controllers\TentangController::class, 'update']);
Route::delete('tentang-gas/{id}', [App\Http\Controllers\TentangController::class, 'destroy']);
