<?php

namespace App\Http\Controllers\Teacher\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Courses;
use Illuminate\Support\Facades\Auth;
use File;
use Illuminate\Support\Facades\Storage;
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
        return view('teacher.courses.create');
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
        }

        $model->name=$request->name;
        $model->description=$request->description;
        $model->level_id=1;
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
        return view('teacher.courses.edit')->with('course',$course);
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
        }
        $course->name=$request->name;
        $course->description=$request->description;
        $course->level_id=1;
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
