<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Property;
use App\VerifiedProperty;
use Auth;


class PropertiesController extends Controller
{
    //
   public function properties(){
    $getProperty = Property::where('isPropertyVerified', false)->get();
    return view('admin.pages.properties', compact('getProperty'));
   }


   public function __construct()
   {
       $this->middleware('auth');
   }

   //to verify property from properties table to verify properties table
   public function verifyProperty(Request $request){

  try{  
    $user = Auth::user();   
    $verified = new VerifiedProperty;

    $verified->property_id = $request->propertyId;
    $verified->isActive = true;
    $verified->rating = 1;
    $verified->uniqueId = "LTUID-".rand(00000, 99999);
    $verified->verified_by = Auth::user()->id;
    if($verified->save()){
        flash("This property has been marked as verified")->success();
        return back();
     } else {
        flash("Property could not be verified, please check your internet connection")->error();
        return back();
     }
    } catch(\Exception $e){
        flash("Property could not be verified, please check your internet connection")->error();
        return $e;
    }
  }
}
