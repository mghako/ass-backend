<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use Faker\Generator as Faker;

$factory->define(City::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement(['Yangon', 'Mandalay', 'Pyin Oo Lwin', 'Nay Pyi Taw', 'Kyainge Tong'])
    ];
});
