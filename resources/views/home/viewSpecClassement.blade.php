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
        .custom-table {
            border: 2px solid #ff0000;
            border-radius: 8px;
            overflow: hidden;
            width: 90%;
            margin-left: -300px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
        }

        .custom-table thead {
            background-color: transparent;
        }

        .custom-table th,
        .custom-table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        .custom-table tbody tr:nth-child(odd) {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .custom-table tbody tr:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .custom-table .rank {
            font-weight: bold;
            color: white;
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
                <div class="ml-auto">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="{{ route('index') }}" class="nav-link">Accueil</a></li>
                            <li class="active"><a href="{{ route('viewSpecTournois') }}" class="nav-link">Tournois</a></li>
                            <li><a href="{{ route('viewSpecActualite') }}" class="nav-link">Actualité</a></li>
                            <li><a href="{{ route('viewSpecContact') }}" class="nav-link">Nous contacter</a></li>
                        </ul>
                    </nav>
                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white">
                        <span class="icon-menu h3 text-white"></span>
                    </a>
                </div>
            </div>
    </div>
    </header>

    <div class="hero overlay" style="background-image: url('/images/bg_3.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="custom-table">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="rank">Rang</th>
                                    <th>Nom de l'équipe</th>
                                    <th>Victoires</th>
                                    <th>Défaites</th>
                                    <th>Nombre de points</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $rang = 1; // Initialiser le rang
                                @endphp
                                @foreach($classements as $classement)
                                <tr>
                                    <td class="rank">{{ $rang }}</td>
                                    <td>{{ $classement->equipe }}</td>
                                    <td>{{ $classement->victoires }}</td>
                                    <td>{{ $classement->defaites }}</td>
                                    <td>{{ $classement->points }}</td>
                                </tr>
                                @php
                                $rang++; // Incrémenter le rang pour la ligne suivante
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex team-vs">
                        <span class="score">4-1</span>
                        <div class="team-1 w-50">
                            <div class="team-details w-100 text-center">
                                <img src="/images/logo_1.png" alt="Image" class="img-fluid">
                                <h3>LTI-3<span>(win)</span></h3>
                                <ul class="list-unstyled">
                                    <li>Alamine LO (2)</li>
                                    <li>Bachir FAYE (1)</li>
                                    <li>Ibou DIALLO (1)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-2 w-50">
                            <div class="team-details w-100 text-center">
                                <img src="/images/logo_2.png" alt="Image" class="img-fluid">
                                <h3>LTI-1<span>(loss)</span></h3>
                                <ul class="list-unstyled">
                                    <li>Pape GUEYE (1)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
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