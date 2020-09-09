<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Site')->middleware('auth')->group(function () {
    Route::get('/', 'PostController@index')->name('posts.index');
    Route::resource('posts', 'PostController')->only(['store', 'show']);
    Route::post('comments/posts/{post}', 'CommentController@store')->name('comments.store');
    Route::get('loves/{status}/posts/{post}', 'LoveController@store')->name('loves.store');
    Route::get('follows/users/{user}', 'FollowController@store')->name('follows.store');
    Route::resource('users', 'UserController')->only(['index','show','update']);
    Route::get('users/{user}/followers', 'UserController@followers')->name('users.followers');
});

Auth::routes();
