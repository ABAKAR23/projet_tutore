<!DOCTYPE html>
<html lang="en">

<head>
    <title>Projet tutoré</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

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
                                <li><a href="{{route('viewSpecTournois')}}" class="nav-link">Tournois</a></li>
                                <li><a href="{{route('viewSpecActualite')}}" class="nav-link">Actualité</a></li>
                                <li class="active"><a href="{{route('viewSpecContact')}}" class="nav-link">Nous contacter</a></li>
                            </ul>
                        </nav>

                        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span class="icon-menu h3 text-white"></span></a>
                    </div>
                </div>
            </div>
        </header>

        <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9 mx-auto text-center">
                        <div class="site-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <form action="#">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Nom">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Objet">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="" class="form-control" id="" cols="30" rows="10" placeholder="Ecrivez votre message..."></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary py-3 px-5" value="Send Message">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-4 ml-auto">

                                        <ul class="list-unstyled">
                                            <li class="mb-2">
                                                <strong class="text-white d-block">Adresse</strong>
                                                <a href="#">Ex Foyer Terrain Rocade <br> Dakar, Sénégal</a> 
                                            </li>
                                            <li class="mb-2">
                                                <strong class="text-white d-block">Email</strong>
                                                <a href="#">esmt@esmt.sn</a>
                                            </li>
                                            <li class="mb-2">
                                                <strong class="text-white d-block">
                                                    Phone
                                                </strong>
                                                <a href="#">+221 33 869 03 00</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>


    <script src="js/main.js"></script>

</body>

</html>