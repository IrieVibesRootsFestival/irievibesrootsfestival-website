
<!-- The header contains everything that displays as or above the nav-bar -->
<header>
    <div class="text-center py-3" id="banner-date">
        <p class="text-white text-uppercase m-0"><b> 16 - 17 - 18 July 2020 // Thursday free entry</b></p>
    </div>
    <!--HEADER IMAGE-->
    <div id="banner">
        <img src="/src/img/banner-logo.svg" 
             alt="Logo"
             height="115"
             width="254"
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
            <a href="/en/"><img alt="" alt="Navigation Brand" src="/src/img/nav-img.png"></a>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto d-lg-flex align-items-lg-center px-2 px-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/en/"><i class="fas fa-home"></i><span class="d-lg-none"> Home</span><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Festival<span class="dropdown-toggle"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link drop-2" href="/en/location/">Location</a></li>
                            <li><a class="nav-link drop-2" href="/en/festival/rules/">Festival Rules</a></li>                            
                            <li><a class="nav-link drop-2" href="/en/festival/camping/">Camping & Parking</a></li>
                            <li><a class="nav-link drop-2" href="/en/festival/services/">Services</a></li>
                            <li><a class="nav-link drop-2" href="/en/info/volunteers/">Volunteers</a></li>
                            <li><a class="nav-link drop-2" href="/en/festival/food-shops/">(non)Food Shops</a></li>
                            <li><a class="nav-link drop-2" href="/en/festival/transport/">Transport</a></li>
                            <li><a class="nav-link drop-2" href="/en/festival/safety/">Safety First</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class=" nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Program<span class="dropdown-toggle"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link drop-2" href="/en/artists">Artists</a></li>
                            <li><a class="nav-link drop-2" href="/en/lineup/">Line-Up</a></li>
                            <li><a class="nav-link drop-2" href="/en/lineup/posters/">Posters</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/en/tickets/">Tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/en/kids/">Little Lion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/en/festival/kortemark-conge/">Kortemark Congé</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class=" nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ECO<span class="dropdown-toggle"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link drop-2" href="/en/info/eco/trim-the-footprint/">Trim The Footprint</a></li>
                            <li><a class="nav-link drop-2" href="/en/info/eco/eco-team/">Eco team</a></li>
                            <li><a class="nav-link drop-2" href="/en/info/eco/reusable-cups/">Reusable cups</a></li>
                            <li><a class="nav-link drop-2" href="/en/info/eco/groene-vent-award/"><i>Groene Vent</i></a></li>
                            <li><a class="nav-link drop-2" href="/en/info/eco/clean-water/">Clean water</a></li>
                            <li><a class="nav-link drop-2" href="/en/info/eco/upcycling/">Upcycling</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer-anchor"><i class="fas fa-info-circle"></i> Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://shop.irievibes.be"><i class="fas fa-shopping-cart"></i><span class="d-lg-none"> Merch Store</span></a>
                    </li>
                </ul>
                <!-- This is the language selector. -->                   
                <ul class="navbar-nav ml-auto d-md-flex align-items-center">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-language"></i><span class="d-lg-none"> Language</span><span class="dropdown-toggle"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right text-center">
                            <!-- NL -->
                            <li class="nav-item">
                                <a class="nav-link"><span href="nl" class="my-1 flag flag-be select-lang"></span></a>
                            </li>
                            <!-- FR -->
                            <li class="nav-item">
                                <a class="nav-link"><span href="fr" class="my-1 flag flag-fr select-lang"></span></a>
                            </li>
                            <!-- EN (current) -->
                            <li class="nav-item">
                                <a class="nav-link"><span href="en" class="my-1 flag flag-gb"></span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>