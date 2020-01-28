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
            <section id="user-profile-cards-with-cover-image" class="row mt-2">
                    <div class="col-xl-4 col-md-6 col-12">
                      <div class="card profile-card-with-cover">
                        <!--<img class="card-img-top img-fluid" src="../../../app-assets/images/carousel/18.jpg" alt="Card cover image">-->
                        <div class="card-img-top img-fluid bg-cover height-200" style="background: url({{url('landlord-tenants/images/icons/LT-overview-2.png')}});"></div>
                        <div class="card-profile-image">
                          @if(Auth::user()->photo)  
                        <img width="150px" height="150px" src="{{url('/storage')}}/{{$user->photo}}" class="rounded-circle img-border box-shadow-1"
                          alt="Card image">
                           @else
                           <img  width="150px" height="150px" src="{{url('/landlord-tenants/images/empty_user.jpg')}}" class="rounded-circle img-border box-shadow-1"
                           alt="Card image">
                           @endif
                        </div>
                        <div class="profile-card-with-cover-content text-center">
                          <div class="card-body">
                          <h4 class="card-title" style="margin-top: 2rem;">{{$user->lastname}} {{$user->firstname}}</h4>
                            <ul class="list-inline list-inline-pipe">
                            <li>{{$user->email}}</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 col-12">
                      <div class="card">
                        <div class="card-content">
                          <div class="card-body">
                            <div class="nav-vertical">
                              <ul class="nav nav-tabs nav-left flex-column" style="font-size: 1rem;">
                                <li class="nav-item">
                                  <a class="nav-link active" id="baseVerticalLeft-tab1" data-toggle="tab" aria-controls="tabVerticalLeft1"
                                  href="#tabVerticalLeft1" aria-expanded="true">Personal</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="baseVerticalLeft-tab2" data-toggle="tab" aria-controls="tabVerticalLeft2"
                                  href="#tabVerticalLeft2" aria-expanded="false">Profile </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="baseVerticalLeft-tab3" data-toggle="tab" aria-controls="tabVerticalLeft3"
                                  href="#tabVerticalLeft3" aria-expanded="false">Financial </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="baseVerticalLeft-tab4" data-toggle="tab" aria-controls="tabVerticalLeft4"
                                  href="#tabVerticalLeft4" aria-expanded="false">Password</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="baseVerticalLeft-tab5" data-toggle="tab" aria-controls="tabVerticalLeft5"
                                  href="#tabVerticalLeft5" aria-expanded="false">Log Out</a>
                                </li>
                              </ul>
            
            
            
                              <div class="tab-content" style="font-size: 1rem;">
                                <div role="tabpanel" class="tab-pane active" id="tabVerticalLeft1" aria-expanded="true"
                                aria-labelledby="baseVerticalLeft-tab1">
                                <div class="card">
                                  <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Personal information</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                  </div>
                                  <div class="card-content collapse show">
                                    <div class="card-body">
                                    <form class="form" method="post" action="{{url('/landlord/submitProfile')}}">
                                        <div class="form-body">
                                          <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="projectinput1">First Name</label>
                                              <input type="text" name="firstname" value="{{$user->firstname}}" id="projectinput1" class="form-control" placeholder="First Name"
                                                name="fname">
                                              </div>
                                              @csrf
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="projectinput2">Last Name</label>
                                                <input type="text" value="{{$user->lastname}}" name="lastname" id="projectinput2" class="form-control" placeholder="Last Name"
                                                name="lname">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="projectinput3">E-mail</label>
                                                <input disabled type="text" value="{{$user->email}}" id="projectinput3" class="form-control" placeholder="E-mail" name="email">
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="projectinput4">Contact Number</label>
                                                <input type="text" value="{{$user->phoneNumber}}" id="projectinput4" class="form-control" placeholder="Phone" name="phoneNumber">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label for="companyName">Home Address</label>
                                            <input type="Address" value="{{$user->address}}" name="address" id="Home Address" class="form-control" placeholder="Home Address"
                                            name="Home Address">
                                          </div>
                                        </div>
                                        <div class="form-actions">
                                          <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Cancel
                                          </button>
                                          <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Save
                                          </button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
            
            
                              <div class="tab-pane" id="tabVerticalLeft2" aria-labelledby="baseVerticalLeft-tab2">
                                <div class="card">
                                  <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Profile Information</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                  </div>
                                  <div class="card-content collapse show">
                                    <div class="card-body">
                                    <form class="form" action="{{url('landlord/addPhoto')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                          <h4 class="form-section"><i class="la la-photo"></i> Upload Profile Picture</h4>
                                          <div class="form-group">
                                            <label>Select File</label>
                                            <label id="projectinput7" class="file center-block">
                                              <input type="file" id="file" name="photo" required>
                                              <span class="file-custom"></span>
                                            </label>
                                          </div>
            
                                        </div>
                                        <div class="form-actions">
                                          <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Cancel
                                          </button>
                                          <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Save
                                          </button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
            
            
                              <div class="tab-pane" id="tabVerticalLeft3" aria-labelledby="baseVerticalLeft-tab3">
                                <div class="card">
                                  <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Financial Information</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                  </div>
                                  <div class="card-content collapse show">
                                    <div class="card-body">
                                    <form class="form" method="post" action="{{url('landlord/addBank')}}">
                                        <div class="form-body">@csrf
                                          <h4 class="form-section"><i class="la la-money"></i>Account Information</h4>
                                          <div class="form-group">
                                            <label for="eventInput1">Bank Information</label>
                                            <select name="bankName" class="selectpicker form-control">
                                              <option>Select Your Bank</option>
                                              <option value="AccessBank">Access Bank</option>
                                              <option value="DiamondBank">Access Bank (Diamond)</option>
                                              <option value="Ecobank">Ecobank </option>
                                              <option value="FidelityBank">Fidelity Bank</option>
                                              <option value="FirstBank">First Bank</option>
                                              <option value="FCMB">First City Monument Bank</option>
                                              <option value="GTB">Guaranty Trust Bank</option>
                                              <option value="Heritagebank">Heritage Bank</option>
                                              <option value="keystonebank">Keystone Bank </option>
                                              <option value="skyebank">Polaris Bank</option>
                                              <option value="StanbicIBTC">Stanbic IBTC</option>
                                              <option value="standardchartered">Standard Chartered Bank</option>
                                              <option value="sterlingbank">Sterling Bank</option>
                                              <option value="unionbank">Union Bank</option>
                                              <option value="UBA">UBA</option>
                                              <option value="Unity">Unity Bank</option>
                                              <option value="wemabank">Wema Bank</option>
                                              <option value="zenithbank">Zenith Bank</option>
                                            </select>
                                          </div>
                                          <div class="form-group">
                                            <label for="companyName">Account Name</label>
                                            <input type="text" name="accountName" id="Bank-Account-Name" class="form-control" placeholder="Bank Account Name"
                                            name="Account Name">
                                          </div>
                                          <div class="form-group">
                                            <label for="companyName">Account Number</label>
                                            <input type="text" name="accountNumber" id="back-account-number" class="form-control" placeholder="Bank Account Number"
                                            name="Back-Account-Number">
                                          </div>
                                          <label for="eventInput1">Account Type</label>
                                          <select name="accountType" class="selectpicker form-control">
                                            <option>Select Your account type</option>
                                            <option value="Current">Current</option>
                                            <option value="Savings">Savings</option>
                                          </select>
                                        </div>
                                        <div class="form-actions">
                                          <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Cancel
                                          </button>
                                          <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Save
                                          </button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
            
            
                              <div class="tab-pane" id="tabVerticalLeft4" aria-labelledby="baseVerticalLeft-tab4">
                                <div class="card">
                                  <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Password & Security</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                  </div>
                                  <div class="card-content collapse show">
                                    <div class="card-body">
                                      <form class="form">
                                        <div class="form-body">
                                          <h4 class="form-section"><i class="la la-lock"></i>Password</h4>
                                          <div class="form-group">
                                            <label for="companyName">Old Password</label>
                                            <input type="text" id="Old Password" class="form-control" placeholder="Old Password"
                                            name="password">
                                          </div>
                                          <div class="form-group">
                                            <label for="companyName">New Password</label>
                                            <input type="text" id="Password" class="form-control" placeholder="New Password"
                                            name="password">
                                          </div>
                                          <div class="form-group">
                                            <label for="companyName">Confirm New Password</label>
                                            <input type="text" id="password" class="form-control" placeholder="Confirm Password"
                                            name="password">
                                          </div>
            
                                        </div>
                                        <div class="form-actions">
                                          <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Cancel
                                          </button>
                                          <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Save
                                          </button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
            
                              <div class="tab-pane" id="tabVerticalLeft5" aria-labelledby="baseVerticalLeft-tab5">
                                <div class="card">
                                  <div class="card-header">
                                    <h4 class=""> Are you sure you want to log out from our application?</h4>
                                  </div>
                                  <div class="card-content collapse show">
                                    <div class="card-body">
                                    <form class="form" method="get" action="{{url('logout')}}">
                                        <div class="form-actions">
                                          <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> No
                                          </button>
                                          <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Yes
                                          </button>
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