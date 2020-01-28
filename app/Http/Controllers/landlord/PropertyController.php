<?php

namespace App\Http\Controllers\landlord;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PropertyCategory;
use App\PropertyImage;
use App\Property;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;


class PropertyController extends Controller
{
    //
    public function post_property(){
       $propertyCats = PropertyCategory::get();

        return view('landlord.pages.post_property', compact('propertyCats'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function postProperty(Request $request){

            $request->validate([
                'propertyImages' => 'required',
                'state' => 'required',
                'area' => 'required',
                'propertyAddress' => 'required',
                'propertyAddress' => 'required',
                'titleOfDocument' => 'required',
                'useOfProperty' => 'required',
                'bedrooms' => 'required',
                'bathrooms' => 'required',
                'toilet' => 'required',
                'additionalInfo' => 'required',
                'propertyCategory_id' => 'required',
                'currency' => 'required',
                'price' => 'required',
                'mainImage' => 'required',
            ]); 

       $user = Auth::user();

    
        try{
        $newProperty =  new Property;
        $newProperty->state = $request->state;
        $newProperty->lga = $request->lga;
        $newProperty->area = $request->area;
        $newProperty->address = $request->propertyAddress;
        $newProperty->documentsTitle = $request->propertyCategory_id;
        $newProperty->propertyCategory_id = $request->propertyCategory_id;
        $newProperty->bedrooms = $request->bedrooms;
        $newProperty->bathrooms = $request->bathrooms;
        $newProperty->toilets = $request->toilet;
        $newProperty->additionalInfo = $request->additionalInfo;
        $newProperty->currency = $request->currency;
        $newProperty->price = $request->price;
        $newProperty->useOfProperty = $request->useOfProperty;
        if($request->useOfProperty != "SALE"){
            $newProperty->startDate = $request->startDate;
            $newProperty->endDate = $request->endDate;
            $newProperty->duration=    Carbon::parse($newProperty->endDate)->diffForHumans($newProperty->startDate);
         }
        $newProperty->user_id = Auth::user()->id;
        $newProperty->mainImage = request()->file('mainImage')->store('mainImages'); 
        $newProperty->propertyResponse_id = \Config::get('constants.options.pending_property');
        $newProperty->save();
        foreach ($request->propertyImages as $photo){
                $file = $photo->store('propertyImages');
                PropertyImage::create([
                    'name'=> $file,
                    'property_id' => $newProperty->id,
                    'propertyCategory_id'=> $newProperty->propertyCategory_id,
                    'category_id' => $request->categoryId,
                ]);
            }
            flash("Property was saved successfully")->success();
            return redirect('/landlord/overview');
    } catch(\Exception $e){
        return $e;
        flash("An error occured adding property")->error();
        return back();

    }
  }

  public function properties(){
      $user = Auth::user();
    $properties = Property::where("user_id", $user->id)->get();

    return view('landlord.pages.properties', compact('properties'));
  }
}
