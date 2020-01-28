
@extends('landing.layouts.master')
@section('content')
<div class="login-page cnt-bg-photo overview-bgi" style="background-image: url({{url('/landing/img/landlord-tech-image-18.png')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
              <div class="content-form-box register-box">
                  <div class="login-header"><h4>Landlord's Sign Upss</h4></div>
              <form method="POST" action="{{url('/landlord/landlordSignup')}}">
                      <div class="form-group">
                          {{csrf_field()}}
                          <input type="text" class="form-control" name="firstname" placeholder="Firstname Name" >
                          @if ($errors->has('firstname'))
                          <span class="help-block">
                              <strong>{{ $errors->first('firstname') }}</strong>
                          </span>
                      @endif
                      </div>
                      <div class="form-group">
                            <input type="text" class="form-control" name="lastname" placeholder="Lastname " >
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
                          <button type="submit" class="btn btn-color btn-md btn-block">Submitss</button>
                      </div>
                      {{-- <div class="login-footer text-center">
                          <p>Already have an account?<a href="landlords-login.html"> Sign In</a></p>

                      </div> --}}
                  </form>
              </div>
            </div>
            <div class="col-lg-6 LT-info">
              <div class="logo-image">
                <img src="{{url('landing/img/landlord-tech-logo.png')}}" width="80" alt="logo">
              </div>
              <div class="register-info">
                <p style="margin: 60px 0px 40px 60px; font-size: -webkit-xxx-large; font-weight: 800;" >Tenants</p>
                <p> Sign Up as a Landlord on LandLords Technology and get quick & easy access to funds/returns on your leased property </p>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
 <script>
     $('#breadcrumbElement').hide()
</script>
@endsection