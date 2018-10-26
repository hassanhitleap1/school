<?php

namespace App\Http\Controllers\Admin\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Student;
use App\User;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::where('type',User::STUDENT)->get();
        return view('admin.students.index')->withStudents($students);
     }

    /**
     * block teatcher form website
     *  @param $id integer 
     */
    public function blocked($id){
        $student=Student::find($id);
        $student->block=User::BLOCK;
        $student->save();
        return redirect('/admin/students');
    }

    /**
     * unblock teatcher form website
     * @param $id integer 
     */
    public function unblocked($id){
        $student=Student::find($id);
        $student->block=User::UNBLOCK;
        $student->save();
        return redirect('/admin/students');
    }
}
