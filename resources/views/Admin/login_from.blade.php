<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> {{  settings()->namear  }} </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('Desgin/Adminlte')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('Desgin/Adminlte')}}/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('Desgin/Adminlte')}}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('Desgin/Adminlte')}}/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url('Desgin/Adminlte')}}/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;500&display=swap" rel="stylesheet"> 
</head>
<body class="hold-transition login-page" style="    font-family: 'Cairo', sans-serif;text-align: right !important;direction: rtl;">
<div class="login-box">
  <div class="login-logo">
    <a href="{{url('')}}"><b>   {{  settings()->namear  }} </b></a>

  
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
         @if(session('success'))
   <div class="alert alert-success ">
   {{session('success')}}

     </div>
   @endif

          @if(session('danger'))
   <div class="alert alert-danger ">
   {{session('danger')}}

     </div>
   @endif

   
  

    <form action="{{url('admin_form_post')}}" method="post">
      {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="???????????? ????????????????????" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="???????? ????????????" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
         
      
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">????????</button>
 

        </div>
        <!-- /.col -->
      </div>
    </form>



 

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{url('Desgin/Adminlte')}}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('Desgin/Adminlte')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="{{url('Desgin/Adminlte')}}/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
