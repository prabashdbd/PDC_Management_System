
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PDC Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  {{-- <link rel="stylesheet" type="text/css" href="/bower_components/bootstrap/dist/css/bootstrap.min.css"> --}}
  <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" type="text/css" href="/bower_components/Ionicons/css/ionicons.min.css">
  
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Theme style -->
  <link rel="stylesheet"  type="text/css" href="/dist/css/AdminLTE.min.css">
  @yield('styles')
  @yield('styles1')
  



  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" type="text/css" href="/dist/css/skins/skin-blue.css">

  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- --js-- -->
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
  <?PHP 
    $isStudent = Auth::user()->isStudent();
    $isCompany = Auth::user()->isCompany();
    $isAdmin = Auth::user()->isAdmin();
  ?>
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href={{url('/adminlte')}} class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">PDC</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">PDC@UCSC</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <img style="height: 50px""  src="/Images/logo.png">
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          {{-- <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li> --}}
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              @if($isStudent)
              <span class="hidden-xs">Student</span>
              @endif
              @if($isCompany)
              <span class="hidden-xs">Company</span>
              @endif
              @if($isAdmin)
              <span class="hidden-xs">Admin</span>
              @endif
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                {{-- @if($isStudent || $image!=null)
                <img src="{{$image}}" class="img-circle" alt="User Image">
                @else
                <img src="#" class="img-circle" alt="User Image">
                @endif
                @if($isCompany)
                <img src="{{Auth::user()->student->imgfile->img_path}}" class="user-image" alt="User Image">
                @endif
                @if($isAdmin)
                <img src="{{Auth::user()->student->imgfile->img_path}}" class="user-image" alt="User Image">
                @endif --}}

                <p>
                  @if($isStudent)
                  <p>{{Auth::user()->student->getName()}}</p>
                  @endif
                  @if($isCompany)
                  <p>{{Auth::user()->company_detail->getName()}}</p>
                  @endif
                  {{--@if($isAdmin)
                  <p>{{Auth::user()->student->getName()}}</p>
                  @endif --}}
                  
                  @if($isStudent)
                  <small><p style="color:white">{{Auth::user()->student->getIndex()}}</p></small>
                  @endif
                  @if($isCompany)
                  <small><p style="color:white">{{Auth::user()->company_detail->getWeb()}}</p></small>
                  @endif
                  {{--@if($isAdmin)
                  <small>User</small>getIndex()
                  @endif --}}
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                @if($isStudent || $isCompany)
                <div class="pull-left">
                  @if($isStudent)
                  <a href="{{url('/student/profile')}}" class="btn btn-default btn-flat">Profile</a>
                  @endif
                  @if($isCompany)
                  <a href="{{url('/company/profile')}}" class="btn btn-default btn-flat">Profile</a>
                  @endif
                </div>
                @endif
                <div class="pull-right">
                  <a href="{{url('/user/logout')}}  " class="btn btn-default btn-flat">Log Out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel" style="height:70px">
        {{-- <div class="pull-left image">
          @if($isStudent || $image!=null)
          <img src="{{$image}}" class="img-circle" alt="User Image">
          @else
          <img src="#" class="img-circle" alt="User Image">
          @endif
          @if($isCompany)
          <img src="" class="img-circle" alt="User Image">
          @endif
          @if($isAdmin)
          <img src="{{Auth::user()->student->imgfile->img_path}}" class="img-circle" alt="User Image">
          @endif
        </div> --}}
        <div class="pull-left info">
          @if($isStudent)
          <p>{{Auth::user()->student->getName()}}</p>
          @endif
          @if($isCompany)
          <p>{{Auth::user()->company_detail->getName()}}</p>
          @endif
          {{--@if($isAdmin)
          <p>{{Auth::user()->student->getName()}}</p>
          @endif --}}
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><i class="fa fa-home"></i><span>Home</span></li>
        <!-- Optionally, you can add icons to the links -->       

        <li class="treeview
        
        {{
          url()->current() == url('/company/add')||
          url()->current() == url('/company/to_be_approved')||
          url()->current() == url('/company/view')||
          url()->current() == url('/company/adverts/view')||
          url()->current() == url('/company/adverts')?'active':''
        }}
        
        
        
        ">
          <a href="#"><i class="fa fa-building"></i><span>Company</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @if($isAdmin)
            <li class="{{url()->current() == url('/company/add')?'active':''}}"><a href="{{url('/company/add')}}"><i class="fa fa-plus"></i><span>Add new</span></a></li>
            @endif
            @if($isAdmin)
            <li class="{{url()->current() == url('/company/to_be_approved')?'active':''}}"><a href="{{url('/company/to_be_approved')}}"><i class="fa fa-check"></i><span>Approve Request</span></a></li>
            @endif
            <li class="{{url()->current() == url('/company/view')?'active':''}}"><a href="{{url('/company/view')}}"><i class="fa fa-eye"></i><span>View</span></a></li>
            @if($isCompany)
            <li class="{{url()->current() == url('/company/adverts')?'active':''}}"><a href="{{url('/company/adverts')}}"><i class="fa fa-bullhorn"></i><span>Publish Advert</span></a></li>
            @endif
            @if($isAdmin)
            <li class="{{url()->current() == url('/company/adverts/view')?'active':''}}"><a href="{{url('/company/adverts/view')}}"><i class="fa fa-check"></i><span>Approve Advert</span></a></li>
            @endif
          </ul>
        </li>

        <li class="treeview
        
        {{
          url()->current() == url('/students/add')||
          url()->current() == url('/student/placements')||            
          url()->current() == url('/students/view')?'active':''
        }}
        ">
          <a href="#"><i class="fa fa-user"></i><span>Student</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @if($isAdmin)
            <li class="{{url()->current() == url('/students/add')?'active':''}}"><a href="{{url('/students/add')}}"><i class="fa fa-plus"></i><span>Add new</span></a></li> 
            @endif
            @if($isStudent || $isAdmin )
            <li class="{{url()->current() == url('/student/placements')?'active':''}}"><a href="{{url('/student/placements')}}"><i class="fa fa-vcard"></i><span>Placements</span></a></li>            
            @endif
            <li class="{{url()->current() == url('/students/view')?'active':''}}"><a href="{{url('/students/view')}}"><i class="fa fa-eye"></i><span>View</span></a></li>
          </ul>
        </li>


        @if($isAdmin)
        <li class="treeview
        {{
          url()->current() == url('/message/company')||
          url()->current() == url('/message/student')||  
          url()->current() == url('/message/outsider')||          
          url()->current() == url('/message/view')?'active':''
        }}
        ">
          <a href="#"><i class="fa fa-envelope"></i> <span>Messaging</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview
            {{
              url()->current() == url('/message/company')||
              url()->current() == url('/message/student')||                          
              url()->current() == url('/message/outsider')?'active':''
            }}
            ">
                <a href="#"><i class="fa fa-pencil-square"></i> <span>Compose</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
               </a>
              <ul class="treeview-menu">
                <li class="{{url()->current() == url('/message/company')?'active':''}}"><a href="{{url('/message/company')}}">Company</a></li>
                <li class="{{url()->current() == url('/message/student')?'active':''}}"><a href="{{url('/message/student')}}">Student</a></li>
                <li class="{{url()->current() == url('/message/outsider')?'active':''}}"><a href="{{url('/message/outsider')}}">Outsider</a></li>           
              </ul>
            </li>
            <li class="{{url()->current() == url('/message/view')?'active':''}}"><a href="{{url('/message/view')}}"><i class="fa fa-eye"></i><span>View</span></a></li>
            
        </ul>
      </li>
      @endif
      {{-- <li class="treeview">
          <a href="#"><i class="fa fa-key"></i><span>Credentials</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-plus"></i><span>Add</span></a></li>            
            <li><a href="#"><i class="fa fa-refresh"></i><span>Reset</span></a></li>
          </ul>
        </li> --}}

        @if($isAdmin)
        <li class="treeview 
        {{
          // url()->current() == url('/message/company')||
          url()->current() == url('/reports/company')||                      
          url()->current() == url('/reports/student_with')?'active':''
                
        }}
        ">
            <a href="#"><i class="fa fa-file"></i><span>Reports</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
              <ul class="treeview-menu">
                <li class="treeview
                {{
                  // url()->current() == url('/message/company')||
                  url()->current() == url('/reports/company')||            
                  url()->current() == url('/reports/student_with')?'active':''
                }}
                
                ">
                    <a href="#"><i class="fa fa-user"></i> <span>Students</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                   </a>
                  <ul class="treeview-menu">
                    {{-- <li class="{{url()->current() == url('/message/company')?'active':''}}"><a href="{{url('/message/company')}}">Company</a></li>
                    <li class="{{url()->current() == url('/message/student')?'active':''}}"><a href="{{url('/message/student')}}">Student</a></li>
                    <li class="{{url()->current() == url('/message/outsider')?'active':''}}"><a href="{{url('/message/outsider')}}">Outsider</a></li>            --}}
                    <li class="{{url()->current() == url('/reports/student_with')?'active':''}}"><a href="{{url('/reports/student_with')}}">With Placements</a></li>
                    <li><a href="#">Without Placements</a></li>
                  </ul>
                </li>
                <li class="{{url()->current() == url('/reports/company')?'active':''}}"><a href="{{url('/reports/company')}}"><i class="fa fa-building"></i><span>Companies</span></a></li>
            </ul>
        </li>
        @endif

      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    

    <!-- Main content -->
    <section class="content container-fluid">       
      {{-- <p>
          {{Auth::user()?Auth::user()->company_detail->comp_name:''}}
      </p> --}}
      {{-- <p>
          {{Auth::user()?Auth::user()->student->imgfile->img_path:''}}
      </p> --}}
      
      @yield('content')


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      PDC Management System
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">PDC</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->

@yield('script')

</body>
</html>