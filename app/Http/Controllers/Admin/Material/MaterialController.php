<?php

namespace App\Http\Controllers\Admin\Material;

use App\Model\Material;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Level;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Material::all();
        return view('admin.materials.index')->withMaterials($materials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels=Level::all();
        return view('admin.materials.create')->withLevels($levels);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name_en' => 'required',
            'name_ar' => 'required',
            'level_id'=>'required|numeric',
        ];

        $this->validate($request, $rules);
        $modelMaterial = new Material;
        $modelMaterial->name_en = $request->name_en;
        $modelMaterial->name_ar = $request->name_ar;
        $modelMaterial->level_id = $request->level_id;
        $modelMaterial->save();
        return redirect('/admin/materials');
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
    public function edit(Material $material)
    {
        $levels=Level::all();
        return view('admin.materials.edit')->with('material', $material)->withLevels($levels);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
        $material->name_en = $request->name_en;
        $material->name_ar = $request->name_ar;
        $material->level_id = $request->level_id;
        $material->save();
        return redirect('/admin/materials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        $material->delete();
        return redirect('/admin/materials');
    }
}
