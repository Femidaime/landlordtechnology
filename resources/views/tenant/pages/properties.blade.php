@extends('landlord-tenant.layouts')
@section('content')
<div class="app-content container center-layout mt-2">
        <div class="content-wrapper">
          <div class="content-header row">
          <div class="col-12">
              <span class="text-bold-700" style="font-size: 30px;"> Properties </span>
            </div>
            <!-- <div class="content-header-left col-md-6 col-12 mb-2">
              <span class="user-name text-bold-200" style="font-size: 18px;">Welcome to Landlords Technology,</span>
              <span class="user-name text-bold-700" style="font-size: 18px;">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</span>
            </div> -->
          </div>
          <div class="content-body">
              @include('flash::message')
            <section class="basic-select">
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3">
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
                <div class="col-md-3">
                  <fieldset class="form-group">
                    <select class="form-control" id="basicSelect">
                      <option>Select Use Of Property</option>
                      <option value = "LEASE">Short Lease</option>
                      <option value = "RENT">Rent</option>
                      <option value = "SALE">Sale</option>
                    </select>
                  </fieldset>
                </div>
                <div class="col-md-3">
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
            </section>
      
            <section class="">
              <div class="row match-height">
                @foreach($newProperty as $property)
                <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="card">
                    <div class="card-content">
                      {{-- /storage/{{$property->property->mainImage}} --}}
                      {{-- {{url('landlord-tenants/images/icons/image-01.png')}} --}}
                      <img class="card-img-top img-fluid" src="/storage/{{$property->property->mainImage}} ">
                      <div class="card-body">
                        <p class="card-text">{{$property->property->additionalInfo}}.</p>
                        <div class="row" style="font-size: 0.7rem;">
                          @if($property->property->bathrooms > 0)
                          <div class="col-lg-4">
                            <i class="la la-automobile" style="font-size: 1.2rem; margin-bottom: 20px;"></i>Parking Space
                          </div>
                          @endif
                          @if($property->property->bedrooms > 0)
                          <div class="col-lg-4">
                            <i class="la la-bed"></i>Bed
                          </div>
                          @endif
                          @if($property->property->toilets > 0)
                          <div class="col-lg-4">
                            <img src="{{url('landlord-tenants/images/icons/toilet.png')}}" style="width: 18px;">Toilet
                          </div>
                          @endif
                        </div>
                      <span><h3>{{$property->property->currency}}{{number_format($property->property->price, "2")}}  {{$property->property->area}}</h3></span>
                      <a href="{{url('tenant/view-property')}}/{{$property->id}}" class="btn btn-outline-amber">View Property</a>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                {{-- <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="card">
                    <div class="card-content">
                      <img class="card-img-top img-fluid" src="{{url('landlord-tenants/images/icons/image-02.png')}}">
                      <div class="card-body">
                        <p class="card-text">Office Space commercial property for rent in a serene and business exclusive area.</p>
                        <div class="row" style="font-size: 0.7rem;">
                          <div class="col-lg-4">
                            <i class="la la-automobile" style="font-size: 1.2rem; margin-bottom: 20px;"></i>Parking Space
                          </div>
                          <div class="col-lg-4">
                            <i class="la la-bed"></i>Bed
                          </div>
                          <div class="col-lg-4">
                            <img src="{{url('/images/icons/toilet.png')}}" style="width: 18px;">Toilet
                          </div>
                        </div>
                        <a href="tenant-property-home.html" class="btn btn-outline-amber">View Property</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="card">
                    <div class="card-content">
                      <img class="card-img-top img-fluid" src="{{url('landlord-tenants/images/icons/image-03.png')}}">
                      <div class="card-body">
                        <p class="card-text">Office Space commercial property for rent in a serene and business exclusive area.</p>
                        <div class="row" style="font-size: 0.7rem;">
                          <div class="col-lg-4">
                            <i class="la la-automobile" style="font-size: 1.2rem; margin-bottom: 20px;"></i>Parking Space
                          </div>
                          <div class="col-lg-4">
                            <i class="la la-bed"></i>Bed
                          </div>
                          <div class="col-lg-4">
                            <img src="{{url('landlord-tenants/images/icons/toilet.png')}}" style="width: 18px;">Toilet
                          </div>
                        </div>
                        <a href="tenant-property-home.html" class="btn btn-outline-amber">View Property</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="card">
                    <div class="card-content">
                      <img class="card-img-top img-fluid" src="{{url('landlord-tenants/images/icons/image-04.png')}}">
                      <div class="card-body">
                        <p class="card-text">Office Space commercial property for rent in a serene and business exclusive area.</p>
                        <div class="row" style="font-size: 0.7rem;">
                          <div class="col-lg-4">
                            <i class="la la-automobile" style="font-size: 1.2rem; margin-bottom: 20px;"></i>Parking Space
                          </div>
                          <div class="col-lg-4">
                            <i class="la la-bed"></i>Bed
                          </div>
                          <div class="col-lg-4">
                            <img src="{{url('landlord-tenants/images/icons/toilet.png')}}" style="width: 18px;">Toilet
                          </div>
                        </div>
                          <a href="tenant-property-home.html" class="btn btn-outline-amber">View Property</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="card">
                    <div class="card-content">
                      <img class="card-img-top img-fluid" src="{{url('landlord-tenants/images/icons/image-04.png')}}">
                      <div class="card-body">
                        <p class="card-text">Office Space commercial property for rent in a serene and business exclusive area.</p>
                        <div class="row" style="font-size: 0.7rem;">
                          <div class="col-lg-4">
                            <i class="la la-automobile" style="font-size: 1.2rem; margin-bottom: 20px;"></i>Parking Space
                          </div>
                          <div class="col-lg-4">
                            <i class="la la-bed"></i>Bed
                          </div>
                          <div class="col-lg-4">
                            <img src="{{url('landlord-tenants/images/icons/toilet.png')}}" style="width: 18px;">Toilet
                          </div>
                        </div>
                          <a href="tenant-property-home.html" class="btn btn-outline-amber">View Property</a>
                      </div>
                    </div>
                  </div>
                </div> --}}
              </div>
              {{-- <div class="row match-height">
                <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="card">
                    <div class="card-content">
                      <img class="card-img-top img-fluid" src="{{url('landlord-tenants/images/icons/image-04.png')}}">
                      <div class="card-body">
                        <p class="card-text">Office Space commercial property for rent in a serene and business exclusive area.</p>
                        <div class="row" style="font-size: 0.7rem;">
                          <div class="col-lg-4">
                            <i class="la la-automobile" style="font-size: 1.2rem; margin-bottom: 20px;"></i>Parking Space
                          </div>
                          <div class="col-lg-4">
                            <i class="la la-bed"></i>Bed
                          </div>
                          <div class="col-lg-4">
                            <img src="{{url('landlord-tenants/images/icons/toilet.png')}}" style="width: 18px;">Toilet
                          </div>
                        </div>
                          <a href="tenant-property-home.html" class="btn btn-outline-amber">View Property</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="card">
                    <div class="card-content">
                      <img class="card-img-top img-fluid" src="{{url('landlord-tenants/images/icons/image-05.png')}}">
                      <div class="card-body">
                        <p class="card-text">Office Space commercial property for rent in a serene and business exclusive area.</p>
                        <div class="row" style="font-size: 0.7rem;">
                          <div class="col-lg-4">
                            <i class="la la-automobile" style="font-size: 1.2rem; margin-bottom: 20px;"></i>Parking Space
                          </div>
                          <div class="col-lg-4">
                            <i class="la la-bed"></i>Bed
                          </div>
                          <div class="col-lg-4">
                            <img src="{{url('landlord-tenants/images/icons/toilet.png')}}" style="width: 18px;">Toilet
                          </div>
                        </div>
                        <a href="tenant-property-home.html" class="btn btn-outline-amber">View Property</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="card">
                    <div class="card-content">
                      <img class="card-img-top img-fluid" src="{{url('landlord-tenants/images/icons/image-06.png')}}">
                      <div class="card-body">
                        <p class="card-text">Office Space commercial property for rent in a serene and business exclusive area.</p>
                        <div class="row" style="font-size: 0.7rem;">
                          <div class="col-lg-4">
                            <i class="la la-automobile" style="font-size: 1.2rem; margin-bottom: 20px;"></i>Parking Space
                          </div>
                          <div class="col-lg-4">
                            <i class="la la-bed"></i>Bed
                          </div>
                          <div class="col-lg-4">
                            <img src="{{url('landlord-tenants/images/icons/toilet.png')}}" style="width: 18px;">Toilet
                          </div>
                        </div>
                        <a href="tenant-property-home.html" class="btn btn-outline-amber">View Property</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row match-height">
                <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="card">
                    <div class="card-content">
                      <img class="card-img-top img-fluid" src="{{url('landlord-tenants/images/icons/image-07.png')}}">
                      <div class="card-body">
                        <p class="card-text">Office Space commercial property for rent in a serene and business exclusive area.</p>
                        <div class="row" style="font-size: 0.7rem;">
                          <div class="col-lg-4">
                            <i class="la la-automobile" style="font-size: 1.2rem; margin-bottom: 20px;"></i>Parking Space
                          </div>
                          <div class="col-lg-4">
                            <i class="la la-bed"></i>Bed
                          </div>
                          <div class="col-lg-4">
                            <img src="{{url('landlord-tenants/images/icons/toilet.png')}}" style="width: 18px;">Toilet
                          </div>
                        </div>
                         <a href="tenant-property-home.html" class="btn btn-outline-amber">View Property</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="card">
                    <div class="card-content">
                      <img class="card-img-top img-fluid" src="{{url('landlord-tenants/images/icons/image-08.png')}}">
                      <div class="card-body">
                        <p class="card-text">Office Space commercial property for rent in a serene and business exclusive area.</p>
                        <div class="row" style="font-size: 0.7rem;">
                          <div class="col-lg-4">
                            <i class="la la-automobile" style="font-size: 1.2rem; margin-bottom: 20px;"></i>Parking Space
                          </div>
                          <div class="col-lg-4">
                            <i class="la la-bed"></i>Bed
                          </div>
                          <div class="col-lg-4">
                            <img src="{{url('landlord-tenants/images/icons/toilet.png')}}" style="width: 18px;">Toilet
                          </div>
                        </div>
                         <a href="tenant-property-home.html" class="btn btn-outline-amber">View Property</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="card">
                    <div class="card-content">
                      <img class="card-img-top img-fluid" src="{{url('landlord-tenants/images/icons/image-09.png')}}">
                      <div class="card-body">
                        <p class="card-text">Office Space commercial property for rent in a serene and business exclusive area.</p>
                        <div class="row" style="font-size: 0.7rem;">
                          <div class="col-lg-4">
                            <i class="la la-automobile" style="font-size: 1.2rem; margin-bottom: 20px;"></i>Parking Space
                          </div>
                          <div class="col-lg-4">
                            <i class="la la-bed"></i>Bed
                          </div>
                          <div class="col-lg-4">
                            <img src="{{url('landlord-tenants/images/icons/toilet.png')}}" style="width: 18px;">Toilet
                          </div>
                        </div>
                         <a href="tenant-property-home.html" class="btn btn-outline-amber">View Property</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
            </section>
          </div>
        </div>
       </div> 
@endsection       