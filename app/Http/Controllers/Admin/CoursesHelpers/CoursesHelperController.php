<?php
namespace App\Http\Controllers\Admin\CoursesHelpers;

use Illuminate\Http\Request;
use App\Model\CoursesHelper;
use App\Model\Level;
use App\Model\Category;
use App\Http\Controllers\Controller;

class CoursesHelperController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coursesHelpers=CoursesHelper::all();
        return view('admin.courses_helpers.index')->withCoursesHelpers($coursesHelpers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels=Level::all();
        $categories= Category::all();
        return view('admin.courses_helpers.create')->withLevels($levels)->withCategories($categories);
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
            'category_id'=>'required',
            'level_id'=>'required',
        ];

        $this->validate($request, $rules);
        $model=new CoursesHelper;
        $model->category_id=$request->category_id;
        $model->level_id=$request->level_id;
        $model->save();
       return redirect('/admin/courses_helpers');
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
    public function edit(CoursesHelper $coursesHelper)
    {
        $levels=Level::all();
        $categories= Category::all();
        return view('admin.courses_helpers.edit')
        ->withLevels($levels)->withCategories($categories)->with('coursesHelper',$coursesHelper);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CoursesHelper $coursesHelper)
    {
        $coursesHelper->category_id=$request->category_id;
        $coursesHelper->level_id=$request->level_id;
        $coursesHelper->save();
        return redirect('/admin/courses_helpers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CoursesHelper $coursesHelper)
    {
        $coursesHelper->delete();
        return redirect('/admin/courses_helpers');
    }
}
