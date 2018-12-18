<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class batch_detail extends Model
{
    //

	protected $table = 'batch_details';
    protected $fillable = [
    	'batch_name',
    	'intern_period_start',
    	'intern_period_end',

    ];
}
