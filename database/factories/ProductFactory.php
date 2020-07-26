<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'sku' => $faker->randomNumber(),
        'name' => $faker->text(60),
        'description' => $faker->text(100),
        'buy_price' => $faker->randomFloat(),
        'sell_price' => $faker->randomFloat(),
        'picture' => $faker->image(),
        'stock' => $faker->randomDigit()
    ];
});
