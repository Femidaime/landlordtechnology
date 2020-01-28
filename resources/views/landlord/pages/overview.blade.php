@extends('landlord-tenant.layouts')
@section('content')
<div class="app-content container center-layout mt-2">
        <div class="content-wrapper">
          <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
              <span class="user-name text-bold-200" style="font-size: 18px;">Welcome to Landlords Technology,</span>
            <span class="user-name text-bold-700" style="font-size: 18px;">{{$user->firstname}} {{$user->lastname}}</span>
            </div>
          </div>
          
          <div class="content-body">
            @include('flash::message')
            <section id="text-alignment">
              <div class="row">
              </div>
              <div class="row">
                <div class="col-lg-9 col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">Property Listing</h4>
                      <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                      <div class="heading-elements">
                        <ul class="list-inline mb-0">
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
                              @if(count($properties) < 1)
                                <tr>
                                  <td>You are yet to post a property</td>
                                </tr>
                              @endif
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
      
                <div class="col-lg-3 col-md-12">
                  <div class="card text">
                    <div class="card-content">
                      <div class="card-body">
                        <h4 class="card-title black">Post a property</h4>
                        <div class="card-content">
                          <img class="card-post-image" alt="" height="px" src="{{url('/landlord-tenants/images/icons/home.png')}}">
                          <div class="card-content-info text-right">
                            <p class="card-text"> - Post your property to be leased. </p>
                            <p class="card-text"> - Upload Images and documents of your property.</p>
                          <a class="btn btn-outline-primary" href="{{url('/landlord/post-property')}}" style="margin: 1rem; padding: 0.6rem 2rem;"> Post a property </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section id="text-alignment">
              <div class="row">
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-12">
                  <div class="card text">
                    <div class="card-content">
                      <div class="card-body">
                        <h4 class="card-title black">Edit Profile </h4>
                        <div class="card-content">
                          @if(Auth::user()->photo)
                          <img class="card-post-image" width="100px" height="100px" alt="" height="px" src="{{url('/storage')}}/{{Auth::user()->photo}}">
                          
                          @else
                          <img class="card-post-image" width="100px" height="100px" alt="" height="px" src="{{url('landlord-tenants/images/empty_user.jpg')}}">
                          @endif
                          <div class="card-content-info text-center">
                            <p class="card-text"> View and edit your <br> profile information to <br> your preference. </p>
                          <a class="btn btn-outline-primary" href="{{url('/landlord/profile')}}" style="margin: 1rem; padding: 0.6rem 2rem;"> Edit Profile </a>
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
                          <img class="card-post-image" alt="" height="24px" src="{{url('/landlord-tenants/images/icons/info.png')}}">
                          <span class="card-post-text" style="padding-left: 40px; font-style: bold">FAQs & Support</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-12">
                  <div class="card text-black text-right">
                    <div class="card-content">
                      <img src="{{url('landlord-tenants/images/icons/LT-overview-1.png')}}" alt="element 04" height="240"
                      class="float-left">
                      <div class="card-body pt-3">
                        <p class="newsletter-header" style="font-size: 20px;"> Newsletter </p>
                        <span> Landlords Technology will make one-year bulk payment to property owners on behalf of the tenants while allowing the tenants to pay back an affordable monthly rental... </span>
                      </div>
                      <button type="submit" class="btn btn-outline-primary" style="margin: 0 20px 0 0; ">
                        <i class=""></i> View All
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </section>
      
          </div>
        </div>
      </div> 
@endsection