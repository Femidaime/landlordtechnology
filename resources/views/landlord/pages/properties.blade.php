@extends('landlord-tenant.layouts')
@section('content')
<div class="app-content container center-layout mt-2">
        <div class="content-wrapper">
          <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
              <span class="user-name text-bold-200" style="font-size: 18px;">Welcome to Landlords Technology,</span>
            <span class="user-name text-bold-700" style="font-size: 18px;">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</span>
            </div>
          </div>
          
          <div class="content-body">
            @include('flash::message')
            <section id="text-alignment">
                    <div class="row">
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <h4 class="card-title">Property Listing</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                              <ul class="list-inline mb-0">
                              <li><a class="btn btn-outline-primary" href="{{url('landlord/post-property')}}" style="margin: -1rem 0; padding: 1rem;"><i class="ft-plus icon-left"></i> Post a new property </a></li>
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="card-content collapse show">
                            <div class="table-responsive">
                              <table class="table mb-0">
                                <thead>
                                  <tr>
                                    <th>Description</th>
                                    <th>Address</th>
                                    <th>Amount</th>
                                    <th>Duration</th>
                                    <th> Status </th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach($properties as $property)
                                        <tr>
                                        <td>{{$property->additionalInfo}}</td>
                                          <td>{{$property->address}}</td>
                                        <td>₦{{$property->price}}</td>
                                        <td> {{$property->duration}}</td>
                                        <td>{{$property->propertyResponse->description}}</td>
                                        </tr>
                                 @endforeach 
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
            
                      <div class="col-lg-4 col-md-12">
                        <div class="card text">
                          <div class="card-content">
                            <div class="card-body">
                              <h4 class="card-title black">Edit Profile</h4>
                              <div class="card-content">
                            @if(Auth::user()->photo)
                              <img class="card-post-image" alt="" height="100px" src="{{url('/storage')}}/{{Auth::user()->photo}}" style="margin:30px;">
                            @else
                            <img class="card-post-image" alt="" height="100px" src="{{url('/landlord-tenants/images/empty_user.jpg')}}" style="margin:30px;">    
                            @endif
                                <div class="card-content-info text-right" style="padding: 1.9rem 0 0 0;">
                                  <p class="card-text" style="font-weight: 600; font-size: large;"> {{Auth::user()->firstname}} {{Auth::user()->lastname}} </p>
                                  <p class="card-text"> {{Auth::user()->email}} </p>
                                  <p class="card-text"> {{count($properties)}} propertie(s) listed</p>
                                  <a class="btn btn-outline-primary" href="#" style="margin: 1rem; padding: 0.6rem 2rem;"> View All </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>            

           </section>
          </div>
        </div>
      </div> 
@endsection