
<!-- The header contains everything that displays as or above the nav-bar -->
<!--HEADER IMAGE-->
<header>
    <div id="banner">
        <img 
             src="/src/img/banner-logo.svg" 
             alt="Logo"
             height="115px"
             width="254px"
             style="margin-bottom:-10px;"/>
    </div>
    <!--NAVIGATION-->
    <nav id="navbar" class="navbar sticky-top navbar-expand-lg">
        <div class="container">
            <!-- This allows the Navbar to become smaller on a smaller mobile device. -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-warning"></i>
            </button>
            <!-- This is the Navbar's "Content" -->
            <a href="/nl/"><img  src="/src/img/nav-img.png"></a>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto d-lg-flex align-items-lg-center px-2 px-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/fr/"><i class="fas fa-home"></i><span class="d-lg-none"> Home</span><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" alt="/en/festival/" class=" nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Festival<span class="dropdown-toggle"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link drop-2" href="/en/location/">Emplacement</a></li>
                            <li><a class="nav-link drop-2" href="/fr/festival/rules/">Règles</a></li>
                            <li><a class="nav-link drop-2" href="/fr/festival/camping/">Camping et Parking</a></li>
                            <!--
<li><a class="nav-link drop-2" href="/fr/festival/merchandise/">Merchandise</a></li>
-->
                            <li><a class="nav-link drop-2" href="/fr/info/vrijwilligers/">Bénévoles</a></li>
                            <li><a class="nav-link drop-2" href="/fr/festival/food_shops/">(non)Food Shops</a></li>
                            <li><a class="nav-link drop-2" href="/fr/festival/transport/">Transport</a></li>
                            <li><a class="nav-link drop-2" href="/fr/festival/safety/">Sécurité</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class=" nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Programme<span class="dropdown-toggle"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link drop-2" href="/en/artists">Artistes</a></li>
                            <li><a class="nav-link drop-2" href="/fr/lineup/">Line-Up</a></li>
                            <li><a class="nav-link drop-2" alt="poster" href="/src/static/poster2019.php">Poster</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fr/tickets/">Tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fr/kids/">Little Lion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"href="/fr/festival/kortemark_conge/">Kortemark Congé</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class=" nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ECO<span class="dropdown-toggle"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link drop-2" href="/fr/info/eco/trim-the-footprint/">Trim The Footprint</a></li>
                            <li><a class="nav-link drop-2" href="/fr/info/eco/eco-team/">Équipe éco</a></li>
                            <li><a class="nav-link drop-2" href="/fr/info/eco/reusable-cups/">Gobelets réutilisables</a></li>
                            <li><a class="nav-link drop-2" href="/fr/info/eco/groene-vent-award/"><i>Groene Vent</i></a></li>
                            <li><a class="nav-link drop-2" href="/fr/info/eco/clean-water/">Eau propre</a></li>
                            <li><a class="nav-link drop-2" href="/fr/info/eco/upcycling/">Upcycling</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"href="#footer-anchor"><i class="fas fa-info-circle"></i> Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ShoppingCart"><i class="fas fa-shopping-cart"></i><span class="d-lg-none"> Merch Store</span></a>
                    </li>
                </ul>
                <!-- This is the language selector. -->

                <ul class="navbar-nav ml-auto d-md-flex align-items-center">
                    <li class="nav-item dropdown">
                        <a href="#" class=" nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe-americas"></i> Langue<span class="dropdown-toggle"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <!-- NL -->
                            <li class="nav-item">
                                <a class="nav-link"><span href="nl" class="my-1 flag flag-be select-lang" alt="Belgium"></span></a>
                            </li>
                            <!-- FR (current) -->
                            <li class="nav-item">
                                <a class="nav-link"><span href="fr" class="my-1 flag flag-fr" alt="France"></span></a>
                            </li>
                            <!-- EN -->
                            <li class="nav-item">
                                <a class="nav-link"><span href="en" class="my-1 flag flag-gb select-lang" alt="England"></span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>