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
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }


    public function validateUserEmail()
    {
        $username = $_POST['email'];
        $count = DB::table('users')->select('username')->where('username', $username)->count();        
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


    

    // public function userLoginTest(Request $request){

    //     $username = $request->email;
    //     $password = $request->password;

    //     // Auth::login(User::Where('username','=',$username)->Where('password','=',$password)->first());
    //     // return view('layouts.adminlte');
    //     //return $username;

    //     if($user = User::Where('username','=',$username)->Where('password','=',$password)->first()){
    //         //return Auth::user()->id;
    //         $userid = $user->student_id;
    //         //return $userid;
    //         return view('layouts.adminlte',compact('userid'));
    //     }
        
    //     return view('auth.login1');

    // }



    protected function authenticate(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $user = User::where('username', $request->email)
            ->where('password', $request->password)
            ->first();

        if($user) {
            // Auth::loginUsingId($user->id);
            // -- OR -- //
            Auth::login($user,true);
            if(auth()->user()->student_id != null){
                // $id = auth()->user()->id;
                // $sid = auth()->user()->student_id;
                // $cid = 'fuck';
                // return view('layouts.adminlte',compact('id','sid','cid'));
                return redirect()->route('adminlte');
            }
            elseif(auth()->user()->company_id != null)
            {
                // $id = auth()->user()->id;
                // $cid = auth()->user()->company_id;
                // $sid = 'suck';
                // return view('layouts.adminlte',compact('id','cid','sid'));
                return redirect()->route('adminlte');
                
            }
            else
            {
                $id = auth()->user()->id;
                // return view('layouts.adminlte',compact('id'));
                return redirect()->route('adminlte');
            }
            
            // return redirect()->route('adminlte');
            return view('layouts.adminlte',compact('id'));
        } 
        else
        {
            return redirect()->route('login_page');
        }
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('login_page');
      }

    
}
