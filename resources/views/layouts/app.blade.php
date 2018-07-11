<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RM Cuisines</title>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">

    <!-- Icons material design -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
    <link rel="stylesheet" href="owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/assets/owl.theme.default.min.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" >

        <nav class="navbar navbar-expand-lg ">

            <a class="navbar-brand" href="#"><span>RM</span> Cuisines</a>

            <div class="menu" id="leMenu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('accueil') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cuisines') }}">Cuisines</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('salles-de-bain') }}">Salles de bains</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rangements') }}">Rangements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn waves-effect waves-light" id="btn-rdv" href="{{ route('rdv') }}">Prendre RDV</a>
                    </li>
                </ul>
            </div>
            <div class="menu-responsive animated fadeIn" id="burger-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="menu-close di-none" id="close-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </nav>

        <main class="" id="main">
            @yield('content')
        </main>




        <!--Footer-->
        <footer class="page-footer font-small " id="footer">

            <!--Copyright-->
            <div class="footer-copyright py-3 text-center">


                <ul class="list-unstyled row">
                    <li>
                        <a href="{{ route('accueil') }}">Accueil</a>
                    </li>
                    <li>
                        <a href="{{ route('mentions') }}">Mentions Legales</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Nous contacter</a>
                    </li>
                </ul>
                © 2018 RM Cuisines, tous droits réservés.
                
            </div>
            <!--/.Copyright-->

        </footer>
        <!--/.Footer-->

    </div>



    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
    
    <script src="owl/owl.carousel.min.js"></script>

    <script src="/js/lightbox.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
