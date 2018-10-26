<?php

namespace App\Http\Controllers\Admin\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::where('type', User::ADMIN)->get();
        return view('admin.admins.index')->withAdmins($admins);
     }

    /**
     * block teatcher form website
     *  @param $id integer 
     */
    public function blocked($id){
        $admin=Admin::find($id);
        $admin->block=User::BLOCK;
        $admin->save();
        return redirect('/admin/admins');
    }

    /**
     * unblock teatcher form website
     * @param $id integer 
     */
    public function unblocked($id){
        $admin=Admin::find($id);
        $admin->block=User::UNBLOCK;
        $admin->save();
        return redirect('/admin/admins');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admins.create');
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
            'name'=>'required',
            'email'=>'email|required',
        ];

        $this->validate($request, $rules);
        $admin = new Admin;
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=Hash::make('123456');
        $admin->block=User::UNBLOCK;
        $admin->save();
        return redirect('/admin/admins');
    }

}
