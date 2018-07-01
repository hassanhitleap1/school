<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * return page login
     */
    public function login(){
        return view('admin.auth.login');
    }
}
