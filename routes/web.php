<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PromoController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=>true]);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/user', [UserController::class, 'index'])->middleware(['auth', 'verified']);
Route::get('/editUser', [UserController::class, 'editUser']);
Route::post('/proses_edit', [UserController::class, 'prosesEdit']);
Route::get('/detail_promo/{id}', [PromoController::class, 'detailPromo']);
Route::get('/booking/{id}', [PromoController::class, 'booking']);
Route::get('/detail_order', [PromoController::class, 'detailOrder']);
Route::get('/order', [PromoController::class, 'addOrder']);
Route::get('cetak_order/{id}', [PromoController::class, 'cetakOrder']);
