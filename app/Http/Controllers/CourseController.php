<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Courses;
use App\Model\Material;
use App\Model\Level;

class CourseController extends Controller
{

    /**
     * index  course
    */
    public function index(Request $request){
        var_dump($request->levels);
        $coures= Courses::paginate(21);
        $materials=Material::all();
        $levels=Level::all();
        return view('courses')->withCoures($coures)
            ->withMaterials($materials)->withLevels($levels);
    }
    /**
     * show ditials course
     */
    public function show($id){
        $course= Courses::find($id);
        return view('course-detail')->with('course',$course);
    }
}
