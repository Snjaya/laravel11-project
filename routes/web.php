<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about',['nama' => 'Sonjaya','title' => 'About']);
});
Route::get('/posts', function () {
    return view('posts',['title' => 'Blog','posts' => [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Sonjaya',
            'body' => 'Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Ducimus voluptatibus perferendis ullam eveniet 
            consequuntur aperiam officiis! Nobis cupiditate, 
            veniam doloremque id delectus doloribus asperiores quisquam obcaecati 
            cumque, mollitia minima voluptatum.'
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Herman',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi nam quas odit omnis? 
            Quas omnis libero pariatur dolorem! Architecto tempora voluptate porro ad 
            numquam repellat pariatur, temporibus quo voluptatum quasi!.'
        ]
    ]]);
});
Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});
