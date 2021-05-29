<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Brackets\Translatable\Traits\HasTranslations;

class Withdrawal extends Model
{
use HasTranslations;
    protected $fillable = [
        'price',
        'status',
        'in_out',
        'enabled',
        'from_id',
        'to_id',
        'way_id',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    // these attributes are translatable
    public $translatable = [
        'status',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/withdrawals/'.$this->getKey());
    }
}
