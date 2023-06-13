<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CodesController;
use App\Http\Controllers\CategoriesController;


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

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/table', [HomeController::class, 'table']);
// // Route::get('/', [HomeController::class, 'footer']);

// Route::get('/login', function (){
//     return view('login');
// });
Route::middleware(['guest'])->group(function(){
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/home', function(){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->middleware('userAkses:admin');
    Route::get('/user', [AdminController::class, 'user'])->middleware('userAkses:user');
    Route::get('/logout',[SesiController::class, 'logout']);
});

// Route::get('/login', [AuthController::class, 'login']);
Route::get('/admin', [HomeController::class, 'admin']);
Route::get('/kategori', [CategoriesController::class, 'kategori']);
Route::get('/kode_barang', [CodesController::class, 'kode']);
Route::get('/data_barang', [ItemController::class, 'barang']);

