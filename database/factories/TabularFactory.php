<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

namespace Database\Factories\Laravue\Models\TabularFactory;

use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Tabular::class, function (Faker $faker) {
    return [
        'author' => $this->faker->name,
        'importants' => $this->faker->randomDigit(1),
        'created_at' => $this->facker->dateTime(),
        'updated_at' => $this->facker->dateTime(),
        'status' => $this->faker->randomDigit(1),
        'title' => $this->faker->word()
    ];
});