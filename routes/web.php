<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;

Route::get('/list-product', [ProdukController::class, 'index']);


// Route default (home)
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

// Route view biasa
Route::get('/welcome', function () {
    return view('welcome');
});

// Route parameter
Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});

// Group route admin
Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });

    // ✅ Route ke controller AdminController
    Route::get('/barang', [AdminController::class, 'tampilkan']);
});

