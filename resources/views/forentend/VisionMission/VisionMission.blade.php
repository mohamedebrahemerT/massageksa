@extends('forentend.index')

@section('content')
  
   

    <img src="{{url('/')}}/visionmissiion.png" class="img-fluid">


    <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{url('/')}}">{{trans('admin.Home')}}</a>
                    </li>
                    <li class="breadcrumb-item active">  {{trans('admin.VisionMission')}} </li>
                </ol>
            </div >

 
 
    
 
   <!-- <div class="container">
        <a href="{{url('/')}}" class="btn btn-primary">{{trans('admin.back')}}</a>
    </div> -->


                            @if(session('lang')=='ar')

    <div class="about-inner "  style="direction: rtl;">
                            @endif

                              @if(session('lang')=='en')

    <div class="about-inner" >
                            @endif

        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-6">
                    <div class="left-ab">
                        <h3 style="color:#196772">

                            @if(session('lang')=='ar')
                                {{$Vision->title_name_ar }}

                            @endif

                            @if(session('lang')=='en')
                                {{$Vision->title_name_en }}

                            @endif


                        </h3>
                        <p>

                            @if(session('lang')=='ar')
                                  {!! $Vision->VisionMission_name_ar !!}

                            @endif

                            @if(session('lang')=='en')
                                {!! $Vision->VisionMission_name_en !!}

                            @endif
                        </p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-ab">
                        <img class="img-fluid rounded mb-4" src="{{url('/')}}/{{substr($Vision->photo, -29) }}" alt=""/>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!------------------------------------------->

  @if(session('lang')=='ar')

    <div class="about-inner "  style="direction: rtl;">
                            @endif

                              @if(session('lang')=='en')

    <div class="about-inner" >
                            @endif
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-6">
                    <div class="left-ab">
                        <h3 style="color:#196772">

                            @if(session('lang')=='ar')
                                {{$Mission->title_name_ar }}

                            @endif

                            @if(session('lang')=='en')
                                {{$Mission->title_name_en }}

                            @endif


                        </h3>
                        <p>

                            @if(session('lang')=='ar')
                                {!! $Mission->VisionMission_name_ar !!}

                            @endif

                            @if(session('lang')=='en')
                                {!! $Mission->VisionMission_name_en !!}

                            @endif
                        </p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-ab">
                        <img class="img-fluid rounded mb-4" src="{{url('/')}}/{{substr($Mission->photo, -29) }}"
                             alt=""/>
                    </div>
                </div>
            </div>

        </div>
    </div>




@endsection