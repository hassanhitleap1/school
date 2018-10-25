<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected  $table='levels';

    /**
     * boot model
     */

    public static function boot()
    {
        parent::boot();

        // self::saved(function($model){
        //     $model->create_at= date('Y-m-d');
        // });

    }

    public function courses(){
        return $this->hasMany(Courses::class,'level_id','id');
    }
}
