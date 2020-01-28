<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\landlord;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Property;

use App\DocumentUpload;
use Auth;



class AgreementController extends Controller
{
    //
    public function agreement(){
        $user = Auth::user();
         $getProperty = Property::where('user_id', $user->id)->orderBy("created_at", "desc")->get();
        return view('landlord.pages.add-agreement', compact('getProperty'));
    }


    public function addAgreement(Request $request){
        Log::info($request->all());

       // return $request->property_id;
      try{  
        foreach ($request->photos as $photo){
            $file = $photo->store('agreements');

            $newDoc = new DocumentUpload;
            $newDoc->name = $file;
            $newDoc->property_id = $request->property_id;
            $newDoc->save();
       }

       flash("Document has been successfully uploaded")->success();
       return back();
 
  } catch(\Exception $e){
      return $e;
      flash("Unable to save documents, Please check your internet connection")->error();
      return redirect("landlord/add-agreement");
    } 
   }


   public function view_agreement(){
     $user = Auth::user();
     $getProperty = Property::where('user_id', $user->id)->orderBy("created_at", "desc")->get();
     $getAgreement = array();
     $propertyId = request()->input("property_id");

     if($propertyId){
        $getAgreement =  DocumentUpload::where("property_id", $propertyId)->orderBy("created_at", "desc")->get();

        return view('landlord.pages.view-agreements', compact('getProperty', 'getAgreement'));
     }
     return view('landlord.pages.view-agreements', compact('getProperty', 'getAgreement'));
   }
 }
