<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
  <div class="navbar-wrapper">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
        <li class="nav-item d-md-none">
          <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
        </li>
      </ul>
    </div>
    <div class="navbar-container container center-layout">
      <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="nav navbar-nav mr-auto float-left">
          <li class="nav-item">
            <a class="navbar-brand" href="index.html">
              <img class="brand-logo" alt="modern admin logo" height="50px" src="{{url('landlord-tenants/images/logo/LT.png')}}">
              <h4 style="float: right; margin: 13px; font-family: 'Montserrat Alternates', sans-serif; font-size: x-large;"> Landlords Technology </h4>
            </a>
          </li>
        </ul>
        <ul class="nav navbar-nav float-right">
          <li class="dropdown dropdown-notification nav-item">
            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
              <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">5</span>
            </a>
          </li>
          <li class="dropdown dropdown-notification nav-item">
            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
          </li>
          <li class="dropdown dropdown-user nav-item">
            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
              <span class="user-name text-bold-700">{{Auth::user()->lastname}} {{Auth::user()->firstname}}</span>
              <span class="user-name text-bold-200">@if(Auth::user()->role_id == "1") Tenant @else Landlord @endif</span>
              <span class="avatar avatar-online">
                @if(Auth::user()->photo)
                <img src="{{url('/storage')}}/{{Auth::user()->photo}}" alt="avatar"><i></i></span>
                @else
                <img src="{{url('landlord-tenants/images/empty_user.jpg')}}" alt="avatar"><i></i></span>
                @endif
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>
                <a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a>
                <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>
                <a
                class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="{{url('logout')}}"><i class="ft-power"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->

  @if(Auth::user()->role_id ==2)

  <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow"
  role="navigation" data-menu="menu-wrapper">
  <div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">
    <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="dropdown nav-item">
        <a class="dropdown-toggle nav-link" href="{{url('landlord/overview')}}"><i class="la la-th-large"></i>
          <span>Overview</span>
        </a>
      </li>
      <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" href="{{url('/landlord/properties')}}"><i class="la la-home"></i><span>Property</span></a>
      </li>
      {{-- <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" href="{{url('/landlord/profile')}}"><i class="la la-home"></i><span>Profile</span></a>
      </li> --}}
      <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" href="{{url('/landlord/finance')}}"><i class="la la-money"></i><span>Finance</span></a>
      </li>
      <li class="dropdown nav-item" data-menu="dropdown">
      <a class="dropdown-toggle nav-link" href="index.html" data-toggle="dropdown"><i class="la la-file-text"></i>
        <span>Agreement</span>
      </a>
      <ul class="dropdown-menu">
      <li data-menu=""><a class="dropdown-item" href="{{url('/tenant/add-agreement')}}" data-toggle="dropdown">Add Agreements</a>
        </li>
        <li data-menu=""><a class="dropdown-item" href="{{url('/tenant/view-agreement')}}" data-toggle="dropdown">View Agreements</a>
        </li>
      </ul>
    </li>
      <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" href="#"><i class="la la-envelope"></i><span>Message</span></a>
      </li>
    </ul>
  </div>
</div>
@elseif(Auth::user()->role_id == '1')
<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow"
role="navigation" data-menu="menu-wrapper">
<div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">
  <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
    <li class="dropdown nav-item">
      <a class="dropdown-toggle nav-link" href="{{url('tenant/overview')}}"><i class="la la-th-large"></i>
        <span>Overview</span>
      </a>
    </li>
    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" href="{{url('/tenant/properties')}}"><i class="la la-home"></i><span>Property</span></a>
    </li>
    {{-- <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" href="{{url('tenant/finance')}}"><i class="la la-user"></i><span>Profile</span></a>
    </li> --}}
  <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" href="{{url('/tenant/finance')}}"><i class="la la-money"></i><span>Finance</span></a>

    <li class="dropdown nav-item" data-menu="dropdown">
      <a class="dropdown-toggle nav-link" href="index.html" data-toggle="dropdown"><i class="la la-file-text"></i>
        <span>Agreement</span>
      </a>
      <ul class="dropdown-menu">
      <li data-menu=""><a class="dropdown-item" href="{{url('/tenant/add-agreement')}}" data-toggle="dropdown">Add Agreements</a>
        </li>
        <li data-menu=""><a class="dropdown-item" href="{{url('/tenant/view-agreement')}}" data-toggle="dropdown">View Agreements</a>
        </li>
      </ul>
    </li>
    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" href="#"><i class="la la-envelope"></i><span>Message</span></a>
    </li>
  </ul>
</div>
</div>

@endif
