<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use View;
use Session;
use App\batch_detail;
use App\student;
use App\company_detail;
use Mail;
use App\Mail\SendMail;

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
        $cmp = company_detail::all();
        return view('messaging.msg_cmp',compact('cmp'));
    }
    public function msg_out(Request $request)
    {
        return view('messaging.msg_out');
    }

    public function msg_send(Request $request)
    {
        // $this->validate($request, [
        // // 'name'     =>  'required',
        // 'email'  =>  'required|email',
        // 'message' =>  'required',
        // 'title' =>'required'
        // ]); 
        
        $email = $request->email;
        $body = $request->message;
        $title = $request->title;
        
        
        
        Mail::send(new SendMail($email,$body,$title));   
        // Mail::to($request->email)->send(new SendMail($data));        
        return redirect()->back()->with(['success'=>'Your email has been sent']);
    }

    public function msg_view(Request $request)
    {
        
    }
    function stu_fetch(Request $request){
        
        
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
            $output .= '<option id="email" name="email" value="'.$row->email.'">'.$row->student_lastname.'</option>';
            
        }

        echo $output;
        // <option value="ALL" id="target">Select All</option>
        

    }

    
}
