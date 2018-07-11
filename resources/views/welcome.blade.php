<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Smart Agriculture</title>

        <!-- Icon-->
        <link rel="shortcut icon" href="{{ asset('images/smart_agriculture.png') }}">

        <!-- Favicon-->
        <link rel="icon" href="{{ URL::to('favicon.ico') }}" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="{{URL::to('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="{{URL::to('plugins/node-waves/waves.css') }}" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="{{URL::to('plugins/animate-css/animate.css') }}" rel="stylesheet" />

        <!-- Light Gallery Plugin Css -->
        <link href="{{URL::to('plugins/light-gallery/css/lightgallery.css') }}" rel="stylesheet">

        <!-- Custom Css -->
        <link href="{{URL::to('css/style.css') }}" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="{{URL::to('css/themes/all-themes.css') }}" rel="stylesheet" />
    </head>

    <body class="theme-red">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->

        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->

        <!-- Search Bar -->
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="START TYPING...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>
        <!-- #END# Search Bar -->

        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="#" class="bars"></a>
                    <a class="navbar-brand" href="{{ route('home') }}">Smart Agriculture</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Call Search -->
                        <li><a href="#" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                        <!-- #END# Call Search -->
                        <!-- Notifications -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="material-icons">notifications</i>
                                <span class="label-count">7</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">NOTIFICATIONS</li>
                                <li class="body">
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <div class="icon-circle bg-light-green">
                                                    <i class="material-icons">person_add</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>12 new members joined</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 14 mins ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-cyan">
                                                    <i class="material-icons">add_shopping_cart</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>4 sales made</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 22 mins ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-red">
                                                    <i class="material-icons">delete_forever</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>Nancy Doe</b> deleted account</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 3 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-orange">
                                                    <i class="material-icons">mode_edit</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>Nancy</b> changed name</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 2 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-blue-grey">
                                                    <i class="material-icons">comment</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>John</b> commented your post</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 4 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-light-green">
                                                    <i class="material-icons">cached</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>John</b> updated status</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 3 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-purple">
                                                    <i class="material-icons">settings</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>Settings updated</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> Yesterday
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View All Notifications</a>
                                </li>
                            </ul>
                        </li>
                        <!-- #END# Notifications -->
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>DASHBOARD</h2>
                </div>
                <!-- Widgets -->
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-pink hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">playlist_add_check</i>
                            </div>
                            <div class="content">
                                <div class="text">NEW TASKS</div>
                                <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-cyan hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">help</i>
                            </div>
                            <div class="content">
                                <div class="text">NEW TICKETS</div>
                                <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-light-green hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">forum</i>
                            </div>
                            <div class="content">
                                <div class="text">NEW COMMENTS</div>
                                <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-orange hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">person_add</i>
                            </div>
                            <div class="content">
                                <div class="text">NEW VISITORS</div>
                                <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Widgets -->

                <!-- Image Gallery -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    ALL AGRICULTURE PRODUCTS
                                    
                                </h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/1.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-1.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/2.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-2.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/3.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-3.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/4.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-4.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/5.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-5.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/6.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-6.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/7.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-7.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/8.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-8.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/9.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-9.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/10.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-10.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/11.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-11.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/12.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-12.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/13.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-13.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/14.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-14.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/15.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-15.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/16.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-16.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/17.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-17.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/18.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-18.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/19.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-19.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{URL::to('images/image-gallery/20.jpg') }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{URL::to('images/image-gallery/thumb/thumb-20.jpg') }}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <!-- Left Sidebar -->
                <aside id="leftsidebar" class="sidebar">
                    <!-- User Info -->
                    <div class="user-info">
                        <div class="image">
                            <img src="images/user.png" width="48" height="48" alt="User" />
                        </div>
                        <div class="info-container">
                            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                            <div class="email">{{ Auth::user()->email }}</div>
                            <div class="btn-group user-helper-dropdown">
                                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="material-icons">person</i>Profile</a></li>
                                    <li role="seperator" class="divider"></li>
                                    <li><a href="#"><i class="material-icons">group</i>Followers</a></li>
                                    <li><a href="#"><i class="material-icons">shopping_cart</i>Sales</a></li>
                                    <li><a href="#"><i class="material-icons">favorite</i>Likes</a></li>
                                    <li role="seperator" class="divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            <i class="material-icons">input</i>Sign Out
                                        </a>
                                        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- #User Info -->

                    <!-- Menu -->
                    <div class="menu">
                        <ul class="list">
                           
                            <li class="active">
                                <a href="{{route('home')}}">
                                    <i class="material-icons">insert_invitation</i>
                                    <span>Product Management</span>
                                </a>
                            </li>
                           
                            <li>
                                <a href="{{ route('monitor') }}">
                                    <i class="material-icons">desktop_mac</i>
                                    <span>Product Monitoring</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('analytic') }}">
                                    <i class="material-icons">insert_chart</i>
                                    <span>Analytics</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('ecosystem') }}">
                                    <i class="material-icons">widgets</i>
                                    <span>Ecosystem</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="material-icons">swap_calls</i>
                                    <span>Resource</span>
                                </a>
                            </li>
                            <li>
                             
                        </ul>
                    </div>
                    <!-- #Menu -->

                    <!-- Footer -->
                    <div class="legal">
                        <div class="copyright">
                            &copy; 2018 - 2019 <a href="{{ route('monitor') }}">Smart Agriculture</a>.
                        </div>
                        <div class="version">
                            <b>Version: </b> 1.0.0
                        </div>
                    </div>
                    <!-- #Footer -->
                </aside>
                <!-- #END# Left Sidebar -->  
        </section>

       

        <!-- Jquery Core Js -->
        <script src="{{URL::to('plugins/jquery/jquery.min.js') }}"></script>

        <!-- Bootstrap Core Js -->
        <script src="{{URL::to('plugins/bootstrap/js/bootstrap.js') }}"></script>

        <!-- Select Plugin Js -->
        <script src="{{URL::to('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="{{URL::to('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="{{URL::to('plugins/node-waves/waves.js') }}"></script>

        <!-- Light Gallery Plugin Js -->
        <script src="{{URL::to('plugins/light-gallery/js/lightgallery-all.js') }}"></script>

        <!-- Custom Js -->
        <script src="{{URL::to('js/pages/medias/image-gallery.js') }}"></script>
        <script src="{{URL::to('js/admin.js') }}"></script>

        <!-- Demo Js -->
        <script src="{{URL::to('js/demo.js') }}"></script>
    </body>

</html>