<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        //
        'comment' => $faker->sentence(rand(5,15)),
        'user_id' => rand(1,51),
        'post_id' => rand(1,300),
    ];
});
