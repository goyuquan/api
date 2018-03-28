<?php

// $faker = new Faker\Generator();
use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
  $faker->addProvider(new Faker\Provider\en_US\PhoneNumber($faker));
  
    return [
        'phone' => $faker->name,
        'password' => '$2y$10$sr6a1PMteAvWvGZMdmhTPu7m3G9SAj/2uBRovZ3ZiEDwsVPtxs3Vu',
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
