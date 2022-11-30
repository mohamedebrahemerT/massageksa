@include('front.layouts.includes.header')
<!-- Preloader -->
<div class="loader-wrap" id="loader-wrap">
    <div class="cssload-loader"></div>
</div>
<!-- Preloader End -->

<!-- Navigation -->
<nav class="navbar navbar-default" data-spy="affix" data-offset-top="60">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{url('landing')}}/images/logo.png" alt="Site Logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- Navigation End -->

<div class="main-wrap offwhite-bg">
    <div class="container">
        <div class="row">


            <h1>{{__('trans.terms')}}</h1>
            {!! $setting->terms !!}
        </div>
    </div>
</div>
@include('front.layouts.includes.footer')
