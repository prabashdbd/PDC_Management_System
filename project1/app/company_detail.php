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
        'company_id',
        'comp_name',
        'comp_website',
        'comp_parent',
    	'comp_est_date',
    	'comp_reg_num',
        'comp_add_no',
        'comp_add_street1',
        'comp_add_street2',
        'comp_add_city',
        'num_employees',
        'num_techleads'
    ];


    protected $hidden = [
        'password','remembre_token',
    ];


    public function contact(){

        return $this->hasMany('App/contact_person','person_id','id');
    }




}
