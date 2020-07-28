<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'full_name' => $faker->name,
        'job_title' => $faker->jobTitle,
        'salary' => $faker->numberBetween(2000,20000),
        'increase' => $faker->randomNumber(),
        'decrease' => $faker->randomNumber(),
        'start' => $faker->date(),
        'end' => $faker->date(),
        'appointment' => 'contract',
        'employment_status' => 'full time'
    ];
});
