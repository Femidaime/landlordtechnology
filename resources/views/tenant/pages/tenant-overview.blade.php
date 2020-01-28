@extends('landlord-tenant.layouts')
@section('content')
<div class="app-content container center-layout mt-2">
        <div class="content-wrapper">
          <div class="content-header row">
           <div class="col-12">
              <span class="text-bold-700" style="font-size: 30px;"> Overview </span>
            </div>
            <div class="content-header-left col-md-6 col-12 mb-2">
              <span class="user-name text-bold-200" style="font-size: 18px;">Welcome to Landlords Technology,</span>
              <span class="user-name text-bold-700" style="font-size: 18px;">{{Auth::user()->firstname}} {{Auth::user()->lastname}} </span>
            </div>
          </div>
          <div class="content-body">
                @include('flash::message')
            <section class="basic-select">
              <div class="row match-height Payment-Tab">
                <div class="col-12">
                  <h4 class="text-uppercase">Available Property</h4>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                  <div class="card">
                    <div class="card-block">
                      <div class="card-body">
                        <fieldset class="form-group">
                          <select class="form-control" id="basicSelect">
                            <option>Please Select Location</option>
                            <option>Abuja</option>
                            <option>Cross River</option>
                            <option>Kano</option>
                            <option>Kaduna</option>
                            <option>Kano</option>
                            <option> Lagos</option>
                            <option>Oyo</option>
                            <option>Ogun</option>
                            <option>Port Harcourt</option>
                          </select>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                  <div class="card">
                    <div class="card-block">
                      <div class="card-body">
                        <fieldset class="form-group">
                          <select class="form-control" id="basicSelect">
                            <option>Select Property Type</option>
                            <option>Short Lease</option>
                            <option>Rent</option>
                            <option>Sale</option>
                          </select>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                  <div class="card">
                    <div class="card-block">
                      <div class="card-body">
                        <fieldset class="form-group">
                          <select class="form-control" id="basicSelect">
                            <option>Select Duration</option>
                            <option>Weekly</option>
                            <option>Monthly</option>
                            <option>Yearly</option>
                          </select>
                        </fieldset>
                      </div>
                    </div>
                <a class="btn btn-outline-primary" href="{{url('/tenant/properties')}}" style="margin: -1rem 0 0 7rem; padding: 1rem  0.6rem; width: 200px;"> Search </a>
                  </div>
                </div>
              </div>
            </section>
            <section class="">
              <div class="row">
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-12">
                  <div class="card text">
                    <div class="card-content">
                      <div class="card-body">
                        <h4 class="card-title black">Edit Profile</h4>
                        <div class="card-content">
                         @if(Auth::user()->photo)
                         <img class="card-post-image" width="100px" height="100px" alt="" height="px" src="{{url('/storage')}}/{{Auth::user()->photo}}">
                        
                          @else
                          <img  width="100px" height="100px"  class="card-post-image" alt="" height="px" src="{{url('landlord-tenants/images/empty_user.jpg')}}">
                          @endif
                          <div class="card-content-info text-center">
                            <p class="card-text"> View and edit your <br> profile information to <br> your preference. </p>
                          <a class="btn btn-outline-primary" href="{{url('/tenant/profile')}}" style="margin: 1rem; padding: 0.6rem 2rem;"> Edit Profile </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-12">
                  <div class="card">
                    <div class="card-content">
                      <div class="card-body LT-assist">
                        <h4 class="card-title" style="margin: 10px;">Landlord Technology Assist</h4>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          <img class="card-post-image" alt="" height="24px" src="{{url('landlord-tenants/images/icons/help.png')}}">
                          <span class="card-post-text" style="padding-left: 40px; font-style: bold">Help</span>
                        </li>
                        <li class="list-group-item">
                          <img class="card-post-image" alt="" height="24px" src="{{url('landlord-tenants/images/icons/mini.png')}}">
                          <span class="card-post-text" style="padding-left: 40px; font-style: bold">About Landlord Technology</span>
                        </li>
                        <li class="list-group-item">
                          <img class="card-post-image" alt="" height="24px" src="{{url('landlord-tenants/images/icons/info.png')}}">
                          <span class="card-post-text" style="padding-left: 40px; font-style: bold">FAQs & Support</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-12">
                  <div class="card">
                    <div class="card-content">
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                          <div class="carousel-item active">
                            <img src="{{url('landlord-tenants/images/icons/prop-1.png')}}" class="d-block w-100" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img src="{{url('landlord-tenants/images/icons/prop-2.png')}}" class="d-block w-100"alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img src="{{url('landlord-tenants/images/icons/prop-3.png')}}" class="d-block w-100" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                          <span class="la la-angle-left" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                          <span class="la la-angle-right icon-next" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                      <div class="card-body">
                        <p class="card-text"> Featured Apartments & Office Space for Short Lease and for Rent</p>
                        <div class="row" style="font-size: 0.7rem;">
                        <div class="col-md-3">
                          <i class="la la-automobile"></i>Parking Space
                        </div>
                        <div class="col-md-3">
                          <i class="la la-bed"></i>Bed
                        </div>
                        <div class="col-md-3">
                           <img src="{{url('landlord-tenants/images/icons/toilet.png')}}" style="width: 14px;"> Toilet
                           
                        </div>
                        <div class="col-md-3">
                          <i class="la la-ellipsis-h"></i>Others
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