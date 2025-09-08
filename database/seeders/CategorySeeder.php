<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $categories = ['Sports', 'Politics', 'Technology', 'Health', 'Entertainment', 'Business', 'Science', 'World'];
    }
        Category::insert($categories);
}
