<!DOCTYPE html>

<html>

<head>


    <!-- .......................................................................... -->


    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ trans('admin.Dashboard') }}</title>

    <!-- Tell the browser to be responsive to screen width -->

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->


    <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/jstree/dist/themes/default/style.min.css">


    <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/bower_components/Ionicons/css/ionicons.min.css">

    <!-- DataTables -->

    <link rel="stylesheet"
          href="{{url('/')}}/Desgin/Adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">


    <!-- Morris chart -->

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


    <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/bower_components/font-awesome/css/font-awesome.min.css">


    <!-- Ionicons -->


    <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/bower_components/Ionicons/css/ionicons.min.css">


    <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/dist/css/select2.min.css">


    <!-- Theme style -->


    @if(dirction() =='ltr')

        <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/dist/css/AdminLTE.min.css">

    @else

        <link rel="stylesheet"

              href="{{url('/')}}/Desgin/Adminlte/dist/css/rtl/AdminLTE.css">



        <link rel="stylesheet"

              href="{{url('/')}}/Desgin/Adminlte/dist/css/rtl/AdminLTE.min.css">





        <link rel="stylesheet"

              href="{{url('/')}}/Desgin/Adminlte/dist/css/rtl/bootstrap-rtl.min.css">



        <link rel="stylesheet"

              href="{{url('/')}}/Desgin/Adminlte/dist/css/rtl/rtl.css">



        <link rel="stylesheet"

              href="{{url('/')}}/Desgin/Adminlte/dist/css/rtl/profile.css">

        <link href="{{url('/')}}/Desgin/Adminlte/dist/css/rtl/cairo.css" rel="stylesheet">



        <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/dist/css/bootstrap-datepicker.css">



        <script src="{{url('/')}}/Desgin/ckeditor/ckeditor/ckeditor/ckeditor.js"></script>











        <style type="text/css">

            html, body {

                font-family: 'Cairo', sans-serif;

            }
.mySlides {display:none;}
        </style>





@endif







<!-- AdminLTE Skins. Choose a skin from the css/skins

       folder instead of downloading all of them to reduce the load. -->

    <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/dist/css/skins/_all-skins.min.css">

        <script src="{{url('/')}}/Desgin/ckeditor/ckeditor/ckeditor/ckeditor.js"></script>

