<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    //
    protected $fillable = [
        'name', 'title', 'property_id', 'propertyCategory_id'
    ];
}
