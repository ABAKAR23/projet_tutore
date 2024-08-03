<!DOCTYPE html>
<html lang="en">

<head>
  <title>Projet tutoré</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/fonts/icomoon/style.css">
  <link rel="stylesheet" href="/css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="/css/jquery-ui.css">
  <link rel="stylesheet" href="/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="/css/aos.css">
  <link rel="stylesheet" href="/css/style.css">
  <style>
    .card {
      background-color: transparent;
      border: 2px solid #8B0000;
      margin: 10px; 
      width: 500px;
    }

    .card-body {
      color: #8B0000; 
      font-size: 20px; 
    }

    .card-title,
    .card-text {
      color: #8B0000; 
      margin-bottom: 50px; 
    }

    .btn-primary {
      background-color: #8B0000;
      border-color: #8B0000;
      margin-bottom: 25px;
    }

    .btn-primary:hover {
      background-color: #A52A2A;
      border-color: #A52A2A;
    }
  </style>
</head>

<body>
  <div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar py-4" role="banner">
      <div class="container">
        <div class="d-flex align-items-center">
          <div class="ml-auto"> 
            <nav class="site-navigation position-relative text-right" role="navigation"> 
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="{{route('index')}}" class="nav-link">Accueil</a></li>
                <li class="active"><a href="{{route('viewSpecTournois')}}" class="nav-link">Tournois</a></li>
                <li><a href="{{route('viewSpecActualite')}}" class="nav-link">Actualité</a></li>
                <li><a href="{{route('viewSpecContact')}}" class="nav-link">Nous contacter</a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-left text-white"><span class="icon-menu h3 text-white"></span></a> <!-- Changed float-right to float-left -->
          </div>
        </div>
      </div>
    </header>
    <div class="hero overlay" style="background-image: url('/images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-12 mx-auto text-center">
            <div class="row">
              @foreach($tournois as $tournoi)
              <div class="col-md-6 d-flex justify-content-center mb-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">{{ $tournoi->nom }}</h5>
                    <p class="card-text">Catégorie: {{ $tournoi->type }}</p>
                    <p class="card-text">Date de Début: {{ $tournoi->dateDebut }}</p>
                    <p class="card-text">Date de Fin: {{ $tournoi->dateFin }}</p>
                    <p class="card-text">Statut: {{ $tournoi->statut }}</p>
                    <a href="{{route('viewSpecClassement')}}" class="btn btn-primary"><span>Classement et Résultats</span></a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/jquery-ui.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/jquery.countdown.min.js"></script>
  <script src="/js/bootstrap-datepicker.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/aos.js"></script>
  <script src="/js/jquery.fancybox.min.js"></script>
  <script src="/js/jquery.sticky.js"></script>
  <script src="/js/jquery.mb.YTPlayer.min.js"></script>
  <script src="/js/main.js"></script>
</body>
</html>
