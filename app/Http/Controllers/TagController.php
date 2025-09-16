<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    public function show(\App\Models\Tag $tag)
    {
        $tag->load('posts');
        return view('tags.show', compact('tag'));
    }
}
