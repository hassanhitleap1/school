<?php

namespace App\Http\Controllers\Teacher\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\CoverHelper;


class CoursesAlbomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $covers=CoverHelper::all();
        return view('teacher.courses.model_image')->withCovers($covers);
    }

}
