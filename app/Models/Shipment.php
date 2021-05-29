<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [
        'weight',
        'pkg_num',
        'status',
        'published_at',
        'end_at',
        'prod_kind',
        'prod_price',
        'way_id',
        'from_user_id',
        'to_user_id',
        'pay_way',
    
    ];
    
    
    protected $dates = [
        'published_at',
        'end_at',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/shipments/'.$this->getKey());
    }
}
