<?php

namespace App\Http\Controllers\Admin\CoursesHelpers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Model\CoverHelper;
use File;
use App\Model\Material;


class CoverHelperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coversHelper=CoverHelper::all();
        return view('admin.courses_helpers.cover_helper.index')->withCoversHelper($coversHelper);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expectId=CoverHelper::pluck('material_id')->all();
        $materials= Material::whereNotIn('id',$expectId)->get();
        return view('admin.courses_helpers.cover_helper.create')->withMaterials($materials);
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
            'material_id'=>'required',
            'cover'=>'required|image',
        ];

        $this->validate($request, $rules);
        $path='images/default_cover';
        $name ='';
        if ($request->hasFile('cover')) {
            if($request->file('cover')->isValid()) {
                try {
                    $file = $request->file('cover');
                    $name = md5(uniqid(rand(), true)).'.'.$file->getClientOriginalExtension();
                    if(! File::isDirectory($path)){
                        Storage::makeDirectory($path);
                    }
                    $file->move( $path,$name);
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {
                    var_dump($e->getMessage()) ;
                }
            } 
        }
        $model=new CoverHelper;
        $model->material_id=$request->material_id;
        $model->cover_path_help=$path.'/'.$name;
        $model->save();
       return redirect('/admin/cover_helpers');
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model=CoverHelper::find($id);
        $model->delete();
        return redirect('/admin/cover_helpers');
    }
}
