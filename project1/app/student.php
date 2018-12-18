<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\student as Authenticatable; 

class student extends Authenticatable
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected table = 'students';
    protected $fillable = [
    	
        'batch_id',
        'role_id',
    	'username',    	
    	'reg_num',
    	'index_num',
    	'student_initials',
        'student_surname',
        'nic_no',
    	'email',
    ];

    protected $hidden = [
        'password','remember_token',
    ];	


}
