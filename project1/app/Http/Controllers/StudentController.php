<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use View;
use App\batch_detail;
use App\student;
use Illuminate\Support\Facades\DB;
use Session;
use Excel;

class StudentController extends Controller
{
    //
    public function index_add(Request $request)
    {
        $batch = batch_detail::all();
        $stu = student::all();        
        return view('student.student_add',compact('batch','stu'));
    }
    public function index_view(Request $request)
    {
        
        $stu = student::all();        
        return view('student.student_view',compact('stu'));
        
    }


    public function add_group(Request $request)
    {
        // $batch = new batch_detail;
        batch_detail::create($request->all());
        return redirect()->back()->with(['success'=>'Student group added successfully']);


        
    }

    public function add_by_list(Request $request)
    {
        
        $upload = $request->file('upload-file');
        $batch = $request->batch_id;
        $filePath = $upload->getRealPath();
        $file = fopen($filePath,'r');
        while(! feof($file)){
            $fields = fgetcsv($file);
            $student = new student;
            $student->reg_num=$fields[0];
            $student->index_num=$fields[1];
            $student->student_initials=$fields[2];
            $student->name_initials=$fields[3];
            $student->student_lastname=$fields[4];
            $student->nic_no=$fields[5];
            $student->email=$fields[6];
            $student->username=$fields[0];
            $student->password=Hash::make($fields[5]);
            $student->batch_id=$batch;
            $student->save();
        }
        return redirect()->back()->with(['success'=>'Student list added successfully']);
        
    }


    public function add_single(Request $request)
    {
        $student = new student;
        $student->student_initials=$request->student_initials;
        $student->student_lastname=$request->student_lastname;
        $student->name_initials=$request->name_initials;
        $student->index_num=$request->index_num;
        $student->reg_num=$request->reg_num;
        $student->nic_no=$request->nic_num;
        $student->email=$request->email;
        $student->batch_id=$request->batch_id;
        $student->username=$request->reg_num;
        $student->password=Hash::make($request['nic_num']);
        $student->save();
        return redirect()->back()->with(['success'=>'Student record added successfully']);

        // return $student;
        // return $request;
        
    }


    // public function add_Single(array $request)
    // {
        

    //     return student::create([
    //         'student_initials' => $request['student_initials'],
    //         'student_lastname' => $request['student_lastname'],
    //         'index_num' => $request['index_num'],
    //         'reg_num' => $request['reg_num'],
    //         'nic_no' => $request['nic_num'],
    //         'email' => $request['email'],
    //         'batch_id' => $request['batch_id'],
    //         'username' => $request['reg_num'],
    //         'password' => Hash::make($request['nic_num']),
    //     ]);
    // }

    public function readStudent(){
        $id = $_GET['id'];
        
        $student = DB::table('students')
        ->select('students.*')
        ->where('student_id','=',$id)
        ->get();       
        
        return response($student);
    }

    public function studentUpdate(Request $request){

        if($request->ajax() && $student = student::find($request->id)){ 
            
            return $request;
            //$student->update();

                    /* for success message*/
            // Session::flash('success', 'Vehicle Service Updated successfully !');
            // return View::make('layouts/success');
        }

    }
}
