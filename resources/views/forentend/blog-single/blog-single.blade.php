@extends('forentend.index')

@section('content')


  <div id="s4-workspace">
            <div id="s4-bodyContainer">
                <div data-name="ContentPlaceHolderMain">
                    
                    
                    <span id="DeltaPlaceHolderMain">
                        
            <div data-name="WebPartZone">
                
                
                <div>
                    <div class="ms-webpart-zone ms-fullWidth">
  <div id="MSOZoneCell_WebPartctl00_ctl72_g_b5e3d865_e59e_4566_b79e_0f9d96b16c8a" class="s4-wpcell-plain ms-webpartzone-cell ms-webpart-cell-vertical ms-fullWidth ">
    <div class="ms-webpart-chrome ms-webpart-chrome-vertical ms-webpart-chrome-fullWidth ">
      <div WebPartID="b5e3d865-e59e-4566-b79e-0f9d96b16c8a" HasPers="false" id="WebPartctl00_ctl72_g_b5e3d865_e59e_4566_b79e_0f9d96b16c8a" width="100%" class="ms-WPBody noindex " allowDelete="false" allowExport="false" style="" ><div id="ctl00_ctl72_g_b5e3d865_e59e_4566_b79e_0f9d96b16c8a">
        

<div class="slider-container rev_slider_wrapper" style="height: 470px;">
    <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"delay": 9000, "gridwidth": 800, "gridheight": 500 , "autoplay":false}'>
        <ul>
            
                    
                @foreach(App\Maincategories::where('page','Blog')->get() as  $Maincategoy )
                    <li data-transition="fade">
                        <img alt="ETHIX NG" src="{{url('/')}}/{{substr($Maincategoy->photo, -29) }}" data-bgposition="center center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" class="rev-slidebg" />
                        <div class="test">
                           
                                <div class="tp-caption top-label" data-x="left" data-hoffset="0" data-y="center" data-voffset="" data-start="1000"
                                    style="z-index: 5;" data-transform_in="y:[-300%];opacity:0;s:500;">
                                      @if(session('lang')=='ar')
                            {{$Maincategoy->title_name_ar }}

                        @endif

                        @if(session('lang')=='en')
                            {{$Maincategoy->title_name_en }}

                        @endif
                                </div>
                                <div class="tp-caption bottom-label" data-x="left" data-hoffset="0" data-y="center" data-voffset="" data-start="1700"
                                    data-whitespace="nowrap" data-transform_in="y:[100%];s:500;" data-transform_out="opacity:0;s:500;"
                                    style="z-index: 5;" data-mask_in="x:0px;y:0px;">
                                   <span style="color: #fff">
                                       @if(session('lang')=='ar')
                            {!! $Maincategoy->Maincategories_name_ar !!}

                        @endif

                        @if(session('lang')=='en')
                            {!! $Maincategoy->Maincategories_name_en !!}

                        @endif
                                   </span>
                                </div>
                                <div class="tp-caption bottom-label" data-x="left" data-hoffset="0" data-y="center" data-voffset="" data-start="2500"
                                    style="z-index: 5;" data-transform_in="y:[100%];opacity:0;s:500;">
                                    
                                </div>
                                  <div class="tp-caption bottom-label" data-x="left" data-hoffset="0" data-y="center" data-voffset="" data-start="2500"
                                    style="z-index: 5;" data-transform_in="y:[100%];opacity:0;s:500;">
                                    
                                </div>
                         
                        </div>
                    </li>
         @endforeach
                
                   
                  
                     
                
        </ul>
    </div>
</div>
<span id="ctl00_ctl72_g_b5e3d865_e59e_4566_b79e_0f9d96b16c8a_lblMessages"></span>
      </div><div class="ms-clear"></div></div>
    </div>
  </div>
</div>
                </div>
                
            </div>
            <div class="home-intro" id="home-intro" style="background: url(https://www.its.ws/PublishingImages/home-intro.png);
    background-color: rgba(0, 0, 0, 0);
    background-size: auto;
margin-bottom: 0;
position: relative;
text-align: center;
background-color: transparent;
border-top: 6px solid #c1c1c1;
height: 115px;
padding: 3px 0;
background-size: cover;">
    <div>
        <div class="container">
            <div class="owl-carousel owl-theme full-width owl-loaded owl-drag owl-carousel-init" data-plugin-options="{&quot;items&quot;: 1, &quot;loop&quot;: true, &quot;nav&quot;: false, &quot;dots&quot;: false ,&quot;autoplay&quot;:true}">


                
            <div class="owl-stage-outer"><div class="owl-stage"></div></div><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots disabled"></div></div>
        </div>
