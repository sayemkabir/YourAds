<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function viewCategory(){

$categories=Category::all();
$title="CATEGORY LIST";
        return view('backend.layouts.category.category',compact('title','categories'));
    }

    public function createCategory(Request $request){

    Category::create([

    'name'=>$request->categoryname,
    'description'=>$request->categorydescription

]);

return redirect()->back();
    }
}
