<?php

namespace App\Http\Controllers\Admin;

use App\Http\Middleware\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        //$this->middleware(Admin::class);

    }
    public function  index(){
       return view('admin.index');
    }
    public function login(){
        return view('admin.auth.login');
    }

    public function register(){
        return view('admin.auth.register');
    }

    public function go(){
        return "go";
    }
}
