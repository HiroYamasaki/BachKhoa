<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('aboutUs');
});

Route::get('/contact-us', function () {
    return view('contactUs');
});

Route::get('/faq', function () {
    return view('FAQ');
});

Route::get('/shop', [ProductController::class, 'index']);

Route::get('/product-detail', [ProductController::class, 'show']);

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-detail', function () {
    return view('blog_detail');
});
