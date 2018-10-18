<?php

namespace App\Http\Controllers\Teacher\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Courses;
use App\Model\Unit;

class CoursesUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id){
       $course=Courses::find($id);
        $units=$course->units;
        return view('teacher.courses.units.index')->with('units',$units)->withId($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('teacher.courses.units.create')->withId($id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id,Request $request)
    {
        $rules=[
            'name'=>'required',
            'description'=>'required'
        ];
        $this->validate($request,$rules);
        $model=new Unit;
        $model->name=$request->name;
        $model->description=$request->description;
        $model->courses_id=$id;
        $model->time=1.5;
        $model->save();
        return redirect('/teacher/courses/'.$id.'/units');
    }
}
