{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('landing.layouts.master')
@section('content')
<div class="login-page  cnt-bg-photo overview-bgi" style="background-image: url({{url('/landing/img/landlord-tech-image-18.png')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
              <div class="content-form-box register-box">
                  <div class="login-header"><h4> Register </h4></div>
                  @foreach ($errors->all() as $error)
                        {{ $error }}<br/>
                    @endforeach
              <form method="POST" action="{{ route('register') }}">

                     <div class="form-group">
                        <select value=""  name="role_id" id="role_id" class="selectpicker form-control">
                          <option value="">Please select your category</option>
                          <option value="2">Landlord</option>
                          <option value="1">Tenant</option>
                          <option value="3">Agent</option>
                        </select>
                        @if ($errors->has('role_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                    @endif
                       </div> 

                      <div class="form-group">
                          {{csrf_field()}}
                          <input type="text" class="form-control" name="firstname" placeholder="First Name" >
                          @if ($errors->has('firstname'))
                          <span class="help-block">
                              <strong>{{ $errors->first('firstname') }}</strong>
                          </span>
                      @endif
                      </div>
                      <div class="form-group">
                            <input type="text" class="form-control" name="lastname" placeholder="Last Name " >
                            @if ($errors->has('lastname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lastname') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                          <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                          @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                      </div>
                      <div class="form-group">
                          <input type="+tel" class="form-control" name="phoneNumber" placeholder="Phone Number" required>
                          @if ($errors->has('phoneNumber'))
                          <span class="help-block">
                              <strong>{{ $errors->first('phoneNumber') }}</strong>
                          </span>
                      @endif
                      </div>
                      <div class="form-group">
                          <input type="Password" class="form-control" name="password" placeholder="Password" required>
                      </div>
                      <div class="form-group">
                          <input type="Password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-color btn-md btn-block">Submit</button>
                      </div>
                      <div class="login-footer text-center">
                          <p>Already have an account?<a href="{{url('/login')}}"> Sign In</a></p>

                      </div> 
                  </form>
              </div>
            </div>
            <div class="col-lg-6 LT-info">
              <div class="logo-image">
                <img src="{{url('landing/img/landlord-tech-logo.png')}}" width="80" alt="logo">
              </div>
              <div class="register-info">
                <p style="margin: 60px 0px 40px 60px; font-size: -webkit-xxx-large; font-weight: 800; line-height: initial;"> Landlords Technology</p>
                <p> Sign Up as a Landlord on LandLords Technology and get quick & easy access to funds/returns on your leased property </p>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{url('landing/js/jquery-2.2.0.min.js')}}"></script>
 <script>
     $('#breadcrumbElement').hide();
     //$('#hideFooter').hide();
</script>
@endsection