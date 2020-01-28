
@extends('landing.layouts.master')
@section('content')

<div class="banner" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 banner" src="{{asset('landing/img/landlord-tech-image-9.png')}}" alt="banner-9">
          <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
            <div class="carousel-content container">
              <div class="text-center">
                <h1 data-animation="animated fadeInDown delay-05s"><img src="{{asset('landing/img/landlord-tech-logo.png')}}" width="180" alt="logo"></h1>
                <h4 data-animation="animated fadeInUp delay-10s" style="color: #fff;"> About </h4>
                <p data-animation="animated fadeInUp delay-10s">
                  Landlords Technology is creating an innovative business model that offer home and small business office seekers more flexible choices for accessing the kind of houses and office spaces they really desire and at an affordable rate and in desired locations.
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
        <h1> About Landlords Technology </h1>
        <p> What makes us pioneers and trail blazers among our peers </p>
      </div>
      <div class="row" style="margin: 90px 0px 40px 0px;" >
        <div class="col-lg-6">
          <div class="properties-service-v">
            <img src="{{asset('landing/img/landlord-tech-image-10.png')}}" alt="property-1" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="about-text">

            <p>The concept of Landlords Technology emanated from asking critical questions that bothers on circular economy and eight of the sustainable development goals (SDGs). </p>
            <p><br>

              Do I really need a house of my own? Why do I have to commute for about 2 hours and in congested traffic before I get to work? Am I not impairing my life expectancy by getting home from work late every night at 10pm and waking up in the morning by 4am to get ready for the same job? What is stopping me from living close to where I work? We had to question the status quo. In answering these questions, the following eight SDGs were at the back of our mind. Our focus was on challenging the status quo in the way we currently manage our lives, our cities and our scarce resources. </p>
            </div>
          </div>
        </div>



        <div class="row" style="margin: 40px 0px 40px 0px;">
          <div class="col-lg-6 align-self-center">
            <div class="about-text">

              <p> With these eight SDGs, Landlords Technology is contributing is quota to the UN agreed three dimensions of sustainable development, which are, economic prosperity; social inclusion; and environmental sustainability. </p> <br>

              <p> Landlords Technology brings a collaborative way of life. In the medium term, Landlords Technology is going to engender mixed-use development that encourages higher density living within downtown areas. This ultimately promotes a healthier life through pedestrian walk ways. It will also enhance designs that will enable people to use the bicycle or use public transit to travel to and from work. </p>


            </div>
          </div>
          <div class="col-lg-6">
            <div class="properties-service-v">
              <img src="{{asset('landing/img/landlord-tech-image-11.png')}}" alt="property-1" class="img-fluid">
            </div>
          </div>
        </div>

        <div class="row" style="margin: 40px 0px 40px 0px;">
          <div class="col-lg-6">
            <div class="properties-service-v" style="margin: 90px 0px 0px 0px;">
              <img src="{{asset('landing/img/landlord-tech-image-12.png')}}" alt="property-1" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6 align-self-center">
            <div class="about-text">

              <p> What we do at Landlord Technology is rethinking everything in the homeownership and small business offices value chain from product design to the relationships with our customers. This fits perfectly into the new trend of circular economy which impacts on sustainable competitiveness. </p> <br>

              <p> This concept represents a significantly different way of doing business, replacing outmodedness with new methods to earning income. For example, the furniture manufacturer Ikea is now leasing rather than selling products. With monthly rental payments, as opposed to one year or two years’ payment, people can live and work happily where they want and in sound health and great state of mind.

                Using artificial intelligence, machine learning, predictive analytics, virtual reality and blockchain, Landlords Technology will help in creating a transparent real estate market in Nigeria. Our solution is lowering the barriers for decent living and we are helping individuals to create wealth while enhancing their work life balance. </p> <br>

                <p> Using artificial intelligence, machine learning, predictive analytics, virtual reality and blockchain, Landlords Technology will help in creating a transparent real estate market in Nigeria. Our solution is lowering the barriers for decent living and we are helping individuals to create wealth while enhancing their work life balance.  </p>

              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- Search area start -->


      <div class="featured-properties content-area-2 goals" style="background: #000;">
        <div class="container">
          <div class="main-title col-md-12">
            <p style="color: #fff;" > Our 8 sustainable development goals that is our driving force </p>
          </div>
          <div class="row" style="margin: 50px 0px 40px 50px;">

            <div class="col-lg-3 col-md-6 col-sm-6">
              <img src="{{asset('landing/img/LT-1.png')}}" width="140" alt="property-1">
              <p style="color: #fff; margin: 20px 0px 20px 25px;" > No Poverty </p>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <img src="{{asset('landing/img/LT-2.png')}}" width="140" alt="property-1">
                <p style="color: #fff; margin: 20px 0px 20px 18px;" >Good Health & <br> well being</p>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <img src="{{asset('landing/img/LT-3.png')}}" width="140" alt="property-1">
                <p style="color: #fff; margin: 20px 0px 20px 18px;" >Affordable Clean <br> Energy </p>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <img src="{{asset('landing/img/LT-4.png')}}" width="140" alt="property-1">
                <p style="color: #fff; margin: 20px 0px 20px 18px;" >Decent Work & <br> Economic growth </p>
            </div>

          </div>


            <div class="row" style="margin: 40px 0px 50px 50px;">

            <div class="col-lg-3 col-md-6 col-sm-6">
              <img src="{{asset('landing/img/LT-5.png')}}" width="140" alt="property-1">
                  <p style="color: #fff; margin: 20px 0px 20px -10px;" >Industrial, Innovation & <br> infrastructure</p>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <img src="{{asset('landing/img/LT-6.png')}}" width="140" alt="property-1">
                  <p style="color: #fff; margin: 20px 0px 20px 18px;" >Sustainable cities & <br> communities</p>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <img src="{{asset('landing/img/LT-7.png')}}" width="140" alt="property-1">
                  <p style="color: #fff; margin: 20px 0px 20px 18px;" >Responsible <br> consumption <br> & production</p>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <img src="{{asset('landing/img/LT-8.png')}}" width="140" alt="property-1">
                  <p style="color: #fff; margin: 20px 0px 20px 18px;" >Climate Change</p>
            </div>

          </div>

        </div>
      </div>
      @include('landing.layouts.partials.footer')
@endsection