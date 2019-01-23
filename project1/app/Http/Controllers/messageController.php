<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Session;
use App\batch_detail;
use App\student;

class messageController extends Controller
{
    //
    public function msg_stu(Request $request)
    {
        $batch = batch_detail::all();
        $stu = student::all();        
        return view('messaging.msg_stu',compact('batch','stu'));
    }
    public function msg_cmp(Request $request)
    {
        return view('messaging.msg_cmp');
    }
    public function msg_out(Request $request)
    {
        return view('messaging.msg_out');
    }
    public function msg_view(Request $request)
    {
        
    }
    function fetch(Request $request){
        
        
        $value = $request->get('value');
        $dependent = $request->get('dependent');

        $group_students = DB::table('students')
        ->join('batch_details','students.batch_id','=','batch_details.batch_id')
        ->select('students.*')
        ->where('students.batch_id','=',$value)
        ->get();

        $output = '';

        // return response($group_students);
        foreach($group_students as $row)
        {
            $output .= '<option value="'.$row->email.'">'.$row->student_lastname.'</option>';
            
        }

        echo $output;
        // <option value="ALL" id="target">Select All</option>
        

    }

    
}
