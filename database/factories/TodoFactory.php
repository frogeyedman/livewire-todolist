<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Todo::class, function (Faker $faker) {
    return [
        'title' => $faker->text(90),
        'text' => $faker->text,
        'is_done' => $faker->boolean,
    ];
});
