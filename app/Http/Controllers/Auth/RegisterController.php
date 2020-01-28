<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;
class RegisterController extends Controller

{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'lastname' => ['required', 'string', 'max:255'],
            'phoneNumber' => ['required', 'numeric'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

  
        return User::create([
            'firstname' => $data['firstname'],
            'email' => $data['email'],
            'lastname'=>$data['lastname'],
            'phoneNumber'=>$data['phoneNumber'],
            'role_id'=> $data['role_id'],
            'password' => Hash::make($data['password']),
        ]);


        if(Auth::attempt(['email' => $request->email, 'password' => $request->password ])){
            flash("Registration was successful")->success();
        }

        if($data['role_id'] == "1")
          return redirect('tenant/overview');
        else if($data['role_id'] == "2")
          return redirect('landlord/overview');

    }

    protected function registerTenant(Request $request)
    {

        $validatedData = $request->validate([
            'email' => 'required|unique:users|max:255',
            'firstname' => 'required',
            'lastname'=> 'required',
            'phoneNumber' => 'required',
            'password' => 'required|confirmed'
        ]);
        
        User::create([
            'firstname' => $request->firstname,
            'email' => $request->email,
            'lastname'=>$request->lastname,
            'phoneNumber'=>$request->phoneNumber,
            'password' => Hash::make($request->password),
            'role_id'=> 1,
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password ])){
            flash("Registration was successful")->success();
        }
        return redirect('tenant/overview');
    }



    public function tenant_signup(){
       
        return view('auth.tenant-register');
    }

  public function redirectTo(){
        
       // User role
        $role = Auth::user()->role_id; 
        
        // Check user role
        switch ($role) {
                case 2:
                    flash('success_message',"Login  successful")->success();
                return '/landlord/overview';
                break;
            case 1:
                  flash('success_message',"Login successful")->success();
                  return '/tenant/overview';
                break;
            default:
                    return '/login'; 
            break;
        }
    }
}
