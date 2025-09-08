<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $posts = [
         [
             'title' => 'Breaking News: Major Event Unfolds',
             'content' => 'A major event has unfolded in the city today, drawing attention from around the world...',
             'category_id' => 1,
         ],
         [
             'title' => 'Tech Innovations of 2024',
             'content' => 'The year 2024 has seen a surge in technological innovations, with new gadgets and software...',
             'category_id' => 3,
         ],
         [
             'title' => 'Health Tips for a Better Life',
             'content' => 'Maintaining good health is crucial. Here are some tips to help you lead a healthier life...',
             'category_id' => 4,
         ],
     ];
     Post::insert($posts);
    }
}