</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">


    <header class="main-header">

        <!-- Logo -->

        <a href="{{url('/')}}/admin" class="logo">

            <!-- mini logo for sidebar mini 50x50 pixels -->

            <span class="logo-mini"><b>A</b>LT</span>

            <!-- logo for regular state and mobile devices -->

            <span class="logo-lg"><b>{{ trans('admin.admin') }}</span>

        </a>

        <!-- Header Navbar: style can be found in header.less -->

        <nav class="navbar navbar-static-top">

            <!-- Sidebar toggle button-->

            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">

                <span class="sr-only">Toggle navigation</span>

            </a>


            @include('Admin.layouts.menue');


        </nav>

    </header>

    <!-- Left side column. contains the logo and sidebar -->

    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->

        <section class="sidebar">

            <!-- Sidebar user panel -->

            <div class="user-panel">

                <div class="pull-left image">

                    @if(auth()->guard('admin')->user()->photo)

                        {{--<img src="{{Storage::url(auth()->guard('admin')->user()->photo)}}" class="img-circle"
                             alt="User Image" width="30px" height="30px">--}}

                    @endif



                    @if(!auth()->guard('admin')->user()->photo)

                        {{--<img src="{{url('/')}}/Desgin/Adminlte/dist/img/user3-128x128.jpg" class="img-circle"
                             alt="User Image">--}}

                    @endif
                        <img src="//via.placeholder.com/30" class="img-circle"
                             alt="User Image">

                </div>

                <div class="pull-left info">


                    <p> {{ auth()->guard('admin')->user()->name }} </p>


                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('admin.online') }}</a>

                </div>

            </div>


            <!-- search form -->

            <form action="#" method="get" class="sidebar-form">

                <div class="input-group">

                    <input type="text" name="q" class="form-control" placeholder="{{ trans('admin.search') }}">

                    <span class="input-group-btn">

                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>

                </button>

              </span>

                </div>

            </form>

            <!-- /.search form -->

            <!-- sidebar menu: : style can be found in sidebar.less -->

            <ul class="sidebar-menu" data-widget="tree">


                <!--li class=""><a href="{{ url('admin') }}">

                        <i class="fa fa-cog"></i> <span>{{ trans('admin.Dashboard') }}</span>

                        <span class="pull-right-container">

            </span>

                    </a>

                </li -->

                <li class=""><a href="{{ url('admin/settings') }}">

                        <i class="fa fa-cog"></i> <span>{{ trans('admin.settings') }}</span>

                        <span class="pull-right-container">

          </span>

                    </a>

                </li>


                <li class=""><a href="{{ url('admin/Sendcontact') }}">

                        <i class="fa fa-phone"></i> <span>{{ trans('admin.Resivecontact') }}</span>

                        <span class="pull-right-container">

          </span>

                    </a>

                </li>


                <li class="treeview {{ active_menu('about')[0] }}">

                    <a href="#">

                        <i class="fa fa-product-hunt"></i> <span>{{ trans('admin.about') }}</span>

                        <span class="pull-right-container">



      </span>

                    </a>

                    <ul class="treeview-menu" style="{{ active_menu('about')[1] }}">
                        <li class=""><a href="{{ url('admin/WhoWeAre') }}"><i
                                        class="fa fa-flag"></i> {{ trans('admin.WhoWeAre') }}</a></li>
                        <li class=""><a href="{{ url('admin/VisionMission') }}"><i
                                        class="fa fa-eye"></i> {{ trans('admin.VisionMission') }}</a></li>
                        <li class=""><a href="{{ url('admin/ourTeam') }}"><i
                                        class="fa fa-flag"></i> {{ trans('admin.ourTeam') }}</a></li>


                    </ul>

                </li>

              


                <li class="treeview {{ active_menu('departments')[0] }}">

                    <a href="#">

                        <i class="fa fa-list"></i> <span>{{ trans('admin.departmentsproduct') }}</span>

                        <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

                    </a>

                    <ul class="treeview-menu" style="{{ active_menu('departments')[1] }}">

                        <li class=""><a href="{{ url('admin/departments') }}"><i
                                        class="fa fa-list"></i> {{ trans('admin.departments') }}</a></li>
                        <!--li class=""><a href="{{ url('admin/productes') }}"><i
                                        class="fa fa-product-hunt"></i> {{ trans('admin.product') }}</a></li -->


                    </ul>

                </li>


                <!--li class=""><a href="{{ url('admin/Objectives') }}"><i
                                class="fa fa-eye"></i> {{ trans('admin.Objectives55') }}</a></li>

                <li class=""><a href="{{ url('admin/Ourworks') }}"><i class="fa fa-hand-o-right"
                                                                      aria-hidden="true"></i>{{ trans('admin.Ourworks') }}
                    </a></li -->

                <!--li class=""><a href="{{ url('admin/newes') }}"><i
                                class="fa fa-address-book-o"></i> {{ trans('admin.newes') }}</a></li-->


                <li class=""><a href="{{ url('admin/admins') }}"><i class="fa fa-users"></i> {{ trans('admin.admin') }}
                    </a></li>

                <!--li class=""><a href="{{ url('admin/users') }}"><i class="fa fa-users"></i> {{ trans('admin.users') }}
                    </a></li -->


            <li class=""><a href="{{ url('admin/Maincategories') }}"><i
                                class="fa fa-eye"></i> {{ trans('admin.sliders') }}</a></li>

        </section>

        <!-- /.sidebar -->

    </aside>



