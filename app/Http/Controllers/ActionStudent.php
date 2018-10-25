<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CorseLike;
use Illuminate\Support\Facades\Auth;

class ActionStudent extends Controller
{
    public function likeCourse(Request $request){
        if(! Auth::check()){
            return response()->json(['succcess'=>0]);
        }else {
            $cuorseLike = new CorseLike;
            $cuorseLike->course_id=$request->idCourse;
            $cuorseLike->user_id = \Auth::user()->id;
            $cuorseLike->save();
            return response()->json(['succcess' => 1]);
        }
    }
}
