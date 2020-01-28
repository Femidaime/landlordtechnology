<?php

namespace App\Http\Controllers\tenant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Invoice;

class FinanceController extends Controller
{
    //
    
    public function finance(){
        $user = Auth::user();
        $getInvoice = Invoice::where("user_id", $user->id)->orderBy("created_at", "desc")->get();

        return view('tenant.pages.finance', compact('getInvoice'));
      try{
         
         
        } catch(\Exception $e){

      }
    }
}
