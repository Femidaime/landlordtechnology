@include('layouts..admin.partials.header')
<div class="container body">
    <div class="main_container">
        <!-- Start Loader -->
{{--@include('layouts.fertility.preloader')--}}
@include('layouts.admin.partials._sidebar')
@include('layouts.admin.partials._top_menu')
@yield('content')

@include('layouts.admin.partials.footer')