   <div id="home" class="tab-pane fade in active">
      <h3>{{trans('admin.Sendcontact')}}</h3>

            
 

               <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-check-square	
"></i>
            
              <h3 class="box-title">{{trans('admin.Sendcontact')}}</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm RRR" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">  
                  <div class="form-group"> 
              
                     {{ Form::label('name', trans('admin.name'))  }}
                    {{ Form::text('name',$Sendcontact->name,['class'=>'form-control name'])  }}
                     </div> 

                     <div class="form-group"> 
              
                     {{ Form::label('email', trans('admin.email'))  }}
                    {{ Form::text('email',$Sendcontact->email,['class'=>'form-control email'])  }}
                     </div> 

                     <div class="form-group"> 
              
                     {{ Form::label('phone', trans('admin.phone'))  }}
                    {{ Form::text('phone',$Sendcontact->phone,['class'=>'form-control phone'])  }}
                     </div> 


                    <textarea class="form-group form-control">
                       {{$Sendcontact->message}}

                    </textarea>
           
            </div>
          
          </div>

    </div>
