<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankDetail extends Model
{

    protected $fillable = [
        'accountName', 'accountNumber', 'bankName', 'accountType'. 'user_id'
    ];
}

