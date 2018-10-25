<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //
    public function courses(){
        return $this->hasMany(Courses::class,'id','matireial_id');
    }
}
