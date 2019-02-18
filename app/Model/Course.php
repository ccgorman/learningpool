<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Client;
use App\Model\CourseContent;
use App\Model\UserCourse;

class Course extends Model
{
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function courseContents()
    {
        return $this->hasMany(CourseContent::class);
    }

    public function userCourses()
    {
        return $this->hasMany(UserCourse::class);
    }
}
