<?php

use Faker\Generator as Faker;

$factory->define(\App\TablePost::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->text,
    ];
});
