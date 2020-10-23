<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    
    <title>E-surveys</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/core-img/favicon.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('assets/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/jquery@2.2.4/dist/jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css"/>
<link href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <style>
#my{
zoom: 80%;
}
    </style>
</head>

<body id="my">










    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">





        <nav class="navbar navbar-expand-sm navbar-default">



            <div id="main-menu" class="main-menu collapse navbar-collapse">


                @guest

                @else
                <ul class="nav navbar-nav">
                    <li class="active">
                         
                        <a href="{{route('home')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>

                    @can('edit-users')
                    <li class="menu-title">User managment</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Users </a>
                        <ul class="sub-menu children dropdown-menu">

                            <li><i class="fa fa-bars"></i><a href="{{ route('admin.users.index') }}">Show</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('CRegister') }}">Add</a></li>




                        </ul>
                    </li>

                    @endcan
               
                    <li class="menu-title">INSPECTIONS</li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Voyage managment</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-bars"></i><a href="{{ route('CVoyage') }}">Add voyages</a>
                            </li>
                            <li><i class="menu-icon fa fa-puzzle-piece"></i><a href="{{ route('CVoyageList') }}">liste
                                    voyages</a></li>


                    </li>
                </ul>
                </li>
                <li class="menu-title">Voir tache inspections</li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Taches</a>
                    <ul class="sub-menu children dropdown-menu">

                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="{{ route('vtache') }}">tache</a>
                        </li>
                    </ul>
                </li>
                </ul>
                @can('manage-work')
                @endcan

                @endguest


            </div>
        </nav>
    </aside>
    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="../img/core-img/logo.jpeg" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="../img/core-img/logo.jpeg" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">

                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-arrow-down" aria-hidden="true"></i>
                            </a>

                            <div class="user-menu dropdown-menu">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form class="nav-link" id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                                <!-- <a class="nav-link" href="{{ route('logout') }}"   ><i class="fa fa-power -off"></i>Logout</a> -->
                            </div>
                        </div>

                    </div>
                </div>
        </header>
        @include('partials.alert')
        @yield('content')




        <!-- /.content -->




    </div>
    <!-- /#right-panel -->








    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{asset('js/back/main.js')}}"></script>
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
    @yield('scripts')
</body>

</html>