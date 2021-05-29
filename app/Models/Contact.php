<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Brackets\Translatable\Traits\HasTranslations;

class Contact extends Model
{
use HasTranslations;
    protected $fillable = [
        'icon',
        'title',
        'text',
        'is_published',
        'branch_id',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];
    // these attributes are translatable
    public $translatable = [
        'title',
        'text',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/contacts/'.$this->getKey());
    }
    public function branch() {
        return $this->belongsTo(Branch::class);
    }
}
