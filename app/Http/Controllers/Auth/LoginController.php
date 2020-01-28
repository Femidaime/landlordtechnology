<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/landlord/overview';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function landlordSignup(Request $request){
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
        ]);
    }

    public function redirectTo(){
        
        // User role
         $role = Auth::user()->role_id; 
         
         // Check user role
         switch ($role) {
                 case 2:
                  flash("Login  successful")->success();
                  return '/landlord/overview';
                  break;
                 case 1:
                   flash("Login successful")->success();
                   return '/tenant/overview';
                 break;
             case 3:
                 flash("Login successful")->success();
                 return '/admin/dashboard';
               break;
             default:
                     return '/login'; 
             break;
         }
     }
}
