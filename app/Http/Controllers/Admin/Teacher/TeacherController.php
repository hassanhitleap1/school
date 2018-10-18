<?php

namespace App\Http\Controllers\Admin\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Teacher;
use App\User;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index')->withTeachers($teachers);
     }

    /**
     * block teatcher form website
     *  @param $id integer 
     */
    public function blocked($id){
        $teacher=Teacher::find($id);
        $teacher->block=User::BLOCK;
        $teacher->save();
        return redirect('/admin/teachers');
    }

    /**
     * unblock teatcher form website
     * @param $id integer 
     */
    public function unblocked($id){
        $teacher=Teacher::find($id);
        $teacher->block=User::UNBLOCK;
        $teacher->save();
        return redirect('/admin/teachers');
    }

}
