<?php

use Faker\Generator as Faker;
use App\Model\User;
use App\Model\CourseContent;

$factory->define(App\Model\UserCourseContent::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return User::all()->random();
        },
        'course_content_id' => function() {
            return CourseContent::all()->random();
        }
    ];
});
