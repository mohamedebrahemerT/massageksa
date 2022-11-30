<div class="navbar-custom-menu">

    <ul class="nav navbar-nav">

        <!-- Messages: style can be found in dropdown.less-->


        <!-- User Account: style can be found in dropdown.less -->

        <li class="dropdown user user-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">


                {{--@if(auth()->guard('admin')->user()->photo)

                    <img src="{{url('/')}}/forentend/logo.jpg" class="img-circle" alt="User Image" width="30px"
                         height="30px">

                @endif



                @if(!auth()->guard('admin')->user()->photo)

                    <img src="{{url('/')}}/forentend/logo.jpg" class="img-circle" alt="User Image" width="30px"
                         height="30px">

                @endif--}}


                <span class="hidden-xs">{{ auth()->guard('admin')->user()->name }}</span>


            </a>

            <ul class="dropdown-menu">

                <!-- User image -->

                <li class="user-header">

                    @if(auth()->guard('admin')->user()->photo)

                        <img src="{{url('/')}}/forentend/logo.jpg" class="img-circle" alt="User Image" width="30px"
                             height="30px">

                    @endif



                    @if(!auth()->guard('admin')->user()->photo)

                        <img src="{{url('/')}}/forentend/logo.jpg" class="img-circle" alt="User Image">

                    @endif


                    <p>

                        {{ auth()->guard('admin')->user()->name }} - website admin

                        <small>Member since {{ auth()->guard('admin')->user()->created_at }} </small>

                    </p>

                </li>


                <!-- Menu Footer-->

                <li class="user-footer">

                    <div class="pull-left">

                        <a href="{{url('admin/admins/'. auth()->guard('admin')->user()->id.'/edit')}}"
                           class="btn btn-default btn-flat">Profile</a>

                    </div>

                    <div class="pull-right">

                        <a href="Admin_logout" class="btn btn-default btn-flat">Sign out</a>

                    </div>

                </li>

            </ul>

        </li>

        <!-- Control Sidebar Toggle Button -->


        <!-- User Account: style can be found in dropdown.less -->

        <li class="dropdown user user-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">


                <span class="hidden-xs">language </span>

            </a>

            <ul class="dropdown-menu">

                <!-- User image -->


                <!-- Menu Body -->

                <li class="user-body">


                    <a href="{{url('admin/lang/en')}}" class="fa fa-flag"> english</a>


                </li>


                

            </ul>


        </li>


    </ul>

</div>
