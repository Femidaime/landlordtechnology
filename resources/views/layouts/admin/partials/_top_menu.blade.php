<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                <div class="responsive-logo">
                    <a href="index.html">
                        <img src="../../assets/global/images/prince_logo.png" alt="main-logo">
                    </a>
                </div>
            </div>

            <div class="topbar-right">
                <div class="nav navbar-nav navbar-right">

                    <div class="header-search right-icon">
                        <form role="search" class="search-box">
                            <input placeholder="Search..." class="form-control" type="text">
                            <a href="javascript:">
                                <i class="fa fa-search"></i>
                            </a>
                        </form>
                    </div>

                    <div class="dropdown header-notification right-icon">
                        <a href="javascript:" class="dropdown-toggle waves-effect waves-light notification-icon"
                           data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell-o" aria-hidden="true"></i>
                            <span class="label label-danger">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="text-center">
                                <p class="notification-title">Notification<span
                                            class="label label-primary">4</span></p>
                            </li>
                            <li class="list-group default-scroll">
                                <a href="javascript:;" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img src="{{url('../../assets/global/images/user.png')}}" alt="user">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading"><span>Domance Den</span> posted a photo on
                                                your wall.</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:;" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img src="../../assets/global/images/user2.jpg" alt="user">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading"><span>Wikko Menta</span> commented on your
                                                last video.</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:;" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img src="../../assets/global/images/user3.jpg" alt="user">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading"><span>Jonny Sem</span> posted 4 comments
                                                on your photo.</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:;" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img src="{{url('../../assets/global/images/user.png')}}" alt="user">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading"><span>Doli Senga</span> posted a photo on
                                                your wall.</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:;" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img src="../../assets/global/images/user5.jpg" alt="user">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading"><span>Bhura Kenta</span> commented on your
                                                last video.</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:;" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img src="../../assets/global/images/user6.jpg" alt="user">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading"><span>Jolly Baby</span> posted 2 comments
                                                on your photo.</h5>
                                        </div>
                                    </div>
                                </a>

                            </li>
                            <li class="all-notification">
                                <a href="javascript:;" class="list-group-item text-right">
                                    <small>See all notifications</small>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="header-fullscreen right-icon">
                        <a href="javascript:" class="waves-effect waves-light toggle-fullscreen">
                            <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                        </a>
                    </div>

                    <!--<div class="header-chat right-icon">
                        <a href="javascript:" class="waves-effect waves-light">
                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                        </a>
                    </div>-->

                    <div class="dropdown user-profile right-icon">
                        <a href="javascript:" class="dropdown-toggle waves-effect waves-light"
                           data-toggle="dropdown"
                           aria-expanded="false">
                            <img src="{{url('../../assets/global/images/user.png')}}" alt="user">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/corporate/profile')}}" class="waves-effect waves-light">
                                    <i class="fa fa-user" aria-hidden="true"></i>Profile</a>
                            </li>
                            <li><a href="{{url('/corporate/password/change')}}" class="waves-effect waves-light">
                                    <i class="fa fa-cog" aria-hidden="true"></i>Change Password</a>
                            </li>
                            {{--<li><a href="javascript:" class="waves-effect waves-light">--}}
                                    {{--<i class="fa fa-lock" aria-hidden="true"></i>Lock screen</a>--}}
                            {{--</li>--}}
                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('logout')}}" class="waves-effect waves-light">
                                    <i class="fa fa-power-off text-danger" aria-hidden="true"></i> Logout</a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </nav>
    </div>
</div>
<div class="clearfix"></div>