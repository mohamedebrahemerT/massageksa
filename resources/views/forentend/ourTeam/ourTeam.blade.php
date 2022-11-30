 
@extends('forentend.index')

@section('content')
 

<!-- full Title -->
    <div class="full-title">
        <div class="container">
            < Page Heading/Breadcrumbs>
            <h1 class="mt-4 mb-3"> {{trans('admin.ourTeam')}}</h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">{{trans('admin.Home')}}</a>
                    </li>
                    <li class="breadcrumb-item active">  {{trans('admin.ourTeam')}} </li>
                </ol>
            </div>
        </div>
    </div >

    
    <div class="container">
 
        <div class="team-members-box">  
            <h2>{{trans('admin.ourTeam')}}   </h2>
            <div class="row">

  @foreach($ourTeams as  $ourTeam)
            

                <div class="col-lg-6 mb-6">
                     @if(session('lang')=='ar')
{{$ourTeam->name_name_ar }}

@endif

  @if(session('lang')=='en')
{{$ourTeam->name_name_en }}

@endif
                </div>

                 <div class="col-lg-6 mb-6">
                 <img class="img-fluid" src="{{url('/')}}/{{substr($ourTeam->photo, -29) }}" alt="" />
            </div>

                  @endforeach

             
            </div>
            </row>
        </div>


    </div>
    
    
     
@endsection