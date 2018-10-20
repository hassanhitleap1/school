<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table='units';
    
    public function lessons(){
        return $this->hasMany(Lessons::class);
    }
}
