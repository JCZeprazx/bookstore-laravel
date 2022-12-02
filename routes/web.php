<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\ShopController;
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

Route::get('/', [ShopController::class, 'landing']);

Route::get('/about', function () {
    return view('about');
});


Route::prefix('/shop')->group(function () {
    Route::get('/', [ShopController::class, 'show']);
    Route::get('/book-details/{id}', [ShopController::class, 'detail']);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/order', [OrderController::class, 'show']);

Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin.admin-db');
    });

    Route::prefix('/book')->group(function () {
        Route::get('/', [BookController::class, 'show']);
        Route::prefix('/add-book')->group(function () {
            Route::get('/', [BookController::class, 'bookForm']);
            Route::post('/input', [BookController::class, 'store']);
        });

        Route::get('/view/{id}', [BookController::class, 'view']);
        Route::get('/edit/{id}', [BookController::class, 'edit']);

        Route::prefix('/edit/{id}')->group(function () {
            Route::get('/', [BookController::class, 'edit']);
            Route::put('/update', [BookController::class, 'editData']);
        });
        Route::delete('/delete/{id}', [BookController::class, 'destroy']);

    });

    Route::prefix('/author')->group(function () {
        Route::get('/', [AuthorController::class, 'show']);
        Route::put('/edit/{id}', [AuthorController::class, 'edit']);
        Route::delete('/delete/{id}', [AuthorController::class, 'destroy']);
        Route::post('/input', [AuthorController::class, 'store']);
    });

    Route::prefix('/publisher')->group(function () {
        Route::get('/', [PublisherController::class, 'show']);
        Route::post('/input', [PublisherController::class, 'store']);
        Route::put('/edit/{id}', [PublisherController::class, 'edit']);
        Route::delete('/delete/{id}', [PublisherController::class, 'destroy']);
    });

    Route::get('/shipping', function () {
        return view('admin.shipping');
    });
});
