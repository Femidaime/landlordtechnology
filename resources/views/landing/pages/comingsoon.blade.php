@extends('landing.layouts.master')
@section('content')


<!-- Coming soon start -->
   <!-- Coming soon start -->
   <div class="coming-soon coming-soon-bg overview-bgi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-head" style="text-align:center; margin:40px; padding: 20px;">
                        <img src="{{url('landing/img/landlord-tech-logo.png')}}" width="180" alt="logo">
                    </div>
                    <div class="coming-soon-inner">
                        <p class="lead">This page is under construction, we are working very hard to give you the best experience with this one.
                        </p>
                        <p class="lead">You can still sign up & access your accounts here
                        </p>
                        
                        <div class="clearfix"></div>
                        <ul class="buttons" style="margin: 0px">
                        <a data-animation="animated fadeInUp delay-12s" href="{{url('/register')}}" class="btn btn-lg btn-round btn-white-lg-outline">LandLord</a>
                            <a data-animation="animated fadeInUp delay-12s" href="{{url('/tenant/register')}}" class="btn btn-lg btn-round btn-white-lg-outline">Tenant</a>
                            <a data-animation="animated fadeInUp delay-12s" href="#" class="btn btn-lg btn-round btn-white-lg-outline">Agent</a>
                        </ul>

                        
                        <ul class="social-list clearfix">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Coming soon end -->

    <!-- Full Page Search -->
    <div id="full-page-search">
        <button type="button" class="close">×</button>
        <form action="#">
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="button" class="btn btn-sm btn-color">Search</button>
        </form>
    </div>
@include('landing.layouts.partials.footer')

<script>
$('#breadcrumbElement').hide();
</script>
@endsection