<?php
namespace App\Http\Controllers\landlord;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Invoice;
use Auth;


class FinanceController extends Controller
{
    //

    public function finance(){
        $user = Auth::user();
        $getInvoice =  Invoice::where("user_id", $user->id)->orderBy("created_at", "DESC");

        return view("landlord.pages.finance", compact('getInvoice'));
    }
}
