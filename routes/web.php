<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about',['nama' => 'Sonjaya','title' => 'About']);
});

Route::get('/posts', function () {
    // wild card
    return view('posts',['title' => 'Blog','posts' => [
        [
            'id' => '1',
            'slug' => 'Judul Artikel 1',
            'title' => 'Judul Artikel 1',
            'author' => 'Sonjaya',
            'body' => 'Artikel 1 Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Ducimus voluptatibus perferendis ullam eveniet 
            consequuntur aperiam officiis! Nobis cupiditate, 
            veniam doloremque id delectus doloribus asperiores quisquam obcaecati 
            cumque, mollitia minima voluptatum.'
        ],
        [
            'id' => '2',
            'slug' => 'Judul Artikel 2',
            'title' => 'Judul Artikel 2',
            'author' => 'Herman',
            'body' => 'Artikel 2 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi nam quas odit omnis? 
            Quas omnis libero pariatur dolorem! Architecto tempora voluptate porro ad 
            numquam repellat pariatur, temporibus quo voluptatum quasi!.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug){
    $posts = [
        [
            'id' => '1',
            'slug' => 'Judul Artikel 1',
            'title' => 'Judul Artikel 1',
            'author' => 'Sonjaya',
            'body' => 'Artikel 1 adalah Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Ducimus voluptatibus perferendis ullam eveniet 
            consequuntur aperiam officiis! Nobis cupiditate, 
            veniam doloremque id delectus doloribus asperiores quisquam obcaecati 
            cumque, mollitia minima voluptatum.'
        ],
        [
            'id' => '2',
            'slug' => 'Judul Artikel 2',
            'title' => 'Judul Artikel 2',
            'author' => 'Herman',
            'body' => 'Artikel 2 adalah lorem dolor sit amet consectetur 
            adipisicing elit. Ducimus voluptatibus perferendis ullam eveniet 
            consequuntur aperiam officiis! Nobis cupiditate, 
            veniam doloremque id delectus doloribus asperiores quisquam obcaecati 
            cumque, mollitia minima voluptatum.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug){
        return $post['slug'] == $slug;
    });
    
    return view('post',['title' => 'Single Post', 'post' => $post]);
});


Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});
