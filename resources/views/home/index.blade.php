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
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/style.css">



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
                            <li class="active"><a href="{{route('index')}}" class="nav-link">Accueil</a></li>
                            <li><a href="{{route('viewSpecTournois')}}" class="nav-link">Tournois</a></li>
                            <li><a href="{{route('viewSpecActualite')}}" class="nav-link">Actualité</a></li>
                            <li><a href="{{route('viewSpecContact')}}" class="nav-link">Nous contacter</a></li>
                        </ul>
                    </nav>

                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                        class="icon-menu h3 text-white"></span></a>
                </div>
            </div>
        </div>

    </header>

    <div class="hero overlay" style="background-image: url('/images/bg_3.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 ml-auto">
                    <h1 class="text-white">ESMT's Cups Events</h1>
                    <p>Bienvenue dans la fil d'actualité sportive de l'ESMT. Vous trouverez ici les dernières nouvelles sur les différentes coupes de l'ESMT, les résultats, les événements à venir et bien plus encore.</p>
                    <p>
                        <a href="/test" class="btn btn-primary py-3 px-4 mr-3">Réserver un ticket</a>
                        <a href="#" class="more light">Learn More</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex team-vs">
                    <span class="score">4-1</span>
                    <div class="team-1 w-50">
                        <div class="team-details w-100 text-center">
                            <img src="/images/logo_1.png" alt="Image" class="img-fluid">
                            <h3>LTI-3<span>(vainqueur)</span></h3>
                            <ul class="list-unstyled">
                                <li>Alamine LO  (2)</li>
                                <li>Bachir FAYE  (1)</li>
                                <li>Ibou DIALLO  (1)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-2 w-50">
                        <div class="team-details w-100 text-center">
                            <img src="/images/logo_2.png" alt="Image" class="img-fluid">
                            <h3>LTI-1<span>(perdant)</span></h3>
                            <ul class="list-unstyled">
                                <li>Pape GUEYE  (1)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="widget-next-match">
                        <div class="widget-title">
                            <h3>Prochain match de foot</h3>
                        </div>
                        <div class="widget-body mb-3">
                            <div class="widget-vs">
                                <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                    <div class="team-1 text-center">
                                        <img src="/images/logo_1.png" alt="Image">
                                        <h3>LTI-2</h3>
                                    </div>
                                    <div>
                                        <span class="vs"><span>VS</span></span>
                                    </div>
                                    <div class="team-2 text-center">
                                        <img src="/images/logo_2.png" alt="Image">
                                        <h3>INGC</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center widget-vs-contents mb-4">
                            <h4>CAN ESMT</h4>
                            <p class="mb-5">
                                <span class="d-block">03 Aout 2024</span>
                                <span class="d-block">17:00</span>
                                <strong class="text-primary">Terrain de football de l'ESMT</strong>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="widget-next-match">
                        <div class="widget-title">
                            <h3>Prochain match de basket</h3>
                        </div>
                        <div class="widget-body mb-3">
                            <div class="widget-vs">
                                <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                    <div class="team-1 text-center">
                                        <img src="/images/logo_6.png" alt="Image">
                                        <h3>Master</h3>
                                    </div>
                                    <div>
                                        <span class="vs"><span>VS</span></span>
                                    </div>
                                    <div class="team-2 text-center">
                                        <img src="/images/logo_6.png" alt="Image">
                                        <h3>INGC</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center widget-vs-contents mb-4">
                            <h4>ESMT NBA League</h4>
                            <p class="mb-5">
                                <span class="d-block">04 Aout 2024</span>
                                <span class="d-block">9:00</span>
                                <strong class="text-primary">Terrain de basket de l'ESMT</strong>
                            </p>
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
</div>
</body>

</html>