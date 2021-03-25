<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvertisersController extends Controller
{
    public function viewadvertisers(){

        return view('backend.layouts.advertisers');
    }
}
