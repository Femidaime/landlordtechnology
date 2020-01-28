<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use App\User;

class Invoice extends Model
{
    //
    protected $fillable = [
        'paymentFor', 'description', 'user_id'. 'status', 'verifiedProperty_id', 'amount'
    ];


 public function verifiedProperties()
    {
        return $this->belongsTo('App\VerifiedProperty', 'verifiedProperty_id');
    }

    
public static function saveInvoice($userId, $amount, $status, $paymentFor, $refId, $description, $verifiedPropertyId, $transType)
{

    try {
     Log::info($refId);
     $newInvoice =  new \App\Invoice;
     $newInvoice->user_id = $userId;
     $newInvoice->amount = $amount;
     $newInvoice->status = $status;
     $newInvoice->paymentFor = $paymentFor;
     $newInvoice->refId = $refId;
     $newInvoice->description = $description;
     $newInvoice->verifiedProperty_id = $verifiedPropertyId;
     $newInvoice->transactionType_id = $transType;
     $newInvoice->save();
    } catch(\Exception $e){
        Log::info($e);
    }
//   return \App\Invoice::firstOrCreate(
//     ['user_id' => $userId],
//     ['amount' => $amount],
//     ['status' => $status],
//     ['paymentFor' => $paymentFor],
//     ['refId' => $refId],
//     ['description' => $description],
//     ['verifiedProperty_id' => $verifiedPropertyId]
//   );
  }
}
