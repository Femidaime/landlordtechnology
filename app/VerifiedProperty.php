<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifiedProperty extends Model
{
    //
    protected $fillable = [
        'property_id', 'isActive', 'newPropertyPrice', 'duration', 'otherDuration', 'verifiedBy',
        'ratings',
    ];

    public function property()
    {
        return $this->belongsTo('App\property', 'property_id');
    }


    public function invoice()
    {
        return $this->hasMany('App\Invoice');
    }
}
