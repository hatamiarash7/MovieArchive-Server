<?php

$factory->define(App\Movie::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => str_random(100),
        'year' => $faker->year(),
        'point' => $faker->randomFloat(2, 1.0, 9.9),
        'country' => $faker->country,
        'language' => str_random(2),
        'age' => $faker->numberBetween(0,30),
        'length' => $faker->numberBetween(60,240),
        'release_at' => date('Y-m-d'),
        'directors' => str_random(50),
        'writers' => str_random(50),
    ];
});
