<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProfileController extends Controller
{
    function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.profile');
    }

    /**
     * update data profile 
     */
    public function update(Request $request,$id){
        $rules=[
            'name'=>'string|required',
            'phone'=>'numeric',
            'image'=>'image',
        ];
        $this->validate($request,$rules);
        $model = new User;

        if ($request->hasFile('image')) {
            if($request->file('image')->isValid()) {
                try {
                    $file = $request->file('image');
                    $name = md5(uniqid(rand(), true)).'.'.$file->getClientOriginalExtension();
                    $path='images/profile';
                    if(! File::isDirectory($path)){
                        Storage::makeDirectory($path);
                    }
                    $model->image_path=$path.'/'.$name;
                    $file->move( $path,$name);
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {
                    var_dump($e->getMessage()) ;
                }
            } 
        }
        $model->name=$request->name;
        $model->phone=$request->phone;
        $model->save();
        return redirect('/profile');

    }

}
