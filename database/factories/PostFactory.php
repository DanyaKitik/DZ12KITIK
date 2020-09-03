<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id'=>factory(\App\User::class)->create(),
        'category_id'=>factory(\App\Category::class),
        'title'=>$faker->title,
        'body'=>implode(' ',$faker->sentences),
        'status'=>$faker->boolean,
    ];
});
