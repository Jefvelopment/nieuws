<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

$categories = [
            ['name' => 'Technology', 'description' => 'Posts related to technology.'],
            ['name' => 'Health', 'description' => 'Posts related to health and wellness.'],
            ['name' => 'Travel', 'description' => 'Posts about travel experiences and tips.'],
            ['name' => 'Food', 'description' => 'Posts about food and recipes.'],
            ['name' => 'Sports', 'description' => 'Posts about sports events and news.'],
            ['name' => 'Entertainment', 'description' => 'Posts about movies, music, and entertainment.'],
            ['name' => 'Business', 'description' => 'Posts about business and finance.'],
            ['name' => 'Lifestyle', 'description' => 'Posts about lifestyle and personal development.'],
            ['name' => 'Education', 'description' => 'Posts about education and learning.'],
            ['name' => 'Science', 'description' => 'Posts about scientific discoveries and research.'],
            
        ];
        Category::insert($categories);
    }
}
