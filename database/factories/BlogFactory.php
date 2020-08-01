<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title' =>$faker->userName,
        'description' =>$faker->text(45),
        'author_id' =>$faker->numberBetween(1, 10),        
        'reputation'=>$faker->numberBetween(0, 1000), //wiew
        'zakaz'=>$faker->numberBetween(0, 1000), //like
    ];
});
