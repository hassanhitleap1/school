<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table='courses';

    public function units(){
        return $this->hasMany(Unit::class,'courses_id','id');
    }
}
