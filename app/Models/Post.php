<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
        ];
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function ($post) use ($slug){
        //     return $post['slug'] == $slug;
        // });

        // Arrow Function
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        if (! $post){
            abort(404);
        }
        return $post;

    }
};


?>