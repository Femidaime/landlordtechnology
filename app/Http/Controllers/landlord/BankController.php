<?php

namespace App\Http\Controllers\landlord;
use App\Http\Controllers\Controller;
use App\BankDetail;
use Auth;
use Illuminate\Http\Request;

class BankController extends Controller
{
    //
    public function addBank(Request $request){
        $request->validate([
            'accountName' => 'required',
            'accountNumber' => 'required',
            'bankName' => 'required',
            'accountType' => 'required',
        ]);
        try{
            $newBank = new BankDetail;
            $newBank->accountName = $request->accountName;
            $newBank->accountNumber = $request->accountNumber;
            $newBank->bankName = $request->bankName;
            $newBank->user_id = Auth::user()->id;
            $newBank->accountType = $request->accountType;
            if( $newBank->save()){
                 flash("Bank was added successfully")->success();
                 return back();
            }
        } catch(\Exception $e){

            flash("Error occured adding bank")->error();
            return back();
        }

    }
}
