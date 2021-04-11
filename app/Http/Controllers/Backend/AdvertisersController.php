<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertiser;

class AdvertisersController extends Controller
{
    public function viewAdvertisers(){
        $title="ADVERTISERS LIST";
        $advertisers=Advertiser::all();
        return view('backend.layouts.advertisers.advertisers',compact('title','advertisers'));
    }

    public function advertisersForm(){
        $title="ADVERTISER CREATE FORM";
        return view('backend.layouts.advertisers.advertisersCreate',compact('title'));

    }

    public function advertiserCreate(Request $request){

        Advertiser::create([

            'a_name'=>$request->advertisername,
            'a_password'=>$request->advertiserpassword,
            'a_email'=>$request->advertiseremail

        ]);

        return redirect()->route('advertisers.view');

    }
}
