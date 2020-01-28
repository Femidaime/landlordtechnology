@include('landlord-tenant.partials.header')
 <body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns   menu-expanded"
   data-open="click" data-menu="horizontal-menu" data-col="2-columns">

   @include('landlord-tenant.partials.nav')
      @yield('content')
   @include('landlord-tenant.partials.footer')

    @yield('scripts')
 </body>

