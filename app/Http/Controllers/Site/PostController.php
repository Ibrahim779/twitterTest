<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('site.index', compact('posts'));
    }
    public function show(Post $post)
    {
        return view('site.posts.show', compact('post'));
    }
    public function store()
    {
        $this->saveData(new Post());
        return back();
    }
    private function makeValidation()
    {
        return request()->validate([
            'description' => 'required'
        ]);
    }
    private function saveData(Post $post)
    {
        $this->makeValidation();
        $post->description = request()->description;
        $post->image = request()->image?request()->image->store('posts/images','public'):null;
        $post->user_id = auth()->id();
        $post->save();
    }
}
