<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    //protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [        
        'role_id',
        'student_id',
        'company_id',
        'username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    protected function role(){


        return $this->belongsTo('App\Role');


    }
    public function company_detail(){

        return $this->belongsTo('App\company_detail','company_id');
    }
    
    public function student(){

        return $this->belongsTo('App\student','student_id');
    }


    // public function isAdmin(){


    //     if($this->role->name =='admin'){

    //         return true;
    //     }
    //     return false;


    // }
    public function isStudent(){

        if($this->role_id == 4){
            return true;
        }
        return false;
    }
    public function isCompany(){

        if($this->role_id == 3){
            return true;
        }
        return false;
    }
    public function isAdmin(){

        if($this->role_id == 1 || $this->role_id == 2){
            return true;
        }
        return false;
    }

    

}
