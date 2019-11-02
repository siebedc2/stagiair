<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Internship::class, function (Faker $faker) {
    return [
        'title' => $faker->jobTitle,
        'description' => $faker->realText(100),
        'requirements' => $faker->realText(100),
        'offer' => $faker->realText(100),
        'companyId' => $faker->numberBetween($min = 0, $max = 10),
        'active' => $faker->boolean,
    ];
});
