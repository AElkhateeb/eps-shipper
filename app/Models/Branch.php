<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Brackets\Translatable\Traits\HasTranslations;

class Branch extends Model
{
use HasTranslations;
    protected $fillable = [
        'location',
        'name',
        'governrate',
        'is_published',
        'manger',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];
    // these attributes are translatable
    public $translatable = [
        'name',
        'governrate',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/branches/'.$this->getKey());
    }

    public function contact()
    {
        return $this->hasMany(Contact::class);
    }
}
