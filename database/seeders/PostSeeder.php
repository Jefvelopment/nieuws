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
             'title' => 'Motorcycle accident in the city center',
             'content' => 'A motorcycle accident occurred in the city center today, causing significant traffic disruptions...',
             'category_id' => 1,
         ],
         [
             'title' => 'Jeffrey van Zon wins 2025 DNRT Final races at Zandvoort',
             'content' => 'In an exhilarating display of skill and determination, Jeffrey van Zon clinched victory in the 2025 DNRT Final',
             'category_id' => 2,
         ],
         [
             'title' => 'Christmas time is here sooner than you think',
             'content' => 'The holiday season is approaching, and it’s time to start preparing for Christmas...',
             'category_id' => 3,
         ],
     ];
     Post::insert($posts);
    }
}