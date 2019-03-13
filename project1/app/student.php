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

    protected $primaryKey = 'student_id';

    protected $fillable = [
    	
        'batch_id',
        'role_id',
    	'username',    	
    	'reg_num',
    	'index_num',
        'student_initials',
        'name_initials',
        'student_surname',
        'nic_no',
        'email',
        'student_contact',
    ];

    protected $hidden = [
        'password','remember_token',
    ];	

    public function batch_detail()
	{
        return $this->belongsTo('App\batch_detail','batch_id','batch_id');
        
    }
    public function getName()
    {
        
        return "{$this->student_initials} {$this->student_lastname}";
    }
    public function getIndex()
    {
        
        return "{$this->index_num}";
    }
    

    public function cvDoc()
	{
        return $this->hasOne('App\cvDoc','student_id');
        
    }
    public function imgfile()
	{
        return $this->hasOne('App\imgfile','student_id');
        
    }
    
    public function user()
	{
        return $this->hasOne('App\User');
        
    } 
      


}
