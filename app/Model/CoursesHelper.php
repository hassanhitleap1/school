<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CoursesHelper extends Model
{
    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function level(){
        return $this->hasOne(Level::class,'id','level_id');
    }
}
