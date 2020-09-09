<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Love;
use Faker\Generator as Faker;

$factory->define(Love::class, function (Faker $faker) {
    return [
        'status' => $faker->randomElement(['like', 'dislike']),
        'post_id' => factory(\App\Post::class),
        'user_id' => factory(\App\User::class),
    ];
});
