<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CodesController;
use App\Http\Controllers\CategoriesController;
use GuzzleHttp\Middleware;

// Login
Route::get('/', [AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'auth']);

Route::group(['middleware' => ['auth:admin', 'ceklevel:admin']], function(){
    route::get('/dashboard', 'AdminController@index')->name('dashboard');
});

Route::group(['middleware' => ['auth:users', 'ceklevel:users']], function(){
    route::get('/dashboard', 'AdminController@user')->name('dashboard');
});

// Kategori
Route::get('/kategori', [CategoriesController::class, 'kategori']);
Route::get('/kategori_add', [CategoriesController::class, 'tambah']);
Route::get('/delete_category/{id}', [CategoriesController::class, 'hapus']);
Route::post('/kategori_barang', [CategoriesController::class, 'store']);

// Kode Barang
Route::get('/kode_barang', [CodesController::class, 'kode']);
Route::get('/kode_barang_add', [CodesController::class, 'tambah']);
Route::get('/delete_code/{id}', [CodesController::class, 'hapus']);
Route::post('/kode_barang', [CodesController::class, 'store']);

// Data barang
Route::get('/data_barang', [ItemController::class, 'barang']);



// Route::get('/dataAdmin', [HomeController::class, 'dataAdmin']);



