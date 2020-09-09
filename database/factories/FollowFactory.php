<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Follow;
use Faker\Generator as Faker;

$factory->define(Follow::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'follower_id' => factory(\App\User::class)
    ];
});
