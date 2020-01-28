{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
<div class="login-page cnt-bg-photo overview-bgi" style="background-image: url({{url('landing/img/landlord-tech-image-13.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
              <div class="content-form-box register-box">
                  <div class="login-header"><h4> Login In </h4></div>
                  <form method="POST" action="{{ route('login') }}">
                      <div class="form-group">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email Address" autofocus>
                        @csrf
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required  placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-color btn-md btn-block">Submit</button>
                      </div>

                      <div class="login-footer text-center">
                          <p>Dont have an account yet?<a href="{{url('/register')}}"> Go Back </a></p>

                          @if (Route::has('password.request'))
                          <p><a href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a></p>
                          @endif
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
                <p> Sign Into LandLords Technology and view your Landlord Profile Account information </p>
                
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