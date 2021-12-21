<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

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

Route::get('web', function() {
    return view('web.template.base');
});
Route::get('item1', function() {
    return view('web.item1');
});

Route::get('template', function() {
    return view('template.base');
});

Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('promo', [HomeController::class, 'showPromo']);
Route::get('login', [AuthController::class, 'showLogin']);
Route::get('konsultasi', [HomeController::class, 'showKOnsultasi']);

Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [produkController::class, 'show']);
Route::get('produk/{produk}/edit', [produkController::class, 'edit']);
Route::put('produk/{produk}', [produkController::class, 'update']);
Route::delete('produk/{produk}', [produkController::class, 'destroy']);