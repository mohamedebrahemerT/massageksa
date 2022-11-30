

@extends('Admin.index')

@section('content')



       @push('js')

              <script type="text/javascript">

                $(document).ready(function() {

        $('.mall_select2').select2();

});

              </script>

              @endpush

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

   



    <!-- Main content -->

    <section class="content">

      <!-- Small boxes (Stat box) -->

      <div class="row">

        

        <!-- ./col -->
 

                <img src="{{url('/')}}/forentend/Artboard 3-8.png" style="margin-top: -27%;
margin-right: -32%;
">

                  
                </div>

                <!-- /.col -->

              </div>

              <!-- /.row -->

            </div>

          </div>

          <!-- /.box -->



        </section>

        <!-- right col -->

      </div>

      <!-- /.row (main row) -->



      @include('Admin.layouts.message');





    </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->



  @endsection

  