<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
	'full_name' => $faker->name(),
	'user_name' => $faker->name(),
	'user_password' => $faker->text(12),
	'address' => $faker->text(110),
	'country' => $faker->country(),
	'city' => $faker->city(),
	'phone' => $faker->phoneNumber(),
	'email' => $faker->email()
    ];
});
