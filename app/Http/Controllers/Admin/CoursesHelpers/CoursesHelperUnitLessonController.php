<?php

namespace App\Http\Controllers\Admin\CoursesHelpers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoursesHelperUnitLessonController extends Controller
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
        $this->validate($request, $rules);
        $model = new Lessons;
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
}
