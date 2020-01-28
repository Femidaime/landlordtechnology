<?php

namespace App\Http\Controllers\tenant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function dashboard(){
        //return 'hello';
        return view('tenant.pages.tenant-overview');
    }
}
