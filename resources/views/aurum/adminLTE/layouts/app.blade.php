<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('assets/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/skins/_all-skins.min.css') }}">

    <!-- HTML5 Shim and Respond.js') }} IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <li class="dropdown notifications-menu" style="background-color: #f39c12 ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span>Template: </span>

                            <span>
                                {{ Cookie::get('template') }}
                            </span>

                        </a>
                        <ul class="dropdown-menu">
                            @foreach($templates as $template)
                                <li><a href="{{ route('set-admin-template', ['template' => $template->path]) }}">{{ $template->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>



                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span>Language: </span>
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>
                                @if(!App\Http\Middleware\LocaleMiddleware::getLocale())
                                {{ App\Http\Middleware\LocaleMiddleware::$mainLanguage }}
                                @else
                                    {{  App\Http\Middleware\LocaleMiddleware::getLocale()  }}
                                @endif
                            </span>

                        </a>
                        <ul class="dropdown-menu">
                            @foreach(App\Http\Middleware\LocaleMiddleware::loadLanguages() as $language)
                                <li><a href="{{ route('setlocale', ['lang' => $language->slug]) }}" style="text-transform: capitalize">{{ $language->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>


                    <!-- Notifications: style can be found in dropdown.less -->


                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                            <span class="hidden-xs">Alexander Pierce</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Alexander Pierce</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="{{ route('pages') }}">
                        <i class="fa fa-dashboard"></i> <span>Страницы</span>
                    </a>
                </li>
                <li><a href="{{ route('languages') }}"><i class="fa fa-globe" aria-hidden="true"></i> <span>Языки</span></a></li>
                <li><a href="#"><i class="fa fa-list-ul"></i> <span>Категории</span></a></li>
                <li><a href="#"><i class="fa fa-tags"></i> <span>Теги</span></a></li>
                <li>
                    <a href="#">
                        <i class="fa fa-commenting"></i> <span>Комментарии</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-green">5</small>
            </span>
                    </a>
                </li>
                <li><a href="#"><i class="fa fa-users"></i> <span>Пользователи</span></a></li>
                <li><a href="#"><i class="fa fa-user-plus"></i> <span>Подписчики</span></a></li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->
    <div class="content-wrapper">

    @yield('content')
    </div>

    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <script src="{{ asset('assets/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/plugins/fastclick/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/app.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
</body>

<!-- Mirrored from almsaeedstudio.com/themes/AdminLTE/pages/examples/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Dec 2016 15:13:35 GMT -->
</html>
