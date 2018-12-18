<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laravel extends Model
{
    //
    protected $fillable=[
    	'name',
    	'address',
    	'email'
    ];

	public function getNameAttribute($value){

		return ucfirst($value);
	}

	public function setNameAttribute($value){

		$this->attributes['name'] = strtoupper($value);
	}
	


}
