<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'nama' => $faker->username,
        'email' => $faker->unique()->safeEmail,
        'jumlah' => 5,
        'penerbit' => $faker->address,
        'created_at' => now()
    ];
});
