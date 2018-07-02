<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{

    public function login(){
        return view('teacher.auth.login');
    }

    public function register(){
        return view('teacher.auth.register');
    }
}
