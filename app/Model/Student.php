<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    protected  $table='users';
    protected $fillable = [
        'block'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
