<?php

namespace App\Http\Controllers\tenant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Property;

use Auth;

class AgreementController extends Controller
{
    //
    public function agreement(){
        $user = Auth::user();
         $getProperty = Property::where('user_id', $user->id)->orderBy("created_at", "desc")->get();
        return view('tenant.pages.agreement', compact('getProperty'));
    }

    public function submitAgreement(Request $request){
       Log::info($request->all());
    }
}
