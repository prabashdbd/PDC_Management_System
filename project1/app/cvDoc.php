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
    protected $table = 'cvdoc';
    protected $fillable = [
    	
        'cv_name',
        'cv_path',
    ];


    
    
    
    public function student()
	{
        return $this->belongsTo('App\student','student_id');
        
    }
    
}
