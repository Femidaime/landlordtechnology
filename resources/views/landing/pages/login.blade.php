@extends('landing.layouts.master')
@section('content')
<div class="login-page cnt-bg-photo overview-bgi" style="background-image: url({{url('landing/img/landlord-tech-image-18.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
              <div class="content-form-box register-box">
                  <div class="login-header"><h4>LandLord's Login</h4></div>
                  <form action="#" method="GET">
                      <div class="form-group">
                          <input type="email" class="form-control" name="email" placeholder="Email Address">
                      </div>
                      <div class="form-group">
                          <input type="Password" class="form-control" name="password" placeholder="Password">
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-color btn-md btn-block">Submit</button>
                      </div>
                      <div class="login-footer text-center">
                          <p>Dont have an account yet?<a href="landlords-register.html"> Register</a></p>
                          <p><a href="forgot-password.html"> Forgot Password </a></p>
                      </div>
                  </form>
              </div>
            </div>
            <div class="col-lg-6 LT-info">
              <div class="logo-image">
                <img src="{{url('landing/img/landlord-tech-logo.png')}}" width="80" alt="logo">
              </div>
              <div class="register-info">
                <p style="margin: 60px 0px 40px 60px; font-size: -webkit-xxx-large; font-weight: 800;" >Landlords</p>
                <p> Sign Into LandLords Technology and view your Landlord Profile Account information </p>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection