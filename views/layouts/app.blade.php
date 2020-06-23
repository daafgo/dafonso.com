<html>
<head>
    <title> Dafonso.com - @yield('title')</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="/css/custom.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
@if(!isset($incrusted)||$incrusted==false)

<header>
    <nav class="backgroundLogo" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="https://www.dafonso.com/" class="brand-logo">Dafonso.com</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/reference">Twitter reference MakerLink</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
    </nav>
</header>
@endif
<body>
    @yield('content')
</body>
@if(!isset($incrusted)||$incrusted==false)
<footer class="page-footer white backgroundLogo">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Acerca de mi</h5>
                <p class="grey-text text-lighten-4">Informático Full-stack apasionado de la tecnología y los videojuegos.</p>
                <div class="social-media"> <a href="https://linkedin.com/in/daafgo"><img alt="linkedin Logo" class="social-media-logo" src="/img/Linkedin_icon.svg"></a></div>

            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Utiles</h5>
                <ul>
                    <li><a class="grey-text" href="/reference">Twitter reference Maker</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Juegos y Hobbies</h5>
                <ul>
                    <li><a class="grey-text" href="#!">Cities Skylines</a></li>
                    <li><a class="grey-text" href="#!">Football Manager</a></li>
                    <li><a class="grey-text" href="#!">Hearts of Iron</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="brown-text text-lighten-3" >Daniel Afonso</a>
        </div>
    </div>
</footer>
@endif
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/reference.js"></script>

</html>