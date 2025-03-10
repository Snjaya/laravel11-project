<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $post1 = Post::factory()->create([
        //     'title' => 'The Future of Tech: Key Innovations in 2025',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'The-Future-of-Tech:-Key-Innovations-in-2025',
        //     'body' => 'The tech industry in 2025 is witnessing groundbreaking advancements, with AI-driven 
        //     automation, sustainable technology, and next-gen connectivity taking center stage. Artificial 
        //     intelligence is no longer just a tool but an integral part of daily life, powering smart assistants, 
        //     autonomous vehicles, and personalized digital experiences. Meanwhile, sustainability is becoming a 
        //     major focus, with companies developing energy-efficient data centers, eco-friendly gadgets, and 
        //     innovative recycling solutions for electronic waste. The fusion of technology and sustainability is 
        //     not just a trend but a necessity for a greener future.In addition, the rollout of ultra-fast 5G and 
        //     the early development of 6G networks are transforming how we communicate and interact with smart 
        //     devices. Augmented reality (AR) and virtual reality (VR) are also evolving beyond entertainment, 
        //     finding applications in healthcare, remote work, and education. With these innovations reshaping 
        //     industries, 2025 is proving to be a year of rapid transformation, making technology more powerful, 
        //     accessible, and sustainable.',
        // ]);

        $this->call([CategorySeeder::class,UserSeeder::class]);
        Post::factory(30)->recycle([
            Category::all(),
            User::all()
        ])->
        create();
    }
}
