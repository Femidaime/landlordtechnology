<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Property;
use App\User;


class DashboardController extends Controller
{
    //
    public function dashboard(){
        $verifiedProperties = Property::where("isPropertyVerified", true)->count();
        $unVerifiedProperties = Property::where("isPropertyVerified", false)->count();
        $tenants = User::where("role_id", 1)->count();
        $landlord = User::where("role_id", 2)->count();
        return view('admin.pages.dashboard', compact('verifiedProperties', 'unVerifiedProperties',
        'tenants', 'landlord'
      ));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
