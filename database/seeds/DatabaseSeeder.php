<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Model\Course::class,25)->create();
        factory(App\Model\CourseContent::class,500)->create();
        factory(App\Model\UserCourse::class,10)->create();
        factory(App\Model\UserCourseContent::class,50)->create();
    }
}
