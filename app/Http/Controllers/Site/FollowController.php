<?php

namespace App\Http\Controllers\Site;

use App\Follow;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function store($user)
    {
        $follow = Follow::whereFollowerId(auth()->id())->whereUserId($user)->first();
        if ($follow) {
            $follow->delete();
        }else {
            $this->saveData(new Follow(), $user);
        }
        return back();
    }
    private function saveData(Follow $follow, $user)
    {
        $follow->follower_id = auth()->id();
        $follow->user_id = $user;
        $follow->save();
    }
}
