<?php

namespace App\Http\Controllers\Teacher\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Unit;
use App\Model\Lessons;
use Illuminate\Support\Facades\Request as RequstIlumninate;
use Illuminate\Support\Facades\Storage;
use File;


class CoursesUnitLessonController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index($idCourse, $idUnit)
    {
        $unit= Unit::find($idUnit);
        $lessons= $unit->lessons;
        return view('teacher.courses.lessons.index')->withIdCourse($idCourse)->withIdUnit($idUnit)->withLessons($lessons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idCourse,  $idUnit)
    {
        return view('teacher.courses.lessons.create')->withIdCourse($idCourse)->withIdUnit($idUnit);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($idCourse, $idUnit,Request $request)
    {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'content'=> 'required',
        ];
        $model = new Lessons;
        $this->validate($request, $rules);
        if ($request->hasFile('file')) {
            try {
                $vedio = RequstIlumninate::file('file');
                $name = md5(uniqid(rand(), true)).'.'.$vedio->getClientOriginalExtension();
                $path='vedio/vedio-user-1/course-'.$idCourse;
                if(! File::isDirectory($path)){
                    Storage::makeDirectory($path);
                }
                $vedio->move($path,$name);
                $model->path_vedio=$path.'/'.$name;
            } catch (Illuminate\Filesystem\FileNotFoundException $e) {
                var_dump($e->getMessage()) ;
            }
        }
        $model->name = $request->name;
        $model->description = $request->description;
        $model->content = $request->content;
        $model->time = 1.00;
        $model->unit_id= $idUnit;
        $model->save();
        return redirect('/teacher/courses/' . $idCourse . '/units/' . $idUnit . '/lessons/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idCourse,$idUnit,$id)
    {
        $lesson=Lessons::find($id);
        return view('teacher.courses.lessons.edit')->withIdCourse($idCourse)->withIdUnit($idUnit)->withLesson($lesson);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idCourse, $idUnit, Lessons $lesson)
    {
        if ($request->hasFile('file')) {
            try {
                if($lesson->path_vedio != null){
                    if(File::exists($lesson->path_vedio)){
                        File::delete($lesson->path_vedio);
                    }
                }
                $vedio = RequstIlumninate::file('file');
                $name = md5(uniqid(rand(), true)).'.'.$vedio->getClientOriginalExtension();
                $path='vedio/vedio-user-1/course-'.$idCourse;
                if(! File::isDirectory($path)){
                    Storage::makeDirectory($path);
                }
                $vedio->move($path,$name);
                $lesson->path_vedio=$path.'/'.$name;
            } catch (Illuminate\Filesystem\FileNotFoundException $e) {
                var_dump($e->getMessage()) ;
            }
        }
        $lesson->name = $request->name;
        $lesson->description = $request->description;
        $lesson->content = $request->content;
        $lesson->save();
        return redirect('/teacher/courses/' . $idCourse . '/units/' . $idUnit . '/lessons/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCourse, $idUnit, Lessons $lesson)
    {
        $lesson->delete();
        return redirect('/teacher/courses/' . $idCourse . '/units/' . $idUnit . '/lessons/');
    }


    public function deleteVedio($idCourse, $idUnit,  $id){
        $lesson= Lessons::find($id);
        if($lesson->path_vedio != null){
            if(File::exists($lesson->path_vedio)){
                File::delete($lesson->path_vedio);
                $lesson->path_vedio=Null;
                $lesson->save();
            }
        }
        return redirect('/teacher/courses/' . $idCourse . '/units/' . $idUnit . '/lessons/'.$id.'/edit');
    }
}
