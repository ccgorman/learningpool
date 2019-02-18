<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Course;
use App\Model\UserCourseContent;

class CourseContent extends Model
{
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function userCourseContent()
    {
        return $this->hasMany(UserCourseContent::class);
    }
}
