   @extends('forentend.index')

@section('content')
  
        <!-- Footer -->
 
    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            < Page Heading/Breadcrumbs >
             
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/"> {{trans('admin.Home')}} </a>
                    </li>
                    
                </ol>
            </div>
        </div>
    </div >

    <div class="blog-main">
        <div class="container">
             <h1   style="text-align: center;
font-size: 53px;
padding: 2%;
">

                            @if(session('lang')=='ar')
                {{$department->dep_name_ar}}
                @endif
                @if(session('lang')=='en')
                {{$department->dep_name_en}}
                @endif
      
                        </h1>
            <div class="row">
                <!-- Post Content Column -->
              

  <div class="col-lg-6">
                       @if(session('lang')=='ar')
      
       <p class="lead" style="direction: rtl;"> 
                @endif

                 @if(session('lang')=='en')
      
       <p class="lead"  > 
                @endif

                       @if(session('lang')=='ar')
                {{$department->description}}
                @endif
                @if(session('lang')=='en')
                {{$department->keyword}}
                @endif

</p>
      
                  
      
  </div>

   <div class="col-lg-6">
                    <!-- Preview Image -->

                    
                    
                    <img class="img-fluid rounded" src="{{url('/')}}/{{substr($department->icon, -29) }}"   />
                     
                   
                


                     

                </div>

                

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>

@endsection

 