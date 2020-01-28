

@section('landing.layouts.master')
<!-- Login page start -->
@section('content')
<div class="login-page cnt-bg-photo overview-bgi" style="background-image: url(assets/img/landlord-tech-image-18.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
              <div class="content-form-box register-box">
                  <div class="login-header"><h4>LandLord's Sign Up</h4></div>
                  <form action="#" method="GET">
                      <div class="form-group">
                          <input type="text" class="form-control" name="name" placeholder="Full Name">
                      </div>
                      <div class="form-group">
                          <input type="email" class="form-control" name="email" placeholder="Email Address">
                      </div>
                      <div class="form-group">
                          <input type="+tel" class="form-control" name="tel" placeholder="Phone Number">
                      </div>
                      <div class="form-group">
                          <input type="Password" class="form-control" name="password" placeholder="Password">
                      </div>
                      <div class="form-group">
                          <input type="Password" class="form-control" name="password" placeholder="Confirm Password">
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-color btn-md btn-block">Submit</button>
                      </div>
                      <div class="login-footer text-center">
                          <p>Already have an account?<a href="Landlords-login.html"> Sign In</a></p>
                          
                      </div>
                  </form>
              </div>
            </div>
            <div class="col-lg-6 LT-info">
              <div class="logo-image">
                <img src="assets/img/landlord-tech-logo.png" width="80" alt="logo">
              </div>
              <div class="register-info">
                <p style="margin: 60px 0px 40px 60px; font-size: -webkit-xxx-large; font-weight: 800;" >Landlords</p>
                <p> Sign Up as a Landlord on LandLords Technology and get your property leased </p>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- Footer start -->
<!-- Login page end -->
