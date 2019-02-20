<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use View;
use App\User;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function validateUserEmail()
    {
        $username = $_POST['email']; 
        // return $username;
        $count = DB::table('users')->select('username')->where('username', $username)->count();
        // return response()->json($count);
        if($username !=null){
            if($count<=0){
                echo "Email has not been registered";
            }            
        }
        else{
            echo "Email field is required";
        }
    }

    public function validateUserPassword(Request $request)
    {
        $password = $_POST['password'];
        $username = $_POST['email'];
        // $user = User::where('username', '=', $username)->first();        
        // $hash_password = Hash::make($password);
        // $return = $user->password.','.$hash_password;
        
        // $return = $password.','.$hash_password;
        // return response()->json($return);

        // $count = User::Where('password',$password)->where('username',$username)->first();
        $count = User::Where('password',$password)->where('username',$username)->count();        
        if($username !=null){            
            if($password != null){
                if($count<=0){
                    echo "Credentials don't match";
                } 
            }
            else{
                echo "Password field is required";
            }          
        }
        else{
            echo "Email field is required";
        }
        
    }


    // public function userLogin(Request $request)
    // {   
    //     $password = $_POST['password'];
    //     $username = $_POST['email'];
    //     if($username !=null){            
    //         if($password != null){                
    //             $user = User::where('username', '=', $username)->first();
    //             // return response()->json($username);
    //             $count = User::Where('password',$password)->where('username',$username)->count();
    //             if($count<=0){
    //                 echo "Credentials don't match";
    //             }
    //             else{
    //                 $user_id = $user->id;
    //                 $student_id=$user->student_id;
    //                 $company_id=$user->company_id;
    //                 $role_id=$user->role_id;
    //                 if($role_id==3 || $role_id==4){ 
    //                     if($student_id!=null && $company_id==null){
    //                         // echo "This is a student";
    //                         return view('layouts.adminlte',compact('student_id','role_id'));
    //                     }
    //                     else{
    //                         // return view('layouts.adminlte',compact('company_id','role_id'));

    //                     }
                        
    //                 }elseif($role_id==2){
    //                     // return view('layouts.adminlte',compact('id','role_id'));

    //                 }else{
    //                     // return view('layouts.adminlte',compact('id','role_id'));
    //                 }

    //             }
    //         }
    //         else{
    //             echo "Password field is required";
    //         }          
    //     }
    //     else{
    //         echo "Email field is required";
    //     }

    // }

    public function userLoginTest(Request $request){

        $username = $request->email;
        $password = $request->password;

        // Auth::login(User::Where('username','=',$username)->Where('password','=',$password)->first());
        // return view('layouts.adminlte');
        //return $username;

        if($user = User::Where('username','=',$username)->Where('password','=',$password)->first()){
            //return Auth::user()->id;
            $userid = $user->student_id;
            //return $userid;
            return view('layouts.adminlte',compact('userid'));
        }
        
        return view('auth.login1');

    }

    
}
