<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Smart Agriculture</title>

        <!-- Icon-->
        <link rel="shortcut icon" href="{{ asset('images/smart_agriculture.png') }}">

        <link rel="icon" href="../../favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="{{URL::to('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="{{URL::to('plugins/node-waves/waves.css') }}" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="{{URL::to('plugins/animate-css/animate.css') }}" rel="stylesheet" />

        <!-- Bootstrap Material Datetime Picker Css -->
        <link href="{{URL::to('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />

        <!-- Wait Me Css -->
        <link href="{{URL::to('plugins/waitme/waitMe.css') }}" rel="stylesheet" />

        <!-- Bootstrap Select Css -->
        <link href="{{URL::to('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="{{URL::to('css/style.css') }}" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="{{URL::to('css/themes/all-themes.css') }}" rel="stylesheet" />
    </head>

    <body class="theme-green">
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
                                            <a href="#">
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
                                            <a href="#">
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
                                            <a href="#">
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
                                            <a href="#">
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
                                            <a href="#">
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
                                            <a href="#">
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
                <div class="row clearfix">
                   <!-- With Captions -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">
                                <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic_2" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic_2" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic_2" data-slide-to="2"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="{{URL::to('images/image-gallery/11.jpg') }}" />
                                            <div class="carousel-caption">
                                                <h3>First slide label</h3>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                            </div>
                                        </div>  
                                        <div class="item">
                                            <img src="{{URL::to('images/image-gallery/11.jpg') }}" />
                                            <div class="carousel-caption">
                                                <h3>First slide label</h3>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                            </div>
                                        </div>        
                                        <div class="item">
                                            <img src="{{URL::to('images/image-gallery/11.jpg') }}" />
                                            <div class="carousel-caption">
                                                <h3>First slide label</h3>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                            </div>
                                        </div>                                              
                                    </div>

                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# With Captions -->
                    <!-- With Captions -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">
                                <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic_2" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic_2" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic_2" data-slide-to="2"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="{{URL::to('images/image-gallery/11.jpg') }}" />
                                            <div class="carousel-caption">
                                                <h3>First slide label</h3>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="{{URL::to('images/image-gallery/12.jpg') }}" />
                                            <div class="carousel-caption">
                                                <h3>Second slide label</h3>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="{{URL::to('images/image-gallery/13.jpg') }}" />
                                            <div class="carousel-caption">
                                                <h3>Third slide label</h3>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# With Captions -->
                </div>

                <!-- Multi Column -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    ADD NEW AGRICULTURE PRODUCT
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
                                <form method="POST" action="{{ route('home.store') }}" enctype="multipart/form-data">
                                @csrf
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="season_name" class="form-control" placeholder="Season Name" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="production_area" class="form-control" placeholder="Production Area" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="process" class="form-control" placeholder="Process" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">    
                                                <select class="form-control show-tick" name="season_manager" required>
                                                    <option value="">Select Season Manager</option>
                                                    <option value="chanthan">chanthan</option>
                                                    <option value="chanthet">chanthet</option>
                                                    <option value="rany">rany</option>
                                                    <option value="chanthea">chanthea</option>
                                                    <option value="dina">dina</option>
                                                </select>                                  
                                            </div>
                                        </div>   
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="datepicker" name="start_date" class="datepicker form-control" placeholder="Start Date" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="datepicker" name="end_date" class="datepicker form-control" placeholder="End Date" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="datepicker" name="planting_date" class="datepicker form-control" placeholder="Planting Date" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="datepicker" name="harvest_date" class="datepicker form-control" placeholder="Harvest Date" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="product_name" class="form-control" placeholder="Product Name" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="file" name="product_image" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="description" class="form-control" placeholder="Describe about your product" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="{{ route('home') }}" class="btn btn-danger m-t-15 waves-effect">Back</a>
                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">ADD PRODUCT</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Multi Column -->
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

        <!-- Autosize Plugin Js -->
        <script src="{{URL::to('plugins/autosize/autosize.js') }}"></script>

        <!-- Moment Plugin Js -->
        <script src="{{URL::to('plugins/momentjs/moment.js') }}"></script>

        <!-- Bootstrap Material Datetime Picker Plugin Js -->
        <script src="{{URL::to('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

        <!-- Custom Js -->
        <script src="{{URL::to('js/admin.js') }}"></script>
        <script src="{{URL::to('js/pages/forms/basic-form-elements.js') }}"></script>

        <!-- Demo Js -->
        <script src="{{URL::to('js/demo.js') }}"></script>
    </body>

</html>

















