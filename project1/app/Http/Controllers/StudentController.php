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

        return $request;
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
