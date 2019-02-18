<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Course;

class Client extends Model
{
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
