<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;


class company_detail extends Model
{
    //
    use Notifiable;
	protected $table = 'company_details';
	
    public $fillable=[

    	'username',
        'password',
        'comp_name',
    	'comp_website',
    	'comp_est_date',
    	'comp_reg_name',
    	'comp_reg_date',
    	'comp_address',
    	'comp_tel',
    	'comp_fax',
        'num_employees',
        'num_techleads'
    ];


    protected $hidden = [
        'password','remembre_token',
    ];


    public function contact(){

        return $this->hasMany('App/contact_person','person_id','company_id');
    }




}
