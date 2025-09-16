<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
class PostController extends Controller {
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }
   public function store(PostStoreRequest $request)
   {

       Post::create($request->validated());
       return redirect()->route('posts.index');
    }
    public function update(PostStoreRequest $request, Post $post)
    {
        $post->update($request->validated());
        return redirect()->route('posts.index');
    }
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }
    public function show(\App\Models\Post $post)
    {
        $post->load('tags');
        return view('posts.show', compact('post'));
    }
}
