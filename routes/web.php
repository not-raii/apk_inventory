<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CodesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ManageUserController;

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



// // Route::get('/', [HomeController::class, 'index']);
// // Route::get('/table', [HomeController::class, 'table']);
// // // Route::get('/', [HomeController::class, 'footer']);

Route::get('/', [AuthController::class, 'login'])->middleware('guest')->name('/');
Route::post('/', [AuthController::class, 'auth'])->middleware('guest'); 
Route::get('/logout',[AuthController::class, 'logout'])->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
// Route::middleware(['guest'])->group(function(){
//     Route::get('/', [SesiController::class, 'index'])->name('login');
//     Route::post('/', [SesiController::class, 'login']);
// });


// Route::middleware(['auth'])->group(function(){
// //     Route::get('/admin', [AdminController::class, 'index'])->middleware('userAkses == 1')->name('home.admin');
// //     Route::get('/user', [AdminController::class, 'user'])->middleware('userAkses == 2')->name('home.user');
//     Route::get('/logout',[SesiController::class, 'logout']);
// });

// Route::middleware('adminAkses')->group(function(){
//     Route::get('/admin', [AdminController::class, 'index']);
// });

// // Route::get('/login', [AuthController::class, 'login']);
// Route::get('/admin', [HomeController::class, 'admin']);
// Route::get('/user', [HomeController::class, 'user']);

// // Route::get('/login', [AuthController::class, 'login']);

// // Route::get('/', [HomeController::class, 'admin']);


// Route::get('/home', function(){
//     return redirect('/admin');
// });
// use GuzzleHttp\Middleware;

// // Login
// // Route::get('/', [AuthController::class, 'login']);
// // Route::post('/', [AuthController::class, 'auth']);

// // Route::group(['middleware' => ['auth:admin', 'ceklevel:admin']], function(){
// //     route::get('/dashboard', 'AdminController@index')->name('dashboard');
// // });

// // Route::group(['middleware' => ['auth:users', 'ceklevel:users']], function(){
// //     route::get('/dashboard', 'AdminController@user')->name('dashboard');
// // });

// Kategori
Route::middleware(['auth'])->group(function() {
    Route::get('/kategori', [CategoriesController::class, 'kategori']);
    Route::get('/kategori_add', [CategoriesController::class, 'tambah']);
    Route::get('/delete_category/{id}', [CategoriesController::class, 'hapus']);
    Route::post('/kategori_barang', [CategoriesController::class, 'store']);
});

// Kode Barang
Route::middleware(['auth'])->group(function() {
    Route::get('/kode_barang', [CodesController::class, 'kode']);
    Route::get('/kode_barang_add', [CodesController::class, 'tambah']);
    Route::get('/delete_code/{id}', [CodesController::class, 'hapus']);
    Route::post('/kode_barang', [CodesController::class, 'store']);
    
});

// Data barang
Route::get('/data_barang', [ItemController::class, 'barang']);

Route::get('/dataAdmin', [HomeController::class, 'dataAdmin']);

// Manage User
Route::middleware(['auth','adminAkses'])->group(function() {
    Route::get('/manageUser', [ManageUserController::class, 'index'])->name('user.manage');
    Route::get('/user_add', [ManageUserController::class, 'tambah']);
    Route::post('/user_add', [ManageUserController::class, 'store']);
    Route::get('/edit_user/{id}', [ManageUserController::class, 'edit']);
    Route::put('/edit_user/{id}', [ManageUserController::class, 'update'])->name('user.update');
    Route::get('/delete_user/{id}', [ManageUserController::class, 'hapus']);
    Route::get('/filter_user', [ManageUserController::class, 'filter'])->name('filter.user'); 
});
