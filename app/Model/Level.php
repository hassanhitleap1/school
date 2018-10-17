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

        self::saved(function($model){
            $model->create_at= date('Y-m-d');
        });

    }
}