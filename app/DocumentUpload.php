<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentUpload extends Model
{
    //
    protected $fillable = [
        'name', 'title', 'property_id'. 'votes'
    ];
}
