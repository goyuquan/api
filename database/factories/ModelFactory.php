<?php

// $faker = new Faker\Generator();
// $faker->addProvider(new Faker\Provider\en_US\PhoneNumber($faker));

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'phone' => $faker->phoneNumber,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
        'name' => $faker->name,
        'remember_token' => str_random(10),
    ];
});

// $factory->define(App\User::class, function () {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->email,
//     ];
// });
