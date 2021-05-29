<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'fullname',
        'job_id',
        'bday',
        'male',
        'military',
        'email',
        'phone',
        'phone_2',
        'city',
        'area',
        'education',
        'experience',
    
    ];
    
    
    protected $dates = [
        'bday',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/applications/'.$this->getKey());
    }
}
