<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Courses;

class HomeController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coures= Courses::take(10)->get();
        return view('home')->withCoures($coures);
    }


}
