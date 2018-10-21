<?php

namespace App\Http\Controllers\Admin\CoursesHelpers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoursesHelperUnitController extends Controller
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
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id,Unit $unit)
     {
         return view('teacher.courses.units.edit')->withId($id)->with('unit', $unit);
     }
 
     /**
      * Update the specified resource in storage.
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update($id,Request $request, Unit $unit)
     {
         $unit->name = $request->name;
         $unit->description = $request->description;
         $unit->time = 1.5;
         $unit->save();
         return redirect('/teacher/courses/' . $id . '/units');
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id,Unit $unit)
     {
         $unit->delete();
         return redirect('/teacher/courses/' . $id . '/units');
     }
 }
 