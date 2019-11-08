<html>
    <head>
        <!-- Setting things up so they work correctly. -->
        <meta charset="utf-8">         <meta http-equiv="X-UA-Compatible" content="IE=edge">         <meta name="viewport" content="width=device-width, initial-scale=1">         <meta name="Description" content="Irie Vibes Roots Festival is a festival dedicated to bringing ska, reggae, world music and dub into the rural of Kortemark, a small town in Belgium. Come join us this year!">         <meta name="Keywords" content="dub, reggae, ska, world music, food, festival">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="/src/img/favicon.png" />         <meta name="theme-color" content="#1c1f22" />
        <!-- Custom style sheet -->
        <!-- Bootstrap style sheet -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <!-- Load overwrite style sheet as last to enable overwriting Bootstrap features -->
        <link rel="stylesheet" href="/src/css/main.css">
        <title>Tickets - Irie Vibes</title>
    </head>
    <body>
        <header>
            <!-- The header contains everything that displays as or above the nav-bar -->
            <!--HEADER IMAGE-->
            <div id="banner">
                <img class="img-fluid" src="/src/img/banner_logo.png">
            </div>
            <!--NAVIGATION-->
            <nav id="navbar" class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- This allows the Navbar to become smaller on a smaller mobile device. -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="/en/"><img  src="/src/img/nav-img.png"></a>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/en/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown active">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Festival<span class="dropdown-toggle"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link drop-2" href="/en/location/">Location</a></li>
                                    <li><a class="nav-link drop-2" href="/en/festival/rules/">Festival Rules</a></li>
                                    <li><a class="nav-link drop-2" alt="Camping, parking and other places to stay" href="/en//festival/accomodation/">Accomodation</a></li>
                                    <li><a class="nav-link drop-2" href="/en/festival/merchandise/">Merchandise</a></li>
                                    <li><a class="nav-link drop-2" href="/en/info/volunteers/">Volunteers</a></li>
                                    <li><a class="nav-link drop-2" href="/en/festival/food_shops/">(non)Food Shops</a></li>
                                    <li><a class="nav-link drop-2" href="/en/festival/transport/">Transport</a></li>
                                    <li><a class="nav-link drop-2" href="/en/festival/safety/">Safety First</a></li>   
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/en/tickets/">Tickets</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Program<span class="dropdown-toggle"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link drop-2" href="/en/artists">Artists</a></li>
                                    <li><a class="nav-link drop-2" href="/en/lineup/">Line-Up</a></li>
                                    <li><a class="nav-link drop-2" alt="Clashfinder" href="#">Overview</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/en/kids/">Irie Vibes For Kids</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Info<span class="dropdown-toggle"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link drop-2" href="/en/contact/">Contact</a></li>
                                    <li><a class="nav-link drop-2" href="/en/info/about/">About Us</a></li>
                                    <li><a class="nav-link drop-2" href="/en/crew">Crew</a></li>
                                    <li><a class="nav-link drop-2" href="/en/info/we_support/">We Support</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/en/news/">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/en/comin_up/">Comin' Up</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/en/info/partners/">Partners</a>
                            </li>
                        </ul>
                        <span class="navbar-text">
                            <!-- This is the language selector. -->
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link language text-muted" href="/nl/"><img src="/src/img/flags/blank.gif" class="flag flag-be" alt="Czech Republic" />
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link language text-white" href="#"><img src="/src/img/flags/blank.gif" class="flag flag-gb" alt="Czech Republic" /><span class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                        </span>
                    </div>
                </div>
            </nav>
        </header>
        <div class="content container">
            <br/>
            <h3 class="display-7 text-center">We Support</h3>
            <br/>
            <p id="error-404" class="text-center">The page you're looking for is still under construction.</p>
            <br/>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
