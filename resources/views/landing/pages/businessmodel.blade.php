@extends('landing.layouts.master')
@section('content')

  <!-- Banner start -->
  <div class="banner" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 banner" src="{{asset('landing/img/banner-2.png')}}" alt="banner-9">
          <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
            <div class="carousel-content container">
              <div class="text-center">
                <h1 data-animation="animated fadeInDown delay-05s"><img src="{{asset('landing/img/landlord-tech-logo.png')}}" width="180" alt="logo"></h1>
                <h4 data-animation="animated fadeInUp delay-10s" style="color: #fff;"> Business Model </h4>
                <p data-animation="animated fadeInUp delay-10s">
                  Landlords Technology is creating an innovative business model that offer home and small business office seekers more flexible choices for accessing the kind of houses and office spaces they really desire and at an affordable rate and in desired locations
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>


    </div>
  </div>
  <!-- banner end -->

  <!-- Search area start -->
  <div class="search-area" id="search-area-1">
    <div class="container">
      <div class="main-title">
        <h1> How Does Landlords Tech Work? </h1>
        <p> What makes us pioneers and trail blazers among our peers </p>
      </div>
      <div class="row" style="margin: 90px 0px 40px 0px;" >
        <div class="col-lg-12 align-self-center">
          <div class="about-text">
            <p>Basically, Landlords Technology is creating an innovative business model that offer home and small business office seekers more flexible choices for accessing the kind of houses and office spaces they really desire and at an affordable rate and in desired locations. Rather than the tenants paying one year, or two years rent, Landlords Technology will make one-year bulk payment to property owners on behalf of the tenants while allowing the tenants to pay back an affordable monthly rental.</p>
            </div>
          </div>
        </div>



        <div class="row" style="margin: 40px 0px 40px 0px;">
          <div class="col-lg-12 align-self-center">
          <h1> As a Landlord </h1>
            <div class="about-text">
              <img src="{{asset('landing/img/landlord-tech-image-14.png')}}" alt="property-1" class="img-fluid">
            </div>
          </div>
        </div>

        <div class="row" style="margin: 40px 0px 40px 0px;">
          <div class="col-lg-12">
          <h1> As a tenant </h1>
            <div class="properties-service-v" style="margin: 90px 0px 0px 0px;">
              <img src="{{asset('landing/img/landlord-tech-image-16.png')}}" alt="property-1" class="img-fluid">
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Search area start -->

    @include('landing.layouts.partials.footer')
@endsection