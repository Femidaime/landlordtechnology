@extends('landlord-tenant.layouts')
@section('content')
<div class="app-content container center-layout mt-2">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="col-12">
        <span class="text-bold-700" style="font-size: 30px;"> Card </span>
      </div>
           <!--  <div class="content-header-left col-md-6 col-12 mb-2">
              <span class="user-name text-bold-200" style="font-size: 18px;">Welcome to Landlords Technology,</span>
            <span class="user-name text-bold-700" style="font-size: 18px;">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</span>
          </div> -->
        </div>

        <div class="content-body">
          @include('flash::message')
          <section id="user-profile-cards-with-cover-image" class="row mt-2">
           <div class="col-xl-4 col-lg-12">
            <div class="alert alert-primary alert-dismissible mb-2" role="alert" style="background-image: url({{url('landlord-tenants/images/icons/card.png')}}); height: 200px; background-position: center; background-repeat: no-repeat; position: relative;">
               <p class="mb-0 text-center" style="line-height: 5; letter-spacing: 3px; color: #ffffff; font-size: 17px;"> ****  ****  ****  1234 </p>
               <p style="margin-top: -20px; color: #ffffff; font-size: 8px;">Card Number</p> 
           </br>

            <div class="mb-1">
             <div class="row">
              <div class="col-sm-6 col-12" style="color: #ffffff;">
                <span class="block" style="font-size: 18px;">Jude Ogbeni</span>
                <span class="block">
                  <p style="color: #ffffff; font-size: 8px; margin-top: 5px;">Card Number</p> 
                </span>
              </div>

              <div class="col-sm-6 col-12" style="color: #ffffff;">
               <span class="block" style="font-size: 18px;">08/22</span>
                <span class="block">
                  <p style="color: #ffffff; font-size: 8px; margin-top: 5px;">Card Number</p> 
                </span>
              </div>
            </div>
          </div>
        </div>
         <a class="btn btn-outline-primary" href="" style="padding: 0.6rem  0.6rem; width: 150px;"> Remove Card </a>
      </div>

      <div class="col-xl-4 col-lg-12">
            <div class="alert alert-primary alert-dismissible mb-2" role="alert" style="background-image: url({{url('landlord-tenants/images/icons/card.png')}}); height: 200px; background-position: center; background-repeat: no-repeat; position: relative;">
               <p class="mb-0 text-center" style="line-height: 5; letter-spacing: 3px; color: #ffffff; font-size: 17px;"> ****  ****  ****  1234 </p>
               <p style="margin-top: -20px; color: #ffffff; font-size: 8px;">Card Number</p> 
           </br>

            <div class="mb-1">
             <div class="row">
              <div class="col-sm-6 col-12" style="color: #ffffff;">
                <span class="block" style="font-size: 18px;">Jude Ogbeni</span>
                <span class="block">
                  <p style="color: #ffffff; font-size: 8px; margin-top: 5px;">Card Number</p> 
                </span>
              </div>

              <div class="col-sm-6 col-12" style="color: #ffffff;">
                <span class="block" style="font-size: 18px;">08/22</span>
                <span class="block">
                  <p style="color: #ffffff; font-size: 8px; margin-top: 5px;">Card Number</p> 
                </span>
              </div>
            </div>
          </div>
        </div>
        <a class="btn btn-outline-primary" href="" style="padding: 0.6rem  0.6rem; width: 150px;"> Remove Card </a>
      </div>

       <div class="col-xl-4 col-lg-12">
        <a class="btn btn-outline-primary" href="" style="margin: 5rem; padding: 0.6rem  0.6rem; width: 180px;"> Add New Card </a>
      </div>







  </section>
</div>
</div>
</div> 
@endsection