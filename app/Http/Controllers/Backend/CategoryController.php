<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function viewcategory(){

$categories=Category::all();
//dd($categories);
        return view('backend.layouts.category',compact('categories'));
    }

    public function createcategory(Request $request){

    Category::create([

    'name'=>$request->categoryname,
    'description'=>$request->categorydescription

]);

return redirect()->back();
    }
}
