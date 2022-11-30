  <div id="home" class="tab-pane fade in active">
      <h3>{{trans('admin.product_info')}}</h3>

                 
                


        <div class="form-group col-sm-6 col-lg-6 col-md-6">
            {!! Form::label('title_name_ar',trans('admin.title_name_ar')) !!}
            {!! Form::text('title_name_ar',$productes->title_name_ar,['class'=>'form-control']) !!}
        </div>

         <div class="form-group col-sm-6 col-lg-6 col-md-6">
            {!! Form::label('title_name_en',trans('admin.title_name_en')) !!}
            {!! Form::text('title_name_en',$productes->title_name_en,['class'=>'form-control']) !!}
        </div>

             <div class="form-group col-sm-6 col-lg-6 col-md-6">
            {!! Form::label('content_name_ar',trans('admin.content_name_ar')) !!}
            {!! Form::textarea('content_name_ar',$productes->content_name_ar,['class'=>'form-control']) !!}
        </div>


           
        
             <div class="form-group col-sm-6 col-lg-6 col-md-6">
            {!! Form::label('content_name_en',trans('admin.content_name_en')) !!}
            {!! Form::textarea('content_name_en',$productes->content_name_en,['class'=>'form-control']) !!}
        </div>
      
         <div class="form-group col-md-6 col-lg-6 col-sm-6">
            {!! Form::label('price',trans('admin.price')) !!}
            {!! Form::text('price',$productes->price,['class'=>'form-control']) !!}
        </div>
      
       
         <div class="form-group  reason {{$productes->status !='refused'?'hidden':'' }}">
            {!! Form::label('reason',trans('admin.reason')) !!}
            {!! Form::textarea('reason',$productes->reason,['class'=>'form-control']) !!}
        </div>
         

    
      
    </div>

                   
 
            
 

       