<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/home', function () {
    return view('home',['nama' => 'Sonjaya']);
});
Route::get('/blog', function () {
    return view('blog',['nama' => 'Sonjaya']);
});
Route::get('/contact', function () {
    return view('contact',['nama' => 'Sonjaya']);
});
