<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin as ADMIN;
use App\Http\Controllers\ADMIN\ProdukController;
use App\Http\Controllers\ADMIN\JenisProdukController;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/admin')->group(function () {


Route::get('/', [ADMIN\DashboardController::class, 'index'])->name('dashboard');

// CRUD JenisProduk
    Route::get('/jenisproduk', [ADMIN\JenisProdukController::class, 'index'])->name('jenisproduk.index');
    Route::get('/jenisproduk/create', [ADMIN\JenisProdukController::class, "create"])->name('jenisproduk.create');
    Route::post('/jenisproduk/store', [ADMIN\JenisProdukController::class, "store"])->name('jenisproduk.store');
    Route::delete('/jabatan/delete/{id}', [ADMIN\JenisProdukController::class, "delete"])->name('jenisproduk.delete');
    Route::get('/jenisproduk/edit/{id}', [ADMIN\JenisProdukController::class, "edit"])->name('jenisproduk.edit');

    //CRUD produk
    Route::get('/produk', [ADMIN\ProdukController::class, 'index'])->name('produk.index');
    Route::get('/produk/create', [ADMIN\ProdukController::class, "create"])->name('produk.create');
    Route::post('/produk/store', [ADMIN\ProdukController::class, "store"])->name('produk.store');
    Route::delete('/produk/delete/{id}', [ADMIN\ProdukController::class, "delete"])->name('produk.delete');
    Route::get('/produk/edit/{id}', [ADMIN\ProdukController::class, "edit"])->name('produk.edit');

    // CRUD kategori tokoh
    Route::get('/kategori', [ADMIN\KategoriTokohController::class, 'index'])->name('kategoritokoh.index');
    Route::get('/kategori/create', [ADMIN\KategoriTokohController::class, "create"])->name('kategoritokoh.create');
    Route::post('/kategori/store', [ADMIN\KategoriTokohController::class, "store"])->name('kategoritokoh.store');
    Route::delete('/kategori/delete/{id}', [ADMIN\KategoriTokohController::class, "delete"])->name('kategoritokoh.delete');
    Route::get('/kategori/edit/{id}', [ADMIN\KategoriTokohController::class, "edit"])->name('kategoritokoh.edit');

    // CRUD Testimoni
    Route::get('/testimoni', [ADMIN\TestimoniController::class, 'index'])->name('testimoni.index');
    Route::get('/testimoni/create', [ADMIN\TestimoniController::class, "create"])->name('testimoni.create');
    Route::post('/testimoni/store', [ADMIN\TestimoniController::class, "store"])->name('testimoni.store');
    Route::delete('/testimoni/delete/{id}', [ADMIN\TestimoniController::class, "delete"])->name('testimoni.delete');
    Route::get('/testimoni/edit/{id}', [ADMIN\TestimoniController::class, "edit"])->name('testimoni.edit');
});



