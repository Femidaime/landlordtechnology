<?php

namespace App\Http\Controllers\tenant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\VerifiedProperty;
use App\PropertyImage;
use App\Invoice;
use App\PropertyInterest;
use Illuminate\Support\Facades\Redirect;
use Paystack;
use Illuminate\Support\Facades\Log;


class PropertiesController extends Controller
{
    //

 public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }


    public function properties(){

        try{
        $newProperty = VerifiedProperty::where('isActive', true)->get();

        return view('tenant.pages.properties', compact('newProperty'));
        } catch(\Exception $e){
            flash("An error occured, please try again later")->error();
            return back();

        }
    }

    public function viewProperty($propertyId){

    try{     
      $verifiedId = $propertyId;

      $verifiedProperty = VerifiedProperty::find($verifiedId);

      //return $verifiedId;
      $propertyImages = PropertyImage::where('property_id', $verifiedProperty->property_id)->get();

      return view('tenant.pages.view-property', compact('verifiedProperty', 'propertyImages'));

     } catch(\Exception $e){

      //  return $e;
        flash("An error occured, please try again later")->error();
        return back();
     }
   }

   public function confirmPayment(){
    $paymentDetails = Paystack::getPaymentData();

   if($paymentDetails['data']['metadata']['payType'] == "interest"){ 
      $interest = $this->handlePaystackCallBack($paymentDetails);
   
      if($interest == "success"){
          flash("Success was done successfully,  property would be unavailable for two days")->success();
      } else if($interest == "error"){
        flash("An error occured placing interest, please contact the admin")->error();
      }

     return redirect('tenant/finance');
     }
    //dd($paymentDetails);
   }

   public function handlePaystackCallBack($val){


    //$userId, $amount, $status, $paymentFor, $refId, $description, $verifiedPropertyId
    $user = Auth::user();
    $paystackDetails = $val;
    $amount = $paystackDetails['data']['amount'] / 100;
    // dd($paystackDetails);

     try{
            // Save invoice
            $newInvoice = new Invoice;
            $newInvoice->user_id = $user->id;
            $newInvoice->amount = $amount;

            $refId = "LT-".rand(000000, 999999);
            if($amount == 2000) $status = "success"; else   $status = "invalid";

            Log::info($status);
            $paymentFor = "INTEREST"; 
            $description = $paystackDetails['data']['gateway_response']; 
            $verifiedProperty_id =  $paystackDetails['data']['metadata']['verifiedPropertyId'];
            $startDate =  $paystackDetails['data']['metadata']['startDate'];
            $transType = \Config::get('constants.options.property_interest');
        // $verifiedProperty_id =  $paystackDetails['data']['metadata']['verifiedPropertyId'];
            //save invoice
          //user_id  $amount, $status, $paymentFor, $refId, $description, $verifiedProperty_id
           $model = Invoice::saveInvoice($user->id, $amount, $status, $paymentFor, $refId, $description, $verifiedProperty_id, $transType);
           $interest =  $this->saveInterest($user->id, $verifiedProperty_id, $startDate, $status);
           return $interest;
        

        //  if($interest == "success"){
        //     flash("Property interests was successful,  this property would be unavailable for two days")->success();

        //   } elseif($interest == "error") {
           
        //     flash("Property interests was unsuccessful,  please contact the admin if you have issues")->error();

        //   }
         
        //   return redirect('tenant/properties');
        
     } catch (\Exception $e){

        return $e;
        flash("An error occured processing interest, please try again")->error();
        return back();
     }
 }


 public function saveInterest($id, $verifyId, $startDate, $status){

  try{

    if($status == "success") $stat = 1; else $stat = 0;
        Log::info("before stat");
        Log::info($stat);
        $newInterest =  new PropertyInterest;
        $newInterest->user_id = $id;
        $newInterest->isInterestValid = $stat;
        $newInterest->startDate = $startDate;  //date customer will check property out
        $newInterest->verifiedProperty_id = $verifyId;
        $newInterest->endDate =  date('Y-m-d', strtotime(' + 2 days')); //2 days after created date when ineterests expires
      //  $newInterest->save();
         if($stat == 1){  

             Log::info("Stat is true");
             $newVerified = VerifiedProperty::find($verifyId); 
             $newVerified->isActive = 0;   
             $newVerified->save();
         }
        if($newInterest->save()){
            Log::info($newInterest->isInterestValid);
            if($newInterest->isInterestValid == 1){
                return "success";
            } else {
                return "error";
            }
        } else {
            
            return "error";
        }

     }
    catch (\Exception $e){
        return "error";
    }
  }
//  public function
}
