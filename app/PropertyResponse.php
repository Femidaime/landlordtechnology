<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyResponse extends Model
{
    //

    protected $fillable = [
        'title', 'description',
    ];

    public function properties()
    {
        return $this->hasMany('App\Property');
    }

}
