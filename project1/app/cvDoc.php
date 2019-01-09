<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class cvDoc extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'cvDoc';
    protected $fillable = [
    	
        'cv_name',
        'cv_path',
    ];
    
}
