<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Love;
use Illuminate\Http\Request;

class LoveController extends Controller
{
    public function store($status, $post)
    {
        $love = Love::wherePostId($post)->whereUserId(auth()->id())->first();
        $this->saveData($love??new Love(), $status, $post);
        return back();
    }
    private function saveData(Love $love, $status, $post)
    {
        $love->status = $status;
        $love->post_id = $post;
        $love->user_id = auth()->id();
        $love->save();
    }
}
