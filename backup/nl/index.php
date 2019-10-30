<html>
    <head>
        <!-- Setting things up so they work correctly. -->
        <meta charset="utf-8">         <meta http-equiv="X-UA-Compatible" content="IE=edge">         <meta name="viewport" content="width=device-width, initial-scale=1">         <meta name="Description" content="Irie Vibes Roots Festival is a festival dedicated to bringing ska, reggae, world music and dub into the rural of Kortemark, a small town in Belgium. Come join us this year!">         <meta name="Keywords" content="dub, reggae, ska, world music, food, festival">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="/src/img/favicon.png" />
        <!-- Custom style sheet -->
        <!-- Bootstrap style sheet -->
        <link rel="stylesheet" href="/src/css/bootstrap.css">
        <!-- Load overwrite style sheet as last to enable overwriting Bootstrap features -->
        <link rel="stylesheet" href="/src/css/main.css">

        <title>Home - Irie Vibes</title>
    </head>
    <body>
        <header>
            <!-- The header contains everything that displays as or above the nav-bar -->
            <!--HEADER IMAGE-->
            <div id="banner">
                <img class="img-responsive" src="/src/img/banner_logo.png">
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
                            <li class="nav-item active">
                                <a class="nav-link" href="/nl/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Festival<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link drop-2" href="/nl/locatie/">Locatie</a></li>
                                    <li><a class="nav-link drop-2" href="/nl/festival/regels/">Festivalregels</a></li>
                                    <li><a class="nav-link drop-2" href="/nl/festival/accomodatie/">Accomodatie</a></li>
                                    <li><a class="nav-link drop-2" href="/en/festival/merchandise/">Merchandise</a></li>
                                    <li><a class="nav-link drop-2" href="/en/info/volunteers/">Vrijwilligers</a></li>
                                    <li><a class="nav-link drop-2" href="/en/festival/food_shops/">(non)Food Shops</a></li>
                                    <li><a class="nav-link drop-2" href="/en/festival/transport/">Transport</a></li>
                                    <li><a class="nav-link drop-2" href="/en/festival/safety/">Veiligheid</a></li>  
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/nl/tickets/">Tickets</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Programma<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link drop-2" href="/en/artists">Artiesten</a></li>
                                    <li><a class="nav-link drop-2" href="/en/lineup/">Line-Up</a></li>
                                    <li><a class="nav-link drop-2" alt="Clashfinder" href="https://drive.google.com/file/d/0B3FTI6w1g9LZWTBSbEQ4OURDWEE/view">Overzicht</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/nl/kids/">Irie Vibes For Kids</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Info<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link drop-2" href="/en/contact/">Contact</a></li>
                                    <li><a class="nav-link drop-2" href="/en/info/about/">Over Ons</a></li>
                                    <li><a class="nav-link drop-2" href="/en/crew">Crew</a></li>
                                    <li><a class="nav-link drop-2" href="/en/info/we_support/">Wij Steunen</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/en/news/">Nieuws</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/en/comin_up/">Comin' Up</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/nl/info/partners/">Partners</a>
                            </li>
                        </ul>
                        <span class="navbar-text">
                            <!-- This is the language selector. -->
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link language text-white" href="#">NL
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link language text-muted" href="/en/">EN<span class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                        </span>
                    </div>
                </div>
            </nav>
        </header>
        <!-- This is the main container that encapsulates everything content related. -->

        <div id="content" class="container">
            <h3 class="display-7 text-center">Irie Vibes Roots Festival</h3>
            <br/>
            <div id="slider1_container" class="rounded" style="visibility: hidden; position: relative; margin: 0 auto; width: 1140px; height: 442px; overflow: hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('../img/loading.gif') no-repeat 50% 50%; background-color: rgba(0, 0, 0, .7);"></div>

                <!-- Slides Container -->
                <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 1140px; height: 442px;
                                       overflow: hidden;">
                    <div>
                        <img u="image" src2="/src/img/slideshow/rootsfestival2.jpg" />
                    </div>
                    <div>
                        <img u="image" src2="/src/img/slideshow/foodvibes.jpg" />
                    </div>
                    <div>
                        <img u="image" src2="/src/img/slideshow/veld.jpg" />
                    </div>
                    <div>
                        <img u="image" src2="/src/img/slideshow/flags.jpg" />
                    </div>
                    <div>
                        <img u="image" src2="/src/img/slideshow/zetel.jpg" />
                    </div>
                    <div>
                        <img u="image" src2="/src/img/slideshow/doek.jpg" />
                    </div>                    
                    <div>
                        <img u="image" src2="/src/img/slideshow/dubcastle.jpg" />
                    </div>
                </div>

                <!--#region Bullet Navigator Skin Begin -->
                <!-- Help: https://www.jssor.com/development/slider-with-bullet-navigator.html -->
                <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                    <div data-u="prototype" class="i" style="width:16px;height:16px;">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                        </svg>
                    </div>
                </div>
                <!--#endregion Bullet Navigator Skin End -->

                <!--#region Arrow Navigator Skin Begin -->
                <!-- Help: https://www.jssor.com/development/slider-with-arrow-navigator.html -->
                <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                    </svg>
                </div>
                <!--#endregion Arrow Navigator Skin End -->

                <a style="display: none" href="https://www.jssor.com"></a>
            </div>
            <div  class="col-md-12">
                <span id="home">
                    <br/>
                    <p class="text-center">
                        Irie Vibes Roots Festival brengt de wereld naar Kortemark en kleurt het helemaal vol met positieve en vredevolle vibes. Dit lage budget en open-minded festival is opgebouwd door een gemotiveerde groep creatieve vrijwilligers met een gedeelde liefde voor muziek en aandacht voor het milieu.
                        <br/>
                    </p>
                </span>
                <p class="text-center quote">
                    "Music transcends prejudices. Music unites."
                </p>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 text-center">
                        <a href="/en/info/volunteers" class="btn btn-volunteer">Word Vrijwilliger</a>
                    </div>
                    <div class="col-md-7 text-center"></div>
                    <div class="col-md-3">
                        <div id="btn-social" class="text-center">
                            <a href="https://www.facebook.com/IrieVibesRootsFesitval"><i class="fab fa-facebook-square fa-3x social"></i></a>
                            <a href="https://www.instagram.com/irievibesroots/"><i class="fab fa-instagram fa-3x social"></i></a>
                            <a href="/src/static/snapchat/"><i class="fab fa-snapchat-square fa-3x social"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!-- JSsor Slideshow JS -->
    <script src="/src/js/jssor.slider.min.js"></script>
    <script src="/src/js/jssor.slider.config.js"></script>
</html>
