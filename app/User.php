<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use Notifiable;
    use SoftDeletes;

    const SUPER_ADMIN=0;
    const ADMIN=1;
    const TEACHER=2;
    const STUDENT=3;
    const ACTIVE=1;
    const DISACTIVE=0;
    const BLOCK=1;
    const UNBLOCK=0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','block',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['deleted_at'];

}
