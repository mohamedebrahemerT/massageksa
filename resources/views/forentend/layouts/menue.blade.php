<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{url('/')}}/Untitled-3.jpg" alt="logo"   />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive" style="margin-top: 31px; margin-right: 25%;">
            <ul class="navbar-nav ml-auto xxxxrrrr"    @if(app()->getLocale()=='ar')
                style="direction: rtl;" 
                     @endif>
 



                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">{{trans('admin.Home')}}</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link @if(str_contains(url()->current(), 'About') or str_contains(url()->current(), 'ourTeam')
or str_contains(url()->current(), 'VisionMission')) active @endif" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">{{trans('admin.About')}} 
                           <i class="fas fa-sort-down"></i></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                     <a class="dropdown-item" href="{{url('/')}}/About">{{trans('admin.WhoWeAre')}}</a>
                <a class="dropdown-item" href="{{url('/')}}/VisionMission">{{trans('admin.VisionMission')}}</a>

                            <a class="dropdown-item" href="{{url('/')}}/ourTeam">
                                {{trans('admin.ourTeam')}}
                            </a>
                        </div>
                    </li>




                    <li class="nav-item dropdown">
                        <a class="nav-link @if(str_contains(url()->current(), 'Services')) active @endif" href="{{url('/')}}/Services"  data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">{{trans('admin.Services')}}
                           <i class="fas fa-sort-down"></i> 
                        </a>
 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">

   <a class="dropdown-item" href="{{url('/')}}/Services">

   {{trans('admin.allsolution')}}
</a>
             @foreach(App\Department::get() as  $Servic )

    <a class="dropdown-item" href="{{url('/')}}/Services/{{$Servic->id}}">

    @if(session('lang')=='ar')
{{$Servic->dep_name_ar }}

@endif

  @if(session('lang')=='en')
{{$Servic->dep_name_en }}

@endif 
</a>
         @endforeach

</div>
                    </li>

 

                     
                    <li class="nav-item">
                        <a class="nav-link @if(str_contains(url()->current(), 'contact')) active @endif" href="{{url('/')}}/contact">{{trans('admin.Contact')}}</a>
                    </li>

                  




           


            </ul>
        </div>


    </div>
</nav>