</div>
</div>
        <div style='display:none' id='hidZone'><menu class="ms-hide">
  <ie:menuitem id="MSOMenu_Help" iconsrc="/_layouts/15/images/HelpIcon.gif" onmenuclick="MSOWebPartPage_SetNewWindowLocation(MenuWebPart.getAttribute('helpLink'), MenuWebPart.getAttribute('helpMode'))" text="Help" type="option" style="display:none">

  </ie:menuitem>
</menu></div>
                    </span>
                    
                </div>
            </div>
        </div>

    <!-- full Title -->
    <!--div class="full-title">
        <div class="container">
            <Page Heading/Breadcrumbs >
            <h1 class="mt-4 mb-3">{{trans('admin.newes')}}  </h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/"> {{trans('admin.Home')}} </a>
                    </li>
                    <li class="breadcrumb-item active">  {{trans('admin.newes')}}</li>
                </ol>
            </div>
        </div>
    </div -->

    <div class="blog-main">
        <div class="container">
            <div class="row">
                <!-- Post Content Column -->
                <div class="col-lg-8">
                    <!-- Preview Image -->
                    <img class="img-fluid rounded" src="{{url('/')}}/{{substr($newes->photo, -29) }}" alt=""/>
                    
                    <!-- Post Content -->

                    <blockquote class="blockquote">
                        <p class="mb-0">

                            @if(session('lang')=='ar')
                                {{$newes->title_name_ar }}

                            @endif

                            @if(session('lang')=='en')
                                {{$newes->title_name_en }}
                            @endif
                        </p>

                    </blockquote>
                    <p class="lead">

                        @if(session('lang')=='ar')
                            {!! $newes->newes_name_ar !!}

                        @endif

                        @if(session('lang')=='en')
                            {!! $newes->newes_name_en!!}
                        @endif
                    </p>


                    <hr>
                    @if(auth()->check())
                        <div class="blog-right-side">
                            <!-- Comments Form -->
                            <div class="card my-4">
                                <h5 class="card-header">{{__('Leave a Comment')}}</h5>
                                <div class="card-body">
                                    <form method="post" action="{{route("comment.add",$newes->id)}}">
                                        @csrf
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" name="comment"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">{{__("Submit")}}</button>
                                    </form>
                                </div>
                            </div>
                            @foreach($newes->comment as $c)
                                <div class="card">
                                    <h5 class="card-header">

                                        @if($c->user_id == auth()->id())
                                            <a href="{{route('comment.delete',$c->id)}}"
                                               onclick="if(!confirm('Is the form filled out correctly?')){return false;}"
                                               class="btn btn-danger">Delete</a>

                                            <a href="{{route('comment.edit',$c->id)}}"
                                               class="btn btn-primary">Edit</a>
                                        @else
                                            {{__('Comment')}}
                                        @endif
                                    </h5>
                                    <div class="card-body">

                                        @if(!empty($c->user->avatar))
                                            <img class="img-thumbnail" width="50px" height="50px"
                                                 src="{{url('/storage/')."/".$c->user->avatar}}" alt="">
                                        @else
                                            <img class="img-thumbnail" width="50px" height="50px"
                                                 src="//via.placeholder.com/50" alt="">

                                        @endif


                                        <p class="mt-2">{{$c->user->name}}</p>
                                        <b><small><p>{{$c->created_at->diffForHumans()}}</p></small></b>
                                        <i>{{$c->comment}}</i>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                </div>

                <!-- Sidebar Widgets Column -->
                <div class="col-md-4 blog-right-side">

                    
                    <!-- Side Widget -->
                    <div class="card my-4">
                        <h5 class="card-header"> {{trans('admin.mostviewnewes')}}  </h5>
                        <div class="card-body">
                            <ul style="list-style: none;">

                                @foreach($randomNewess as $randomNewes)
                                    <li><a href="{{url('/')}}/blog/{{$randomNewes->id}}">


                                            @if(session('lang')=='ar')
                                                {{$randomNewes->title_name_ar }}

                                            @endif

                                            @if(session('lang')=='en')
                                                {{$randomNewes->title_name_en }}
                                            @endif


                                        </a></li>

                                @endforeach
                            </ul>
                        </div>
                    </div>


                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>

@endsection
