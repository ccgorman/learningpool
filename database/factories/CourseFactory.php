<?php

use Faker\Generator as Faker;
use App\Model\Client;

$factory->define(App\Model\Course::class, function (Faker $faker) {
    return [
        'client_id' => function() {
            return Client::all()->random();
        },
        'title' => $faker->word
    ];
});
