@include('forentend.layouts.includes.header')
<!-- Page Header Start-->
@yield('modals')
@include('forentend.layouts.includes.navbar')
    @yield('content')
@include('forentend.layouts.includes.footer')
