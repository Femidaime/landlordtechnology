<?php

namespace App\Http\Controllers\tenant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class ProfileController extends Controller
{
    //
    public function profile(){
      $user = Auth::user();
      return view('tenant.pages.profile', compact('user'));
    }

     public function submitProfile(Request $request){
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'phoneNumber' => 'required',
        ]);

      try{  

        $user = Auth::user();
        $profile = User::find($user->id);
        $profile->firstname = $request->firstname;
        $profile->lastname = $request->lastname;
        $profile->address = $request->address;
        $profile->phoneNumber = $request->phoneNumber;
        if($profile->save()){
            flash("Profile was updated successfully")->success();
            return back();
        }
    }
    catch(\Exception $e){

        flash("couldn't update profile, please check your internet connection")->error();
        return back();
    }
  }
  
   public function addPhoto(Request $request){
    $request->validate([
        'photo' => 'required',
    ]);

    try{
    $user = Auth::user();
    $profile = User::find($user->id);
    if (request()->file('photo')) {
        $file = request()->file('photo')->store('users');  
    } 
     $profile->photo = $file;
     if($profile->save()){
        flash("Image was uploaded successfully")->success();
        return back();
     }
    } catch(\Exception $e){

        flash("couldn't update profile, please check your internet connection")->error();
        return back();
    }
  }
}