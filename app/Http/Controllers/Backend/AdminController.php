<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;


class AdminController extends Controller
{
    public function viewAdmin(){
       $admin=Admin::all();
       $title="ADMIN";
        return view('backend.layouts.admins.admin',compact('title','admin'));
    }

    public function viewAdminForm(){
       $title="ADMIN CREATE FORM";
        return view('backend.layouts.admins.adminCreate',compact('title'));
    }

    public function createAdmin(Request $request){
//dd($request->all());


        $file_name='';

        if ($request->hasFile('admin_image'))
        {
            $file=$request->file('admin_image');
            if($file->isValid())
            {
                $file_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('admin',$file_name);
            }
        }


        Admin::Create([
            'name'=>$request->adminname,
            'image'=>$file_name,
            'password'=>$request->adminpassword,
            'role'=>$request->adminrole,
            'email'=>$request->adminemail,
            'contact'=>$request->admincontact,
            'status'=>$request->adminstatus

        ]);


        return redirect()->route('admin.view')->with('success','Admin Created Successfully');





    }

    public function deleteAdmin($id){

        $admin=Admin::find($id);

        $admin->delete();

        return redirect()->route('admin.view')->with('success','Admin Deleted Successfully');
    }
}
