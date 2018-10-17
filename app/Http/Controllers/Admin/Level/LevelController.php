<?php

namespace App\Http\Controllers\Admin\Level;

use App\Model\Level;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels=Level::all();
        return view('admin.levels.index')->withLevels($levels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.levels.create');
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
            'name_en'=>'required',
            'name_ar'=>'required',
            'order'=>'required|integer',
        ];

        if($object=$this->validate($request, $rules)){
            var_dump($object);
        }else{
            var_dump($object);
        }
        $modelLevel=new Level;
        $modelLevel->name_en=$request->name_en;
        $modelLevel->name_ar=$request->name_ar;
        $modelLevel->order=$request->order;
        $modelLevel->save();
       return redirect('/admin/levels');
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
    public function edit(Level $level)
    {
        return view('admin.levels.edit')->with('level',$level);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Level $level)
    {
        $rules=[
            'order'=>'integer',
        ];
        $this->validate($request, $rules);
        $level->name_en=$request->name_en;
        $level->name_ar=$request->name_ar;
        $level->order=$request->order;
        $level->save();
        return redirect('/admin/levels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Level $level)
    {
        $level->delete();
        return redirect('/admin/levels');
    }
}
