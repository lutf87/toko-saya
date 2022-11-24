<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

// Route::get('/', [PageController::class, 'home']);
// Route::get('/kategori', [PageController::class, 'kategori']);
// Route::get('/kontak', [PageController::class, 'kontak']);
// Route::get('/about', [PageController::class, 'about']);

/*
Route::get('/index', [DashboardController::class, 'index']);

Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/home', 'home');
    Route::get('/kategori', 'kategori');
    Route::get('/kontak', 'kontak');
    Route::get('/about', 'about');
});
*/

Route::group(['prefix'=>'/admin'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.admin');

    //route::group kategori
    Route::group(['prefix'=>'/kategori'], function(){
        Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');
        Route::get('/create', [KategoriController::class, 'create'])->name('kategori.create');
        Route::get('/edit', [KategoriController::class, 'edit'])->name('kategori.edit');

    });

    //route::group produk
    Route::group(['prefix'=>'/produk'], function(){
        Route::get('/', [ProdukController::class, 'index'])->name('produk.index');
        Route::get('/create', [ProdukController::class, 'create'])->name('produk.create');
        Route::get('/show', [ProdukController::class, 'show'])->name('produk.show');
        Route::get('/edit', [ProdukController::class, 'edit'])->name('produk.edit');
    });

    //route::group customer
    Route::group(['prefix'=>'/customer'], function(){
        Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
        Route::get('/edit', [CustomerController::class, 'edit'])->name('customer.edit');
    });

    //route::group transaksi
    Route::group(['prefix'=>'/transaksi'], function(){
        Route::get('/', [TransaksiController::class, 'index'])->name('transaksi.index');
        Route::get('/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
        Route::get('/show', [TransaksiController::class, 'show'])->name('transaksi.show');
    });

    //route::group user
    Route::group(['prefix'=>'/profile'], function(){
        Route::get('/', [UserController::class, 'index'])->name('profile.index');
        Route::get('/setting', [UserController::class, 'setting'])->name('profile.setting');
    });

});

// Route::prefix('admin')->group(function () {
//     Route::get('/index', [DashboardController::class, 'index']);
// });
