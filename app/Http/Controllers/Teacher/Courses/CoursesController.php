<?php

namespace App\Http\Controllers\Teacher\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Courses;
use Illuminate\Support\Facades\Auth;
use File;
use Illuminate\Support\Facades\Storage;
use App\Model\Material;
use App\Model\Level;
class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Courses::where('teacher_id',Auth::user()->id)->get();
        return view('teacher.courses.index')->withCourses($courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materials=Material::all();
        $levels=Level::all();
        return view('teacher.courses.create')
        ->with('materials',$materials)
        ->with('levels',$levels);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'name'=>'required',
            'description'=>'required',
            'price'=>'numeric|required',
            'level_id'=>'required',
            'material_id'=>'required',
            'cover'=>'image',
        ];
        $this->validate($request,$rules);
        $model=new Courses;
        if ($request->hasFile('cover')) {
            if($request->file('cover')->isValid()) {
                try {
                    $file = $request->file('cover');
                    $name = md5(uniqid(rand(), true)).'.'.$file->getClientOriginalExtension();
                    $path='images/covers';
                    if(! File::isDirectory($path)){
                        Storage::makeDirectory($path);
                    }
                    $model->cover_path=$path.'/'.$name;
                    $file->move( $path,$name);
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {
                    var_dump($e->getMessage()) ;
                }
            } 
        }else{
            $model->cover_path=$request->cover_helper;
        }

        $model->name=$request->name;
        $model->description=$request->description;
        $model->level_id=$request->level_id;
        $model->material_id=$request->material_id;
        $model->price=$request->price;
        $model->teacher_id=Auth::user()->id;
        $model->time=1.5;
        $model->save();
        return redirect('/teacher/courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Courses $course)
    {
        return view('teacher.courses.show')->with('course',$course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Courses $course)
    {
        $materials=Material::all();
        $levels=Level::all();
        return view('teacher.courses.edit')->with('course',$course)
        ->with('materials',$materials)
        ->with('levels',$levels);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courses $course)
    {
        $rules=[
            'cover'=>'image',
        ];
        $this->validate($request,$rules);
        if ($request->hasFile('cover')) {
            if($request->file('cover')->isValid()) {
                try {
                    $file = $request->file('cover');
                    $name = md5(uniqid(rand(), true)).'.'.$file->getClientOriginalExtension();
                    $path='images/covers';
                    if(! File::isDirectory($path)){
                        Storage::makeDirectory($path);
                    }
                    $course->cover_path=$path.'/'.$name;
                    $file->move( $path,$name);
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {
                    var_dump($e->getMessage()) ;
                }
            } 
        }else{
            $course->cover_path=$request->cover_helper;
        }
        $course->name=$request->name;
        $course->description=$request->description;
        $course->price=$request->price;
        $course->level_id=$request->level_id;
        $course->material_id=$request->material_id;
        $course->time=1.5;
        $course->save();
        return redirect('/teacher/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courses $course)
    {
        $course->delete();
        return redirect('/teacher/courses');
    }

    /**
     * delete cover coruse 
     * @param $id integer
     */
    public function deleteCover($id){
        $coruse= Courses::find($id);
        if($coruse->cover_path != null){
            if(File::exists($coruse->cover_path)){
                File::delete($coruse->cover_path);
                $coruse->cover_path=Null;
                $coruse->save();
            }
        }
        return redirect('/teacher/courses/' . $id . '/edit');
    
    }
}
