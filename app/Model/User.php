<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Access;
use App\Model\UserCourse;
use App\Model\UserCourseContent;

class User extends Model
{
    public function access()
    {
        return $this->belongsTo(Access::class);
    }
    
    public function userCourse()
    {
        return $this->hasMany(userCourse::class);
    }

    public function userCourseContent()
    {
        return $this->hasMany(UserCourseContent::class);
    }
}
