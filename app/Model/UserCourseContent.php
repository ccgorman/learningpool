<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserCourseContent extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function courseContent()
    {
        return $this->belongsTo(CourseContent::class);
    }
}
