<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [ 'name' => 'Murder'],
            [ 'name' => 'Traffic'],
            [ 'name' => 'Crash'],
            [ 'name' => 'Racing'],
            [ 'name' => 'Holiday'],
            [ 'name' => 'Festive'],
        ];

        Tag::insert($tags);
    }
}
