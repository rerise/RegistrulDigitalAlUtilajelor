<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registru Utilaje - ReRise</title>
    <meta name="description" content="Registru utilaje - ReRise">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" href="{{asset('js/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('js/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('js/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/style-admin.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">Registrul Utilajelor</a>
                <a class="navbar-brand hidden" href="./">R</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/about"> <i class="menu-icon fa fa-dashboard"></i>Despre </a>
                    </li>
                    <h3 class="menu-title">Administrare</h3><!-- /.menu-title -->
                    <!-- <li>
                        <a href="{{route('machines.index')}}"> <i class="menu-icon ti-list"></i>Lista utilaje</a>
                    </li>
                    <li>
                        <a href="{{route('machines.create')}}"> <i class="menu-icon ti-plus"></i>Adauga utilaj</a>
                    </li> -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-truck"></i>Utilaje</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                               <i class="menu-icon ti-list"></i><a href="{{route('machines.index')}}">Lista utilaje</a>
                            </li>
                            <li>
                               <i class="menu-icon ti-map"></i><a href="/machines-map">Harta utilaje</a>
                            </li>
                            <li>
                               <i class="menu-icon ti-plus"></i><a href="{{route('machines.create')}}">Adauga utilaj</a>
                            </li>
                       </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Firme</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                               <i class="menu-icon ti-list"></i><a href="{{route('companies.index')}}">Lista firme</a>
                           </li>
                           <li>
                               <i class="menu-icon ti-plus"></i><a href="{{route('companies.create')}}">Adauga firma</a>
                           </li>
                       </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Depozite</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                               <i class="menu-icon ti-list"></i><a href="{{route('deposits.index')}}">Lista depozite</a>
                           </li>
                           <li>
                               <i class="menu-icon ti-plus"></i><a href="{{route('deposits.create')}}">Adauga depozit</a>
                           </li>
                       </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Operatori</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                               <i class="menu-icon ti-list"></i><a href="{{route('operators.index')}}">Lista operatori</a>
                           </li>
                           <li>
                               <i class="menu-icon ti-plus"></i><a href="{{route('operators.create')}}">Adauga operator</a>
                           </li>
                       </ul>
                    </li>

                    <h3 class="menu-title">Setari</h3><!-- /.menu-title -->
                   <!--  <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-md"></i>Nivel pregatire operatori</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                               <i class="menu-icon ti-list"></i><a href="{{route('operators.index')}}">Lista nivel pregatire operatori</a>
                           </li>
                           <li>
                               <i class="menu-icon ti-plus"></i><a href="{{route('operators.create')}}">Adauga nivel pregatire operator</a>
                           </li>
                       </ul>
                    </li> -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-rocket"></i>Categorii utilaje</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                               <i class="menu-icon ti-list"></i><a href="{{route('machine-categories.index')}}">Listă categorii utilaje</a>
                           </li>
                           <li>
                               <i class="menu-icon ti-plus"></i><a href="{{route('machine-categories.create')}}">Adauga categorie utilaj</a>
                           </li>
                       </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cog"></i>Caracteristici utilaje</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                               <i class="menu-icon ti-list"></i><a href="{{route('machine-parameters.index')}}">Lista caracteristici</a>
                           </li>
                           <li>
                               <i class="menu-icon ti-plus"></i><a href="{{route('machine-parameters.create')}}">Adauga caracteristică</a>
                           </li>
                       </ul>
                    </li>



                    <h3 class="menu-title">Re:Rise</h3><!-- /.menu-title -->
                    <li>
                        <a href="http://rerise.org" target="_blank"> <i class="menu-icon ti-help"></i>Despre Re:Rise</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-paper-plane"></i>Contact</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-facebook"></i><a target="_blank" href="https://web.facebook.com/ReRise.org/">Facebook</a></li>
                            <li><i class="menu-icon fa fa-linkedin"></i><a target="_blank" href="https://www.linkedin.com/company/re-rise---the-seismic-risk-reduction-organization/" class="icon alt fa-linkedin">LinkedIn</a></li>
                            <li><i class="menu-icon ti ti-email"></i><a href="mailto:office@rerise.org"><span class="label">office@rerise.org</span></a></li>
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
<!--         <p class="text-center"><small>Proiect iniţiat de <b><a href="http://rerise.org" target="_blank"> <i class="menu-icon fa fa-globe"> </i> Re:Rise</a></b> în colaborare cu DSU</small></p>   -->
    <p class="text-center"><small>Proiect iniţiat de <b><a href="http://rerise.org" target="_blank"> <i class="menu-icon fa fa-globe"> </i> Re:Rise</a></b> </small></p>  


    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <!-- <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('images/avatar/1.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('images/avatar/2.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('images/avatar/3.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('images/avatar/4.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="col-sm-5">
                    <!-- <div class="dropdown">
                        <a href="ReRise">ReRise</a>
                    </div> -->

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- <a href="">ReRise</a> -->
                            <img class="user-avatar rounded-circle" src="{{asset('images/rerise_logo.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>


                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
                                                     
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </div>
                    </div>

                    <!-- TODO: cand avem multiple languages -->
                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-ro"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            @yield('breadcrumbs')
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
            
            @yield('content')

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

   

    <script src="{{asset('js/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('js/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('js/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>


    <script src="{{asset('js/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('js/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('js/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('js/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('js/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('js/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('js/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('js/init-scripts/data-table/datatables-init.js')}}"></script>

</body>

</html>
