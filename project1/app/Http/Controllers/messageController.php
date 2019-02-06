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
use App\messages;
use App\company_detail;
use Mail;
use App\Mail\SendMail;
use App\Mail\SendMailStu;

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
    // outsider
    {
        return view('messaging.msg_out');
    }

    public function msg_send(Request $request)
    {
        // $this->validate($request, [        
        // 'email'  =>  'required|email',
        // 'message' =>  'required',
        // 'title' =>'required'
        // ]); 
        
        $email = $request->email;
        $body = $request->message;
        $title = $request->title;
        Mail::send(new SendMail($email,$body,$title));       
        
        $message = new messages;
        $message->email = $request->email;
        $message->title = $request->title;
        $message->message =strip_tags($request->message);
        $message->save();

        return redirect()->back()->with(['success'=>'Your email has been sent']);
    }

    //-------------------------------------------------------
    public function msg_send_stu(Request $request)
    {
               
        
        $email_list = $request->input('student_list');
        $body = $request->message;
        $title = $request->title;

        Mail::send(new SendMailStu($email_list,$body,$title));

            
        // $message = new messages;
        // $message->email = $request->email;
        // $message->title = $request->title;
        // $message->message =strip_tags($request->message);
        // $message->save();

        return redirect()->back()->with(['success'=>'Your email has been sent']);
    }
    //-------------------------------------------------------s

    public function msg_view()
    {
        $msg = messages::all();
        return view('messaging.msg_view',compact('msg'));
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
            $output .= '<option type="email" name="email" value="'.$row->email.'">'.$row->student_initials.' '.$row->student_lastname.'</option>';
            
        }

        echo $output;
        // <option value="ALL" id="target">Select All</option>
        

    }

    
}
