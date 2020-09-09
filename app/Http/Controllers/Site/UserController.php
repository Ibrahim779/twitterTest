<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $recommended_users = User::take(20)->get();
        $random_users = User::inRandomOrder()->take(10)->get();
        return view('site.users.index', compact('recommended_users', 'random_users'));
    }
    public function show(User $user)
    {
        $posts = Post::whereUserId($user->id)->latest()->get();
        return view('site.users.show', compact('posts', 'user'));
    }
    public function followers(User $user)
    {
        return view('site.users.followers', compact('user'));
    }
    public function update(User $user)
    {
        $this->saveData($user);
        return back();
    }
    private function saveData(User $user)
    {
        $user->cover = request()->cover?request()->cover->store('user/cover','public'):$user->cover;
        $user->avatar = request()->avatar?request()->avatar->store('user/avatar','public'):$user->avatar;
        $user->save();
    }
}
