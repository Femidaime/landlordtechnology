  
  
  @extends('landing.layouts.master')
  <!-- Banner start -->
  @section('content')
   <div class="banner" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{asset('landing/img/landlord-tech-image-1.png')}}" alt="banner-1">
          <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
            <div class="carousel-content container">
              <div class="text-center">
                <h1 data-animation="animated fadeInDown delay-05s"><img src="{{asset('landing/img/landlord-tech-logo.png')}}" width="180" alt="logo"></h1>
                <h3 data-animation="animated fadeInUp delay-10s">
                  Circular Economy
                </h3>
                <p data-animation="animated fadeInUp delay-10s">
                  Landlords Technology helps both Landlords and Tenants achieve their desired needs </br> of bulk rental income and affordable living & office space respectively.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('landing/img/landlord-tech-image-2.png')}}" alt="banner-2">
          <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
            <div class="carousel-content container">
              <div class="text-center">
                <h1 data-animation="animated fadeInDown delay-05s"><img src="{{asset('landing/img/landlord-tech-logo.png')}}" width="180" alt="logo"></h1>
                <p data-animation="animated fadeInUp delay-10s">
                <h3 data-animation="animated fadeInUp delay-10s">
                  Blockchain Technology
                </h3>
                  Landlords Technology uses modern technology to manage their accomdation and housing </br> operations for home owners and real estate seekers </p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('landing/img/banner-lt.png')}}" alt="banner-3">
          <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
            <div class="carousel-content container">
              <div class="text-center">
                <h1 data-animation="animated fadeInDown delay-05s"><img src="{{asset('landing/img/landlord-tech-logo.png')}}" width="180" alt="logo"></h1>
                <h3 data-animation="animated fadeInUp delay-10s">
                  Sustainable Development
                </h3>
                <p data-animation="animated fadeInUp delay-10s">
                  Landlords Technology helps both Landlords and Tenants using a </br> twin approach of circular economy and blockchain technology.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="slider-mover-left" aria-hidden="true">
          <i class="fa fa-angle-left"></i>
        </span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="slider-mover-right" aria-hidden="true">
          <i class="fa fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <!-- banner end -->

  <!-- Search area start -->
  <div class="search-area" id="search-area-1">
    <div class="container">
      <div class="main-title">
      <p style="padding: 30px;"> Landlords Technology is lowering the barriers for decent living and helping individuals create wealth </br> while enhancing their work life balance. </p>
      <a href="{{url('/register')}}" data-animation="animated fadeInUp delay-12s"  class="btn btn-lg btn-round btn-white-lg-outline" style="background: #000; color: #fff; text-transform: None; margin-buttom: 2rem; "> Sign Up Now</a> 
      </div>
    </div>
  </div>
  <!-- Search area start -->

  <!-- Featured properties start -->
  <div class="featured-properties content-area-2">
    <div class="container">
      <div class="main-title">
        <h1> Our Solution </h1>
        <p> A real estate proptech solution having a  business model is built on 8 of the 17 sustainable development goals. </p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="properties-service-v">
            <img src="{{asset('landing/img/Landlord - Overview - Home.jpg')}}" alt="property-1" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="about-text">

            <p> Landlords Technology is creating an innovative business model that offer home and small business office seekers more flexible choices for accessing the kind of houses and office spaces they really desire and at an affordable rate and in desired locations. Rather than the tenants paying one year, or two years rent, Landlords Technology will make one-year bulk payment to property owners on behalf of the tenants while allowing the tenants to pay back an affordable monthly rental. </p> <br>

            <p> We believe that with the huge demand in the market and coupled with the high vacancy rate in urban centres, we will soon be influencing a major cultural alteration in the behaviour of real estate consumers in Nigeria.  </p>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Featured properties end -->

  <!-- services start -->

  <!-- Featured properties start -->
  <div class="featured-properties content-area-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="about-text">
            <p> This alteration is sustainable and fits within the circular economy framework of no wastage and continuous reusability. Ensuring people live close to their work places also helps in the issues surrounding climate change and clean energy as they will not have to commute long distances to get to the office. Further, our blockchain technology enables us to keep secure and validated records of property owners and transactions which can ultimately help municipalities for urban planning and infrastructure purposes. </p> <br>
            <p> Also, by making people live closer to their work place, we are helping them save money and manage their health. The deployment of the circular economy concept creates value, job opportunities and new tax revenues for government. </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="properties-service-v">
            <img src="{{asset('landing/img/Tenant - Property - Home.jpg')}}" alt="property-1" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Featured properties end -->


  <div class="featured-properties content-area-2 goals" style="background: #000;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3 style="text-align: center; margin: 30px;"> Sustainable Development Goals </h3>
          <p style="color:#fff; margin: 30px; text-align: center;">The concept of Landlords Technology emanated from asking critical questions that bothers on circular economy and </br> eight of the sustainable development goals (SDGs). </p>  
        </div>
        <div class="col-lg-6">
          <div class="properties-service-v">
             <img src="{{asset('landing/img/landlord-tech-logo-1.png')}}" alt="property-1" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4 align-self-center">
          
          <ul class="about-text-list">
            <li style="color:#DD132F;"> - No Poverty </li>
            <li style="color:#F29740;"> - Good Health & Wellbeing  </li>
            <li style="color:#E8A43B;"> - Affordable and clean energy </li>
            <li style="color:#3F7040;"> - Decent work and economic growth </li>
            <li style="color:#118E4E;"> - Industry, Innovation & Infrastructure </li>
            <li style="color:#C3843B;"> - Sustainable cities and communities </li>
            <li style="color:#881333;"> - Responsible consumption and production </li>
            <li style="color:#E56331;"> - Climate action </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

@include('landing.layouts.partials.footer')
@endsection
<!-- services start -->
