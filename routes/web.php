<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/service',function(){
    return view('service');
});

Route::get('/product',function(){
    return view('product');
});
