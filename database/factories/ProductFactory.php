<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Category;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->text(15),
        'quality' => $faker->numberBetween(0, 10),
        'price' => $faker->numberBetween(1, 9999),
        'description'=> $faker->text(100),
        'number' => $faker->numberBetween(30, 60), 
        'color' => $faker->colorName, 
        'category_id'=> $faker->numberBetween(1, 5),
        'tags' =>$faker->text(5),
    ];
});
