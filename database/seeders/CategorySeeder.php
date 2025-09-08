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
            
        ];
        Category::insert($categories);
    }
}
