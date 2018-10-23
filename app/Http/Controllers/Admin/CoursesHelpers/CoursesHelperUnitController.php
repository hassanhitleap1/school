<?php

namespace App\Http\Controllers\Admin\CoursesHelpers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\CoursesHelper;
use App\Model\UnitsHelper;

class CoursesHelperUnitController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id){
        $course=CoursesHelper::find($id);
         $units=$course->units;
         return view('admin.courses_helpers.units.index')->with('units',$units)->withId($id);
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create($id)
     {
         return view('admin.courses_helpers.units.create')->withId($id);
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
         $model=new UnitsHelper;
         $model->name=$request->name;
         $model->description=$request->description;
         $model->helper_id=$id;
         $model->time=1.5;
         $model->save();
         return redirect('/admin/courses_helpers/'.$id.'/units');
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id,UnitsHelper $unit)
     {
         return view('admin.courses_helpers.units.edit')->withId($id)->with('unit', $unit);
     }
 
     /**
      * Update the specified resource in storage.
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update($id,Request $request, UnitsHelper $unit)
     {
         $unit->name = $request->name;
         $unit->description = $request->description;
         $unit->time = 1.5;
         $unit->save();
         return redirect('/admin/courses_helpers/' . $id . '/units');
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id,UnitsHelper $unit)
     {
         $unit->delete();
         return redirect('/admin/courses_helpers/' . $id . '/units');
     }
 }
 