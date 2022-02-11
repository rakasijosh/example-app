<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site;
use App\Http\Controllers\ProductController;



Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});

// Route::get('/addproduct', function () {
//     return view('pages.addproduct');
// });

Route::match(['get', 'post'],"/product", [ProductController::class, "index"]);

Route::get("/try", [ProductController::class, "out"]);

// Route::get("/first", Route::get("/first", [Site::class, "first"]););
// Route::get("/first", [Site::class, "first"]);
