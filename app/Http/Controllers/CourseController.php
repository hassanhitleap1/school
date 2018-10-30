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
        $qurey = Courses::where([]);
        if(!empty($request->levels)){
            $qurey->whereIn('level_id', $request->levels);
        }
        if (!empty($request->materials)) {
            $qurey->whereIn('material_id', $request->materials);
        }
        $coures = $qurey->paginate(21);
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
