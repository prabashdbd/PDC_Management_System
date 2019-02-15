<?php

namespace App\Http\Controllers;


use App\student;
use App\company_detail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function student_table(Request $request)
    {       
        $stu = student::all();        
        return view('reports.students_with_place',compact('stu'));
    }

    public function company_table(Request $request)
    {
        
          $company = company_detail::all();
          return view ('reports.company_report', compact('company'));
    }
}
