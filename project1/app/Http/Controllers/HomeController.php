<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\User;
use App\company_detail;
use App\imgfile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(auth()->user()->student_id!=null)
        {
            // return view('layouts.adminlte',array('user'=>Auth::user()));
            return view('layouts.adminlte');
        }
        elseif(auth()->user()->student_id!=null)
        {
            // return view('layouts.adminlte',array('user'=>Auth::user()));
            return view('layouts.adminlte');
        }
        else
        {
            // return view('layouts.adminlte',array('user'=>Auth::user()));
            return view('layouts.adminlte');
        }
        
    }
    //     $id = auth()->user()->id;
    //     $sid = auth()->user()->student_id;
    //     $cid = auth()->user()->company_id;

    //     if($sid!=null && $cid==null )
    //     {
    //         $student = DB::table('students')
    //         ->leftJoin('imgfiles', 'students.student_id', '=', 'imgfiles.student_id')
    //         ->select('students.*','imgfiles.img_path')
    //         ->where('students.student_id','=',$sid)
    //         ->get();
    //         return view('layouts.adminlte',compact('student')); 
    //     }
    //     elseif($cid!=null && $sid==null)
    //     {
    //         $company = company_detail::where('id','=',$cid)->first();
    //         return view('layouts.adminlte',compact('comapny'));
    //     }
    //     else
    //     {
    //         $user = user::where('id','=',$id)->first();
    //         return view('layouts.adminlte',compact('user'));
    //     }
        
    // }
}
