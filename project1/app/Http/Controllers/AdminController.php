<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //


    public function __construct(){



    	$this->middleware('IsAdmin');

    }


    // public function index(Request $request)
    // {
    // 	return view('admin');
    // }	
}
