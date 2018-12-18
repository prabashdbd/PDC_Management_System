<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use App\batch_detail;

class StudentController extends Controller
{
    //
    public function index_add(Request $request)
    {
        $batch = batch_detail::all();
        return view('student.student_add',compact('batch'));
    }
    public function index_view(Request $request)
    {
        
        return view('student.student_view');
    }


    public function add_group(Request $request)
    {
        // $batch = new batch_detail;
        batch_detail::create($request->all());


        return $request;
    }

    public function add_by_list(Request $request)
    {

        return $request;
    }


    public function add_single(Request $request)
    {
       return $request;     
        
    }
}
