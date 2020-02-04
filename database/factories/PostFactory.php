<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->sentence(8),
        'publish_at' => now(),
        'content' => $faker->paragraph(15),
        'user_id' => rand(1,51)
    ];
});
