<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield("title")</title>

    {!! Html::style("bootstrap/css/bootstrap.min.css") !!}
    {!! Html::style("bootstrap/css/bootstrap-theme.min.css") !!}
    {!! Html::style("css/scroll_to_top.css") !!}
    {!! Html::style("css/lightbox.css") !!}
    {!! Html::style("css/cookie.css") !!}
    {!! Html::style("css/style.css") !!}
    <!--[if lt IE 9]>
        {!! Html::script("https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js") !!}
        {!! Html::script("https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js") !!}
    <![endif]-->

</head>
<body id="app-layout">
    <header>
        <nav id="nav" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img alt="Brand" src="{{ url('./images/logo.png')}}">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/') }}">ACCUEIL</a></li>
                        <li><a href="{{ url('/artiste') }}">L'ARTISTE</a></li>
                        <li><a href="{{ url('/expositions') }}">EXPOSITIONS</a></li>
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OEUVRES<span class="caret"></span></a>
                           <ul class="dropdown-menu">
                                <li><a href="{{ url('personnage') }}">PERSONNAGE</a></li>
                                <li><a href="{{ url('scene') }}">SCENE</a></li>
                                <li><a href="{{ url('nature_morte') }}">NATURE MORTE</a></li>
                                <li><a href="{{ url('nu') }}">NU</a></li>
                                <li><a href="{{ url('portrait') }}">PORTRAIT</a></li>
                           </ul>
                        </li>
                        <li><a href="{{ url('/contact') }}">NOUS CONTACTER</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">SE CONNECTER</a></li>
                            <li><a href="{{ url('/register') }}">S'INSCRIRE</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/profil/'. Auth::user()->id ) }}"><i class="fa fa-btn fa-sign-user"></i>MON PROFIL</a></li>
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>SE DECONNECTER</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section>
         @yield('content')
    </section>

     <footer class="container-fluid" >
      <div class="row">
        <div id="adresse" class="col-md-offset-1 col-sm-offset-3 col-xs-offset-1 col-md-4 col-xs-10">
          <p class="bas_de_page">CONTACT</p>
          <p> <img src="../public/images/icons/baseline_room_white_18dp1.png" alt="home"> 9, avenue des Cèdres 92410 Ville d'Avray FRANCE <br>
          <img src="../public/images/icons/baseline_email_white_18dp1.png" alt="email">  E-mail : issaissifou@hotmail.com <br>
          <img src="../public/images/icons/baseline_phone_white_18dp1.png" alt="tel" >  Tel : 0033 611935120 
          </p>
        </div>
        <div class=" col-md-offset-1 col-sm-offset-3 col-xs-offset-1  col-md-3">
          <p class="bas_de_page" id="logo_titre">LOGO</p>
          <p>
             <a href="{{ url('/') }}"><img id="logo_footer" src=".././public/images/logo.png" alt="logo"></a>
          </p>
        </div>
        <div class="col-md-offset-1 col-sm-offset-3 col-xs-offset-1  col-md-2">
          <p class="bas_de_page">SOCIAL</p>
          <p>
            <a href="https://www.facebook.com/isssifou"><img id="facebook" src="../public/images/icons/facebook.png" alt="logo"></a>
            <a href="https://twitter.com/chrisissifou"><img id="twitter" src="../public/images/icons/twitter.png" alt="logo"></a>
            <a href="https://www.linkedin.com/in/issaissifou/"><img id="linkedin" src="../public/images/icons/linkedin.png" alt="logo"></a>
            <a href="https://www.instagram.com/chrisissifou/"><img id="instagram" src="../public/images/icons/instagram.png" alt="logo"></a>
          </p>
        </div>
      </div>
      <div id="copyright" class="row" >
          <p>Copyright &copy; 2019 issaissifou.com Tous droits réservés</p>
      </div>

       <div id="btn_top">
        <img class="btn_top" src=".././public/images/icons/btn_top.png">
      </div>

    </footer>

   

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src=".././public/js/lightbox.js"></script>
    <script src=".././public/js/jquery.cookie.js"></script>
    <script src=".././public/js/cookie.js"></script>
    <script src=".././public/js/scroll_to_top.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
