
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
                <ul class="navbar-nav mr-auto d-md-flex px-2 px-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/nl/"><i class="fas fa-home"><span class="d-lg-none"> Home</span></i><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" alt="/en/festival/" class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Festival<span class="dropdown-toggle"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link drop-2" href="/nl/location/">Locatie</a></li>
                            <li><a class="nav-link drop-2" href="/nl/festival/rules/">Festivalregels</a></li>
                            <li><a class="nav-link drop-2" href="/nl//festival/camping/">Camping en Parking</a></li>
                            <li><a class="nav-link drop-2" href="/nl/info/volunteers/">Vrijwilligers</a></li>
                            <li><a class="nav-link drop-2" href="/nl/festival/food_shops/">(non)Food Shops</a></li>
                            <li><a class="nav-link drop-2" href="/nl/festival/transport/">Transport</a></li>
                            <li><a class="nav-link drop-2" href="/nl/festival/safety/">Veiligheid</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Programma<span class="dropdown-toggle"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link drop-2" href="/nl/artists">Artiesten</a></li>
                            <li><a class="nav-link drop-2" href="/nl/lineup/">Line-Up</a></li>
                            <li><a class="nav-link drop-2" alt="poster" href="/src/static/poster2019.php">Affiche</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nl/tickets/">Tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nl/kids/">Little Lion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"href="/nl/festival/kortemark_conge/">Kortemark Congé</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class=" nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ECO<span class="dropdown-toggle"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link drop-2" href="/nl/info/eco/trim-the-footprint/">Trim The Footprint</a></li>
                            <li><a class="nav-link drop-2" href="/nl/info/eco/eco-team/">Eco team</a></li>
                            <li><a class="nav-link drop-2" href="/nl/info/eco/reusable-cups/">Herbruikbare bekers</a></li>
                            <li><a class="nav-link drop-2" href="/nl/info/eco/groene-vent-award/"><i>Groene Vent</i></a></li>
                            <li><a class="nav-link drop-2" href="/nl/info/eco/clean-water/">Waterrecyclage</a></li>
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
                        <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe-americas"></i><span class="d-lg-none"> Taal</span><span class="dropdown-toggle"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <!-- NL (current) -->
                            <li class="nav-item">
                                <a class="nav-link"><span href="nl" class="my-1 flag flag-be" alt="Belgium"></span></a>
                            </li>
                            <!-- FR -->
                            <li class="nav-item">
                                <a class="nav-link"><span href="fr" class="my-1 flag flag-fr select-lang" alt="France"></span></a>
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