
@extends('landlord-tenant.layouts')
@section('content')

@section('customStyles')
<style>
 .otherImage { 
    height: 100px; 
    width: 200px; 
    overflow: hidden; 
 }
</style>
@endsection
<div class="app-content container center-layout mt-2">
        <div class="content-wrapper">
          <div class="content-header row">
          <div class="col-12">
              <span class="text-bold-700" style="font-size: 30px;"> View Property </span>
            </div>
           <!--  <div class="content-header-left col-md-6 col-12 mb-2">
              <span class="user-name text-bold-200" style="font-size: 18px;">Welcome to Landlords Technology,</span>
              <span class="user-name text-bold-700" style="font-size: 18px;">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</span>
            </div> -->
          </div>
          <div class="content-body">
      
            <section class="">
              <div class="row">
                <div class="col-xl-4 col-sm-12">
                  <div class="card">
                    <div class="card-content">
                    <img class="card-img-top img-fluid" src="/storage/{{$verifiedProperty->property->mainImage}}">
                      <div class="card-body">
                        <p class="card-text">{{$verifiedProperty->property->additionalInfo}}.</p>
                        <div class="row" style="font-size: 0.7rem;">
                         @if($verifiedProperty->property->bathrooms > 0 )
                          <div class="col-lg-4">
                            <i class="la la-automobile" style="font-size: 1.2rem; margin-bottom: 20px;"></i>Parking Space
                          </div>
                          @endif

                          @if($verifiedProperty->property->bedrooms > 0 )
                          <div class="col-lg-4">
                            <i class="la la-bed"></i>Bed
                          </div>
                          @endif

                        @if($verifiedProperty->property->toilets > 0 )
                          <div class="col-lg-4">
                            <img src="{{url('landlord-tenants/images/icons/toilet.png')}}" style="width: 18px;">Toilet
                          </div>
                        @endif  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-8 col-sm-12">
                  <div class="card">
                    <div class="card-content">
                      <div class="card-body">
                        <ul class="nav nav-tabs nav-top-border no-hover-bg nav-justified">
                          <li class="nav-item">
                            <a class="nav-link active" id="active-tab1" data-toggle="tab" href="#active1" aria-controls="active1"
                            aria-expanded="true">Property Overview</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="link-tab1" data-toggle="tab" href="#link1" aria-controls="link1"
                            aria-expanded="false">Appointment Viewing</a>
                          </li>
                        </ul>
                        <div class="tab-content px-1 pt-1">
                          <div role="tabpanel" class="tab-pane active" id="active1" aria-labelledby="active-tab1"
                          aria-expanded="true">
                          <div class="card">
                            <div class="card-header">
                              <h4 class="card-title" id="heading-pagination">Overview</h4>
                              <div class="heading-elements heading-top-elements">
                              </div>
                            </div>
                            <div class="card-body">
                              <h4 class="card-title">Property Information</h4>
                              <p class="card-text">Office Space commercial property for rent in a serene and business exclusive area.</p>
                              <p class="card-text">Location:  {{$verifiedProperty->property->address}}</p>
                              <h4 class="card-title"> Lease Duration: {{str_replace("after", " ", $verifiedProperty->property->duration)}} </h4>
                              <h4 class="card-title">Tenancy Amount: {{$verifiedProperty->property->currency}}{{number_format($verifiedProperty->property->price, "2")}} </h4>
                              <h4 class="card-title">Area: {{$verifiedProperty->property->area}}  </h4>
                              <h4 class="card-title">State: {{$verifiedProperty->property->state}}  </h4>
                              <h4 class="card-title">Use Type: {{$verifiedProperty->property->useOfProperty}}  </h4>
                              {{-- <p class="card-text"> - Full Parking space </p> --}}
                              <p class="card-text"> - {{$verifiedProperty->property->bathrooms}} bathrooms</p>
                              <p class="card-text"> - {{$verifiedProperty->property->bedrooms}} bedrooms</p>
                              <p class="card-text"> - {{$verifiedProperty->property->toilets}} bathrooms</p>
                              {{-- <p class="card-text"> - 11230 sqm </p> --}}
                              <h4 class="card-title">Other Media on property </h4>
                              <div class="card-body">
                                <div class="row">

                                  {{-- <div class="col-md-3">
                                    <img class="card-img img-fluid mb-1" src="{{url('landlord-tenants/images/icons/img01.png')}}"
                                    alt="Card image cap">
                                  </div> --}}

                                  
                                @foreach($propertyImages as $property)  
                                  <div class="col-md-3">
                                   <div class= "otherImage">   
                                    <img class="card-img img-fluid mb-1" src="/storage/{{$property->name}}"
                                     alt="Card image cap">
                                   </div> 
                                  </div>
                                  {{-- <div class="col-md-3">
                                    <img class="card-img img-fluid mb-1" src="./app-assets/images/icons/img03.png"
                                    alt="Card image cap">
                                  </div>
                                  <div class="col-md-3">
                                    <img class="card-img img-fluid mb-1" src="./app-assets/images/icons/img04.png"
                                    alt="Card image cap">
                                  </div> --}}
                                @endforeach  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="link1" role="tabpanel" aria-labelledby="link-tab1" aria-expanded="false">
                          <div class="card">
                            <div class="card-header">
                              <h4 class="card-title" id="basic-layout-form-center">Viewing</h4>
                              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content collapse show">
                              <div class="card-body">
                              <form class="form" method="post" action="{{url('/tenant/showInterest')}}">
                                  <p class="card-text">{{$verifiedProperty->property->additionalInfo}}</p>
                              <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                              <input type="hidden" name="first_name" value="{{Auth::user()->firstname}}"> 
                              <input type="hidden" name="first_name" value="{{Auth::user()->last_name}}"> 
                                  <input type="hidden" name="orderID" value="345">
                                  <input type="hidden" name="amount" value="200000"> {{-- required in kobo --}}
                                  <input type="hidden" name="quantity" value="3">
                                  <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                  <input type="hidden" id="metadata" name="metadata" value="{{ json_encode($array = ['verifiedPropertyId' => $verifiedProperty->id, 'payType' => 'interest']) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                  <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                                  {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
                      
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                                  <div class="appointment-head">
                                    <p class="card-text">Choose your preferred viewing period</p>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="card-block">
                                          <div class="card-body">
                                            <fieldset class="form-group">
                                              <label class="card-title" for="time">Date</label>
                                              <input type="date" onchange="appendDate()" class="form-control" id="date" placeholder="select date">
                                            </fieldset>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="card-block">
                                          <div class="card-body">
                                            <fieldset class="form-group">
                                              <label class="card-title" for="time">Time</label>
                                              <input type="time" onchange="appendDate()" class="form-control" id="time" palceholder="select time">
                                            </fieldset>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-actions center">
                                    <button type="submit"  class="btn btn-outline-primary" style="margin: 1rem; padding: 0.6rem 2rem;"> Interested in property </button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
       </div>
      </div>
  @endsection    

  @section('scripts')
   <script>

       console.log($("#metadata").val())
     function appendDate(){
         var date = $("#date").val();
         var timeV = $("#time").val();
        // alert(date)
     var val =  JSON.parse($("#metadata").val());
   

     if(date && timeV){
     var time = onTimeChange(timeV);
     $("#metadata").val(" ");
     var append =    $('#metadata').val('{"startDate":"' + date +  '", "payType": "'+ val.payType   +'", "verifiedPropertyId":"' + val.verifiedPropertyId +  '", "time":"' + `${time}` + '"}');

     console.log($("#metadata").val())
     }

     //console.log( $("#metadata").val());
   //  $("#metadata").val()
     }

//var inputEle = document.getElementById('time');    
 function onTimeChange(inputEle) {
  var timeSplit = inputEle.split(':'),
    hours,
    minutes,
    meridian;
  hours = timeSplit[0];
  minutes = timeSplit[1];
  if (hours > 12) {
    meridian = 'PM';
    hours -= 12;
  } else if (hours < 12) {
    meridian = 'AM';
    if (hours == 0) {
      hours = 12;
    }
  } else {
    meridian = 'PM';
  }
  return hours + ':' + minutes + ' ' + meridian;
}
   </script>
  @endsection