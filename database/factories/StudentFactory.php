<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Student::class, function (Faker $faker) {
    return [
        'firstName' => $faker->firstNameMale,
        'lastName' => $faker->lastName,
        'email' => $faker->email,
        'password' => $faker->password,
        'school' => $faker->company,
        'education' => $faker->jobTitle,
        'dateOfBirth' => $faker->dateTime($max = 'now', $timezone = null),
    ];
});
