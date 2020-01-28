<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    protected $fillable = [
        'description', 'price', 'area', 'mainImage', 'state', 'lga','address','documentsTitle',
        'bedrooms', 'bathrooms', 'toilets', 'additionalInfo', 'currency', 'duration', 'isDocumentUploaded',
        'user_id', 'showProperty', 'LUIN', 'CUIN', 'isPropertyVerified', 'propertyCategory_id'
    ];


    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }



    public function propertyResponse()
    {
        return $this->belongsTo('App\PropertyResponse', 'propertyResponse_id');
    }


    public function verifiedProperty()
    {
        return $this->hasOne('App\VerifiedProperty');
    }
}
