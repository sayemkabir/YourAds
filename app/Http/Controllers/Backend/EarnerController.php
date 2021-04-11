<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Earner;

class EarnerController extends Controller
{
    public function viewEarners()
    {

        $earners_create = Earner::all();
        $title = "EARNERS LIST";
        return view('backend.layouts.earners.earners', compact('earners_create', 'title'));
    }

    public function createEarner(Request $request)
    {


        $file_earner = "";

        if ($request->hasFile('earnerImage')) {
            $file = $request->file('earnerImage');
            if ($file->isValid()) {
                $file_earner = date('Ymdms') . "." . $file->getClientOriginalExtension();
                $file->storeAs('earner', $file_earner);
            }
        }


        Earner::create([

            'e_name' => $request->earnername,
            'e_password' => $request->password,
            'e_email' => $request->email,
            'e_status' => $request->status,
            'e_image' => $file_earner


        ]);
        return redirect()->route('earner.name');
    }

    public function viewCreate()
    {
        $title = "EARNERS CREATE";
        return view('backend.layouts.earners.earnerCreate', compact('title'));

    }

    public function earnerDelete($id){

        $earner=Earner::find($id);

        $earner->delete();

        return redirect()->route('earner.name')->with('success','Earner Deleted Successfully');
    }
}




