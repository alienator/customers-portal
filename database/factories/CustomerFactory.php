<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
      'user_id' => factory(\App\User::class)->create(),
    	'full_name' => $faker->name(),
    	'address' => $faker->text(110),
    	'country' => $faker->country(),
    	'city' => $faker->city(),
    	'phone' => $faker->phoneNumber()    	
    ];
});
