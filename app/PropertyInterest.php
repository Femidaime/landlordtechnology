<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyInterest extends Model
{
    //

    protected $fillable = [
        'user_id', 'isInterestValid', 'verifiedProperty_id', 'startDate', 'endDate'
    ];

}
