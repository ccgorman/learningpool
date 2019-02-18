<?php

use Faker\Generator as Faker;
use App\Model\User;
use App\Model\Course;

$factory->define(App\Model\UserCourse::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return User::all()->random();
        },
        'course_id' => function() {
            return Course::all()->random();
        }
    ];
});
