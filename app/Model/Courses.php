<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\CorseLike;

class Courses extends Model
{
    protected $table='courses';

    public function units(){
        return $this->hasMany(Unit::class,'courses_id','id');
    }

    public function teacher(){
        return $this->hasOne(User::class,'id','teacher_id');
    }

    public function likes()
    {
        return $this->hasMany(CorseLike::class, 'course_id', 'id');
    }
}
