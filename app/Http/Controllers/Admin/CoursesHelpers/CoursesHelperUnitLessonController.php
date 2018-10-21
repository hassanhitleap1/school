<?php

namespace App\Http\Controllers\Admin\CoursesHelpers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UnitsHelper;
use App\Model\LessonsHelper;

class CoursesHelperUnitLessonController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index($idCourse, $idUnit)
    {
        $unit= UnitsHelper::find($idUnit);
        $lessons= $unit->lessons;
        return view('admin.courses_helpers.lessons.index')->withIdCourse($idCourse)->withIdUnit($idUnit)->withLessons($lessons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idCourse,  $idUnit)
    {
        return view('admin.courses_helpers.lessons.create')->withIdCourse($idCourse)->withIdUnit($idUnit);
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
        $model = new LessonsHelper;
        $model->name = $request->name;
        $model->description = $request->description;
        $model->content = $request->content;
        $model->time = 1.00;
        $model->unit_helper_id= $idUnit;
        $model->save();
        return redirect('/admin/courses_helpers/' . $idCourse . '/units/' . $idUnit . '/lessons/');
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
        $lesson=LessonsHelper::find($id);
        return view('admin.courses_helpers.lessons.edit')->withIdCourse($idCourse)->withIdUnit($idUnit)->withLesson($lesson);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idCourse, $idUnit, LessonsHelper $lesson)
    {
        $lesson->name = $request->name;
        $lesson->description = $request->description;
        $lesson->content = $request->content;
        $lesson->save();
        return redirect('/admin/courses_helpers/' . $idCourse . '/units/' . $idUnit . '/lessons/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCourse, $idUnit, LessonsHelper $lesson)
    {
        $lesson->delete();
        return redirect('/admin/courses_helpers/' . $idCourse . '/units/' . $idUnit . '/lessons/');
    }
}
