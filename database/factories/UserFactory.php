<?php

use Faker\Generator as Faker;
use App\Model\Client;
use App\Model\Access;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'client_id' => function() {
            return Client::all()->random();
        },
        'access_id' => function() {
            return Access::all()->random();
        },
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'email_verified_at' => now(),
        'remember_token' => str_random(10)
    ];
});
