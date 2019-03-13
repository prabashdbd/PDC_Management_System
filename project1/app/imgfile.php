<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class imgfile extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'imgfiles';
    protected $fillable = [
    	
        'img_name',
        'img_path',
    ];
    
    public function student()
	{
        return $this->belongsTo('App\student','student_id');
        
    }
    public function getImage()
    {        
        return "{$this->img_path}";
    }
    
}
