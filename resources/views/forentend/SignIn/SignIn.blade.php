  
@extends('forentend.index')

@section('content')
 
  <!-- full Title -->
  <div class="full-title">
    <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3"> {{trans('admin.Pictures')}} </h1>
      <div class="breadcrumb-main">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">{{trans('admin.Home')}}</a>
          </li>
          <li class="breadcrumb-item active">{{trans('admin.Pictures')}}</li>
        </ol>
      </div>
    </div>
  </div>
 <div class="container">
             <a href="{{url('/')}}" class="btn btn-primary">{{trans('admin.back')}}</a>
    </div>
    
  <div class="container">
        <!-- Portfolio Section -->
        <div class="portfolio-main">
            <h2>{{trans('admin.Pictures')}}</h2>
      <div class="col-lg-12">
        <div class="project-menu text-center">
         
         
        </div>
      </div>
            <div id="projects" class="projects-main row">
               
              @foreach($filess as $file )
               <div class="col-lg-4 col-sm-6 pro-item portfolio-item financial">
                  <div class="card h-100">
                     <div class="card-img">
                  <a href="{{Storage::url($file->full_file)}}" data-fancybox="images">
                           <img class="card-img-top" src="{{Storage::url($file->full_file)}}" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">
                              @if(session('lang')=='ar')
    {{settings()->namear}}
    @endif
    @if(session('lang')=='en')
    {{settings()->nameaen}}
    @endif
                           </a>
                        </h4>
                     </div>
                  </div>
               </div>
               @endforeach
             
             
               
            </div>
            <!-- /.row -->
        </div>
    </div
 
@endsection