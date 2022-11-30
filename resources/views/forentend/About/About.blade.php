@extends('forentend.index')

@section('content')
 

    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <Page Heading/Breadcrumbs >
            <h1 class="mt-4 mb-3"> {{trans('admin.About')}}</h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{url('/')}}">{{trans('admin.Home')}}</a>
                    </li>
                    <li class="breadcrumb-item active">  {{trans('admin.About')}} </li>
                </ol>
            </div>
        </div>

    </div>

    <div class="container">
        <!-- About Content -->
        <div class="about-main">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid rounded mb-4" src="{{url('/')}}/{{substr($WhoWeAre->photo, -29) }}" alt=""/>
                </div>
                <div class="col-lg-6">
                    <h2>

                        @if(session('lang')=='ar')
                            {{$WhoWeAre->title_name_ar }}

                        @endif

                        @if(session('lang')=='en')
                            {{$WhoWeAre->title_name_en }}

                        @endif
                    </h2>
                    <p>

                        @if(session('lang')=='ar')
                             {!! $WhoWeAre->WhoWeAre_name_ar !!}

                        @endif

                        @if(session('lang')=='en')
                            {!! $WhoWeAre->WhoWeAre_name_en !!}

                        @endif
                    </p>

                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>





@endsection