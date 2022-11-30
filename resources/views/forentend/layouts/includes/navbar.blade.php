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
                <img src="{{url('/')}}{{Storage::url(settings()->sitesymol) }}" alt="Site Logo" style="height: 92px;">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right" id="one-page-nav">
                @if((request()->segment(1) != 'privacy') || (request()->segment(1) != 'terms'))
                    <li><a href="#description">{{__('trans.home')}}</a></li>
                    <li><a href="#description">{{__('trans.about_us')}}</a></li>
                    <li><a href="#feature">{{__('trans.features')}}</a></li>
                    <li><a href="#screenshot">{{__('trans.screenshot')}} </a></li>
                     
                  
                    <li><a href="#contact">{{__('trans.contact')}}</a></li>
                    
 
                    <li><a class="btn btn-sm btn_blue" href="{{url('/admin_login')}}">{{__('trans.login')}}</a></li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- Navigation End -->
