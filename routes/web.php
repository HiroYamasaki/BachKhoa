<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/product-detail', function () {
    return view('product_detail');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-detail', function () {
    return view('blog_detail');
});
