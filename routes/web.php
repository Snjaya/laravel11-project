<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about',['nama' => 'Sonjaya']);
});
Route::get('/blog', function () {
    return view('blog',['nama' => 'Sonjaya']);
});
Route::get('/contact', function () {
    return view('contact',['nama' => 'Sonjaya']);
});
