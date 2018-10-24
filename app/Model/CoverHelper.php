<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CoverHelper extends Model
{
    public function material(){
        return $this->hasOne(Material::class,'id','material_id');
    }
}
