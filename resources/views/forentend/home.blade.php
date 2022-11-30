@extends('forentend.layouts.master')
@section('content')
@if ($errors->has('g-recaptcha-response'))
    <span class="help-block">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </span>
@endif

 


@section('javascript')
 

        <script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyAGlTpZIZ49RVV5VX8KhzafRqjzaTRbnn0&language={{session("lang")}}'></script>

  <script src="{{url('/')}}/assets/layouts/layout/scripts/locationpicker.jquery.js" type="text/javascript"></script>

<?php
    $lat = !empty(settings()->lat) ? settings()->lat : '24.7135517';
    $lng = !empty(settings()->lng) ? settings()->lng : '46.6752957';

?>
 <script>
  $('#us1').locationpicker({
      location: {
          latitude: {{ $lat }},
          longitude:{{ $lng }}
      },
      radius: 200,
      markerIcon:   "{{url('/')}}/assets/images/marker.png",
       
      inputBinding: {
        latitudeInput: $('#lat'),
        longitudeInput: $('#lng'),
       radiusInput: $('#us1'),
        locationNameInput: $('#address')
      },
      enableAutocomplete: true

  });
 </script>
@endsection
<br>
<br>
 @if(session('success'))
   <div class="alert alert-success " style="text-align: center;">
   {{session('success')}}

     </div>
   @endif

          @if(session('danger'))
   <div class="alert alert-danger " style="text-align: center;">
   {{session('danger')}}

     </div>
   @endif


   
                    @if ($errors->any())
    <div class="alert alert-danger" style="text-align: center;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 <!-- Banner Area -->
    <div id="banner" class="banner">
        <div class="banner-item banner-1 steller-parallax" data-stellar-background-ratio="0.5">
            <div class="banner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="banner-text-content">
                                <h1 class="banner-title"> {{  settings()->namear  }}</h1>
                                <p class="banner-text">@if(session('lang')=='ar')
                             {!! $WhoWeAre->WhoWeAre_name_ar !!}

                        @endif

                        @if(session('lang')=='en')
                            {!! $WhoWeAre->WhoWeAre_name_en !!}

                        @endif
                                </p>
                                <div class="button-group">
                                    <a    href="#feature"   class="btn btn-lg btn-download">
                                        <i class="fa fa-apple"></i> {{__('trans.features')}}</a>


                                    <a    class="btn btn-lg btn-download" href="#contact"  >
                                        <i class="fa fa-android"></i> {{__('trans.contact')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 hidden-sm hidden-xs">
                            <div class="mock right-style">
                                
                                <img class="front-mock wow fadeInUp" data-wow-duration="1.5s"
                                     src="{{'landing'}}/images/mocks/1.png" alt="mock front">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
  

    <div class="main-wrap">
        <!-- Extra Features -->
        <div id="description" class="section section-padding more-feature-section" style="padding: 10px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-3 col-sm-4 text-center">
                        <div class="mock">
                             

                            <img class="front-mock wow fadeInUp" data-wow-duration="1.5s"
                                 src="{{url('/')}}/{{settings()->siteflag }}" alt="mock front" style="width:200;height: 300px;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-2 col-sm-6 col-sm-offset-2">
                        <div class="section-header style-2">
                            <h2 class="section-title">  {{  settings()->namear  }}</h2>
                            <p class="section-subtext">{{  settings()->namear  }}</p>
                        </div>
                         @if(session('lang')=='ar')
                             {!! $WhoWeAre->WhoWeAre_name_ar !!}

                        @endif

                        @if(session('lang')=='en')
                            {!! $WhoWeAre->WhoWeAre_name_en !!}

                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Features -->
        <div id="feature" class="section section-padding offwhite-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-xs-12">
                        <div class="section-header text-center">
                            <h3 class="section-title">{{__('trans.feature1')}}</h3>
                            <p class="section-subtext">
                                @if(session('lang')=='ar')
                                  {!! $Vision->VisionMission_name_ar !!}

                            @endif

                            @if(session('lang')=='en')
                                {!! $Vision->VisionMission_name_en !!}

                            @endif</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">

           @foreach($departments1 as $department)
                       
                        <div class="feature wow fadeInUp" data-wow-duration="1.5s">
                            <div class="feature-icon">
                               {!! $department->indecator !!}
                            </div>
                            <div class="feature-content">
                                 <p>   @if(session('lang')=='ar')
{{$department->dep_name_ar }}

@endif

  @if(session('lang')=='en')
{{$department->dep_name_en }}

@endif 
                                </p>
                                 
                            </div>
                        </div>
           @endforeach
                        
                         
                    </div>
                    <div class="col-sm-4 text-center hidden-sm hidden-xs">
                        <div class="mock wow fadeInUp" data-wow-duration="1.5s">
                            <img class="img-responsive"
                                                                                     src="{{'landing'}}/images/mocks/1.png" alt="...">

                                                                                 </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
           @foreach($departments2 as $department)

                        <div class="feature wow fadeInUp" data-wow-duration="1.5s">
                            <div class="feature-icon">
                               {!! $department->indecator !!}
                            </div>
                            <div class="feature-content">
                                
                                <p>   @if(session('lang')=='ar')
{{$department->dep_name_ar }}

@endif

  @if(session('lang')=='en')
{{$department->dep_name_en }}

@endif 
                                </p>
                            </div>
                        </div>
           @endforeach
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


        <!-- Extra Features End -->



        <!--------------- Screenshot --------------->
        <div id="screenshot" class="section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-xs-12">
                        <div class="section-header text-center">
                            <h2 class="section-title">{{__('trans.screenshot1')}}</h2>
                            <p class="section-subtext">
                             @if(session('lang')=='ar')
                                {!! $Mission->VisionMission_name_ar !!}

                            @endif

                            @if(session('lang')=='en')
                                {!! $Mission->VisionMission_name_en !!}

                            @endif
                        </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="screen-mock"></div>
                        <div class="screenshot-wrap">
                            <div class="owl-carousel screenshot-carousel" id="screenshot-carousel">
@foreach(App\Maincategories::get() as $key => $Slider)

                                <img src="{{url('/')}}/{{$Slider->photo}}"  style="height: 300px;">
                                
                        @endforeach
                                  
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Screenshot end -->
      

        

        <!-- Contact area -->
        <div id="contact" class="section section-padding ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-xs-12">
                        <div class="section-header text-center wow fadeInDown" data-wow-duration="1.5s">
                            <h3 class="section-title">{{__('trans.contact1')}}</h3>
                            <p class="section-subtext">{{__('trans.contact2')}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
 

                    <div class="col-md-6 col-xs-12">
                        <form id="contactForm" class="contact-form" 
                       action="{{url('/')}}/Sendcontact" method="post">
                            @csrf
                            <p>
                                <input id="name" type="text" name="name" placeholder="{{__('trans.contact3')}}" required>
                            </p>
                            <p>
                                <input id="phone" type="text" name="phone" placeholder="{{__('trans.phone')}}" required>
                            </p>
                            
                            <p>
                                <textarea id="message" name="message" placeholder="{{__('trans.contact6')}}" rows="5"
                                          required></textarea>
                            </p>
                         
                            <button type="submit" class="btn"><i class="fa fa-paper-plane"></i> {{__('trans.contact7')}}</button>
                        </form>
                    </div>

                    <div class="col-md-6 col-xs-12 box">
                        <div class="first-box">
                            <h1><span class="fa fa-phone"></span></h1>
                            <h3>{{__('trans.contact8')}}</h3>
                            <p>{{settings()->phone}}</p>
                        </div>
                        <div class="econd-box">
                            <h1><span class="fa fa-map-marker"></span></h1>
                            <h3>{{__('trans.contact9')}}</h3>
                            <p>{{settings()->address}}</p>
                        </div>
                        <div class="third-box">
                            <h1><span class="fa fa-envelope"></span></h1>
                            <h3>{{__('trans.contact10')}}</h3>
                            <p>{{settings()->email}}</p>
                        </div>
                        <div class="fourth-box">
                            <h1><span class="fa fa-whatsapp"></span></h1>
                            <h3>{{__('trans.contact11')}}</h3>
                            <p><a href="http://wa.me//+{{settings()->phone}}">{{settings()->phone}}</a></p>
                        </div>
                    </div>
                </div>


            </div>
<br>
            <div class="container">
                  <div class="map-main">
       
        <!-- Embedded Google Map -->
        <iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="{{settings()->mapLink}}"></iframe>
    </div>
            </div>


        </div>
        <!-- Contact area end -->
    </div>
          

                               
@endsection
