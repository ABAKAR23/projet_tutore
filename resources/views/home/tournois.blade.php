<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tournois</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Inclure les feuilles de style ici -->
</head>
<body>
    <header class="site-navbar py-4" role="banner">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="site-logo">
                    <a href="index.html">
                        <img src="/images/logo.png" alt="Logo">
                    </a>
                </div>
                <div class="ml-auto">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="index.html" class="nav-link">Accueil</a></li>
                            <li class="active"><a href="tournaments.html" class="nav-link">Tournois</a></li>
                            <li><a href="contact.html" class="nav-link">Contact</a></li>
                        </ul>
                    </nav>
                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span class="icon-menu h3 text-white"></span></a>
                </div>
            </div>
        </div>
    </header>

    <div class="hero overlay" style="background-image: url('/images/bg_3.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mx-auto text-center">
                    <h1 class="text-white">Tournois</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="heading">Liste des Tournois</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Type</th>
                                <th>Date Début</th>
                                <th>Date Fin</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tournois as $tournoi)
                                <tr>
                                    <td>{{ $tournoi->nom }}</td>
                                    <td>{{ $tournoi->type }}</td>
                                    <td>{{ $tournoi->dateDebut }}</td>
                                    <td>{{ $tournoi->dateFin }}</td>
                                    <td>{{ $tournoi->statut }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Inclure les scripts JS ici -->
</body>
</html>
