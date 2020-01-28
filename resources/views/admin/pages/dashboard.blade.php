@extends('layouts.admin.base')
@section('content')

<div class="container-fluid right_color">
        <div class="page-main-header">
            <!-- Page Title -->
            <h2 class="page-name-title">Dashboard V1</h2>
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="text-info">Dashboard</li>
                <li class="active">Dashboard V1</li>
            </ol>
        </div>

        <div class="contain-section dashboard_v1">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="tile-stats bg-primary">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div class="count">{{$tenants}}</div>
                        <h3>No. Of Tenants</h3>
                        <a href="javascript:"><p>View More <i class="fa fa-hand-o-right"></i></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="tile-stats bg-purple">
                        <div class="icon"><i class="fa fa-comments-o"></i></div>
                        <div class="count">{{$landlord}}</div>
                        <h3>No. of Landlord </h3>
                        <a href="javascript:"><p>View More <i class="fa fa-hand-o-right"></i></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="tile-stats bg-pink">
                        <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                        <div class="count">{{$verifiedProperties}}</div>
                        <h3>Verified Properties</h3>
                        <a href="javascript:"><p>View More <i class="fa fa-hand-o-right"></i></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="tile-stats bg-inverse">
                        <div class="icon"><i class="fa fa-check-square-o"></i></div>
                        <div class="count">{{$unVerifiedProperties}}</div>
                        <h3>Unverified Prop. </h3>
                        <a href="javascript:"><p>View More <i class="fa fa-hand-o-right"></i></p></a>
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-body">
                        <canvas id="line-basic"></canvas>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-body">
                        <div class="section-header">
                            <h2>Tops Profile</h2>
                        </div>
                        <div class="events">
                            <a class="date">
                                <p class="month">Feb</p>
                                <p class="day">14</p>
                            </a>
                            <div class="event-body">
                                <a class="title" href="javascript:">Item Title Here</a>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content.</p>
                            </div>
                        </div>
                        <div class="events">
                            <a class="date">
                                <p class="month">March</p>
                                <p class="day">30</p>
                            </a>
                            <div class="event-body">
                                <a class="title" href="javascript:">Item Title Here</a>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content.</p>
                            </div>
                        </div>
                        <div class="events">
                            <a class="date">
                                <p class="month">April</p>
                                <p class="day">19</p>
                            </a>
                            <div class="event-body">
                                <a class="title" href="javascript:">Item Title Here</a>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content.</p>
                            </div>
                        </div>
                        <div class="events">
                            <a class="date">
                                <p class="month">May</p>
                                <p class="day">05</p>
                            </a>
                            <div class="event-body">
                                <a class="title" href="javascript:">Item Title Here</a>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content.</p>
                            </div>
                        </div>
                        <div class="events margin-b-0">
                            <a class="date">
                                <p class="month">May</p>
                                <p class="day">22</p>
                            </a>
                            <div class="event-body">
                                <a class="title" href="javascript:">Item Title Here</a>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-body">
                        <div class="section-header">
                            <h2>Weekly Summary</h2>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <span class="sparkbar">10,9,3,7,4,2,9,7,6,5,4,3,4,5,6,7,8,9,3,2,8,7,9,9,10,9</span>
                            <h5 class="bottom-title">Sales Progress</h5>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                                    <span class="sparkpie">1,1,2,3,4,2</span>
                                    <h5 class="bottom-title">New Traffic</h5>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                                    <span class="sparkpie">2,1,3,2,1,1</span>
                                    <h5 class="bottom-title">Bounce Rates</h5>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                                    <span class="sparkpie">3,2,1,2,2,1</span>
                                    <h5 class="bottom-title">Device Share</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="user-card">
                        <div class="container-box">
                            <img src="../../assets/global/images/user-card.jpg" alt="user background" class="hero-image">

                            <div class="information">
                                <img src="../../assets/global/images/user2.jpg" alt="user" class="avatar">
                                <div class="name">Loncatda Bhula</div>
                                <div class="position">Creative Manager</div>

                                <div class="stats">
                                        <span class="followers">
                                            <span class="value">480</span>
                                            <span class="label">Followers</span>
                                        </span>

                                    <span class="following">
                                            <span class="value">300</span>
                                            <span class="label">Following</span>
                                        </span>

                                    <span class="stories">
                                            <span class="value">43</span>
                                            <span class="label">Tags</span>
                                        </span>
                                </div>
                                <div class="stats">
                                        <span class="followers">
                                            <span class="value">123</span>
                                            <span class="label">Facebook</span>
                                        </span>

                                    <span class="following">
                                            <span class="value">43</span>
                                            <span class="label">Twitter</span>
                                        </span>

                                    <span class="stories">
                                            <span class="value">102</span>
                                            <span class="label">Whatsapp</span>
                                        </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="section-body">
                        <div class="map-height vector-map" id="world-map"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="testimonial section-body">
                        <div class="content">
                            <img src="../../assets/global/images/user10.jpg" alt="Avtar">
                            <div class="author">John Denis</div>
                            <div class="author-position">Founder-Group.</div>
                            <div class="text">
                                <i class="fa fa-quote-left"></i> Contrary to popular belief, Lorem Ipsum is not simply
                                random text. It has roots in a piece of classical Latin literature from 45 BC, making it
                                over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                Virginia.
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="section-body alert-left-icon">
                        <div class="alert alert-primary alert-dismissible" role="alert">
                            <div class="icon-box"><i class="fa fa-cogs"></i></div>
                            <div class="right-text">
                                <p class="icon-text"> Primary Box</p>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <div class="icon-box"><i class="fa fa-check-square-o" aria-hidden="true"></i></div>
                            <div class="right-text">
                                <p class="icon-text"> Success Box</p>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <div class="icon-box"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                            <div class="right-text">
                                <p class="icon-text"> Warning Box</p>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="alert alert-danger alert-dismissible m-b-0" role="alert">
                            <div class="icon-box"><i class="fa fa-comments" aria-hidden="true"></i></div>
                            <div class="right-text">
                                <p class="icon-text"> Error Box</p>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
                    <div class="section-body">
                        <span>iMacs</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                60%
                            </div>
                        </div>

                        <span>iPhone</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                40%
                            </div>
                        </div>

                        <span>iBooks</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                20%
                            </div>
                        </div>

                        <span>Android</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                60%
                            </div>
                        </div>

                        <span>Samsung</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                80%
                            </div>
                        </div>

                        <span>Sony</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="65"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                65%
                            </div>
                        </div>

                        <span>Vivo</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-pink" role="progressbar" aria-valuenow="65"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                50%
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}

        </div>

    </div>
@endsection    