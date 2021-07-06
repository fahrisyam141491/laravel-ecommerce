<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_Main;
use App\Http\Controllers\C_Seller\MainSeller;

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

Route::get('/', [C_Main::class, 'index']);

Auth::routes();

Route::group(['middleware' => 'seller'], function() {
    Route::get('/seller-tab', [\App\Http\Controllers\C_Seller\C_Main::class, 'index']);

    Route::get('/seller-tab', [\App\Http\Controllers\C_Seller\C_Barang::class, 'index'])->name('seller-tab');
    Route::get('/seller-tab/add-barang', [\App\Http\Controllers\C_Seller\C_Barang::class, 'add']);
    Route::post('/seller-tab/store-barang', [\App\Http\Controllers\C_Seller\C_Barang::class, 'store']);
    Route::get('/seller-tab/delete', [\App\Http\Controllers\C_Seller\C_Barang::class, 'viewdelete'])->name('delete-barang');
    Route::get('/seller-tab/delete/{id_barang}', [\App\Http\Controllers\C_Seller\C_Barang::class, 'delete']);
    Route::get('/seller-tab/deleteall', [\App\Http\Controllers\C_Seller\C_Barang::class, 'deleteall']);
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
