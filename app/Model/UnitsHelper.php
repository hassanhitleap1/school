<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UnitsHelper extends Model
{
    public function lessons(){
        return $this->hasMany(LessonsHelper::class,'unit_helper_id','id');
    }
}
