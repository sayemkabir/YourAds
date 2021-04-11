<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\Category;

class AdsController extends Controller
{
    public function viewAds(){
        $title="SURF ADS";
        $ads=Ad::with('adCategory')->paginate('3');
        return view('backend.layouts.ads.ads',compact('title','ads'));
    }

    public function createAds(){
        $title="SURF ADS CREATE FORM";
        $categoriesid=Category::all();
        return view('backend.layouts.ads.adsCreate',compact('title','categoriesid'));

    }

    public function adsCreateForm(Request $request){

      Ad::create([

    'ad_name'=>$request->adname,
    'ad_content'=>$request->adcontent,
    'ad_clicks'=>$request->adclicks,
    'ad_duration'=>$request->adduration,
    'category_id'=>$request->categoryid

]);

    return redirect()->route('ads.view')->with('success','Product Created Successfully.');

    }


}
