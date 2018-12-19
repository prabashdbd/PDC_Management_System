<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail; 


class student extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'students';
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

    public function batch_detail()
	{
        return $this->belongsTo('App\batch_detail','batch_id','batch_id');
        
    }
    
    



}
