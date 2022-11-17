<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TransaksiController;
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

    //route::group admin
    Route::group(['prefix'=>'/kategori'], function(){
        Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');
        Route::get('/create', [KategoriController::class, 'create'])->name('kategori.create');

    });

    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('admin.transaksi');
    Route::get('/laporan', [LaporanController::class, 'index'])->name('admin.laporan');
});

// Route::prefix('admin')->group(function () {
//     Route::get('/index', [DashboardController::class, 'index']);
// });
