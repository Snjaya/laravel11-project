<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about',['nama' => 'Sonjaya','title' => 'About']);
});

Route::get('/posts', function () {
    // $posts = Post::with(['author','category'])->latest()->get();
    return view('posts',['title' => 'Blog','posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post){
    // $post = Post::find($id);
    return view('post',['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});

Route::get('/authors/{user:username}', function (User $user){
    // $post = Post::find($id);
    // $posts = $user->posts->load(['category','author']);
    return view('posts',['title' => count($user->posts) .' Articles by '.$user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category){
    // $post = Post::find($id);
    // $posts = $category->posts->load(['category','author']);
    return view('posts',['title' => count($category->posts) .' Articles From Category '.$category->name, 'posts' => $category->posts]);
});