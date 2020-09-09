<?php

namespace App\Http\Controllers\Site;

use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store($post)
    {
        $this->saveData(new Comment(), $post);
        return back();
    }
    private function makeValidation()
    {
        return request()->validate([
            'description' => 'required|min:3'
        ]);
    }
    private function saveData(Comment $comment, $post)
    {
        $this->makeValidation();
        $comment->description = request()->description;
        $comment->user_id = auth()->id();
        $comment->post_id = $post;
        $comment->save();
    }
}
