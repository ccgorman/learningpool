<?php

use Faker\Generator as Faker;
use App\Model\Course;

$factory->define(App\Model\CourseContent::class, function (Faker $faker) {
    return [
        'course_id' => function() {
            return Course::all()->random();
        },
        'position' => $faker->numberBetween(1,100),
        'section' => $faker->word,
        'content' => $faker->paragraph
    ];
});
