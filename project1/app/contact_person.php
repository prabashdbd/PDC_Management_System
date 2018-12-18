<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact_person extends Model
{
    //
    protected $table = 'contact_person';
    public $fillable=[


    	'person_name',
    	'email',
    	'tel',
    	'fax'

    ];



    public function company(){


        return $this->belongsTo('App\company_datail');
    }
}
