<?php

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

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/about', function () {
    return view('about');
});


Route::prefix('/shop')->group(function () {
    Route::get('/', [ShopController::class, 'show']);

    Route::get('/book-details', function () {
        return view('book-details');
    });
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/order', function () {
    return view('order');
});

Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin-db');
    });

    Route::prefix('/book')->group(function () {
        Route::get('/', function () {
            return view('admin-book');
        });

        Route::get('/add-book', function () {
            return view('addbook');
        });
    });


    Route::get('/author', function () {
        return view('admin-author');
    });

    Route::get('/publisher', function () {
        return view('admin-publisher');
    });

    Route::get('/shipping', function () {
        return view('shipping');
    });
});
