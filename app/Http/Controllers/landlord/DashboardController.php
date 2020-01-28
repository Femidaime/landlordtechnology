<?php

namespace App\Http\Controllers\landlord;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Property;
use Carbon\Carbon;

class DashboardController extends Controller
{
    //
    public function dashboard(){

        //echo Carbon::parse('2022-08-03')->diffForHumans('2019-08-13');
         $user = Auth::user();
         $properties = Property::where('user_id', $user->id)->get();
        return view('landlord.pages.overview', compact('user', 'properties'));
    }

     public function __construct()
    {
        $this->middleware('auth');
    }
}
