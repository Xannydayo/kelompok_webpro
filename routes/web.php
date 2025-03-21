<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('beranda');
});


Route::get('backend/login', [LoginController::class, 'loginBackend'])->name('backend.login');
Route::post('backend/login', [LoginController::class, 'authenticateBackend'])->name('backend.login');
Route::post('backend/logout', [LoginController::class, 'logoutBackend'])->name('backend.logout');

Route::middleware(['auth'])->group(function () {
   


    Route::get('backend/beranda', [BerandaController::class, 'berandaBackend'])->name('backend.beranda')->middleware('auth');
    Route::resource('backend/user', UserController::class, ['as' => 'backend'])->middleware('auth');
    
    // Route untuk Kategori
    Route::resource('backend/kategori', KategoriController::class, ['as' => 'backend'])->middleware('auth');
    
    // Route untuk Produk
    Route::resource('backend/produk', ProdukController::class, ['as' => 'backend'])->middleware('auth');
    
    Route::controller(ProdukController::class)->group(function () {
        // Route untuk menghapus foto
        Route::post('/foto-produk/store', 'storeFoto')->name('backend.foto_produk.store');
        Route::delete('foto-produk/{id}', 'destroyFoto')->name('backend.foto_produk.destroy');

        Route::get('backend/laporan/formproduk', 'formProduk')->name('backend.laporan.formproduk');
        Route::post('backend/laporan/cetakproduk', 'cetakProduk')->name('backend.laporan.cetakproduk');
    });
    
    Route::controller(UserController::class)->group(function () {
        // Route untuk menghapus foto
        Route::get('backend/laporan/formuser', 'formUser')->name('backend.laporan.formuser');
        Route::post('backend/laporan/cetakuser', 'cetakUser')->name('backend.laporan.cetakuser');
    });


});


    // Frontend
    Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

    Route::controller(ProdukController::class)->group(function () {
        //Detail Produk
        Route::get('/produk/detail/{id}', 'detail')->name('produk.detail');
        Route::get('/produk/kategori/{id}', 'produkKategori')->name('produk.kategori');
        Route::get('/produk/all', 'produkAll')->name('produk.all');
       

    });

    //API Google
    Route::get('/auth/redirect', [CustomerController::class, 'redirect'])->name('auth.redirect');
    Route::get('/auth/google/callback', [CustomerController::class, 'callback'])->name('auth.callback');

    // Logout
    Route::post('/logout', [CustomerController::class, 'logout'])->name('logout');
