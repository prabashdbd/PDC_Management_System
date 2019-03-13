<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class companyAdverts extends Model
{
    //
    use Notifiable;
    protected $table = 'comp_adverts';
    protected $fillable = [
        'company_id',
        'ad_name',
        'ad_path',
        'ad_info',
        'is_approved',
    ];
    
    public function company_detail(){

        return $this->belongsTo('App\company_detail','company_id');
    }
}
