<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' =>'Tech News & Trends',
            'slug' =>'Tech-News-&-Trends'
        ]);
        Category::create([
            'name' =>'Software & Applications',
            'slug' =>'Software-&-Applications'
        ]);
        Category::create([
            'name' =>'Programming & Development',
            'slug' =>'Programming -&-Development'
        ]);
    }
}
