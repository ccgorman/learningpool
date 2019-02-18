<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\User;

class Access extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
