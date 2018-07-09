<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Smart Agriculture</title>

    <!-- Icon-->
    <link rel="shortcut icon" href="{{ asset('images/smart_agriculture.png') }}">

    <!-- Favicon-->
    <link rel="icon" href="{{URL::to('favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{URL::to('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{URL::to('plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{URL::to('plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{URL::to('css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{URL::to('css/themes/all-themes.css') }}" rel="stylesheet" />
</head>

<body class="theme-red ls-opened">
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
                <a class="navbar-brand" href="{{ route('monitor') }}">Smart Agriculture</a>
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
                        
                    </li>
                    <!-- #END# Notifications -->
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
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
                   
                    <li>
                        <a href="{{route('home')}}">
                            <i class="material-icons">insert_invitation</i>
                            <span>Product Management</span>
                        </a>
                    </li>
                   
                    <li class="active">
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

    <!-- Custom Js -->
    <script src="{{URL::to('js/admin.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{URL::to('js/demo.js')"></script>
</body>
</html>