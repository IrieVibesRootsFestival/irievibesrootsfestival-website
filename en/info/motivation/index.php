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
        <title>Motivation - Irie Vibes</title>     
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
                    <a class="navbar-brand" href="#"></a>
                    <a id="irie-green" class="navbar-brand irie-green" href="#">4th Week of July</a>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/en/tickets/">Tickets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/en/lineup/">Line-up</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/en/kids/">Irie Vibes For Kids</a>
                            </li>                            
                            <li class="nav-item dropdown active">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Info<span class="dropdown-toggle"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link drop-2" href="/en/info/volunteers/">Volunteers</a></li>
                                    <li><a class="nav-link drop-2" href="/en/info/partners/">Partners</a></li>
                                    <li><a class="nav-link drop-2" href="/en/info/motivation/">Motivation</a></li>
                                </ul>
                            </li>
                            <!--
<li class="nav-item dropdown">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Album<span class="dropdown-toggle"></span></a>
<ul class="dropdown-menu">
<li><a class="nav-link drop-2" href="/en/album/#2017">2017</a></li>
</ul>
</li>
//-->
                            <li class="nav-item">
                                <a class="nav-link" href="/en/location/">Location</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/en/contact/">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/en/greenforward/">GreenForward</a>>
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
        <!-- This is the main container that encapsulates everything content related. -->
        <div class="container content">
            <h1>Placeholder</h1>
            <p>This page is still under construction.</p>
        </div>
        <!-- Use a container to wrap the slider, the purpose is to enable slider to always fit width of the wrapper while window resize -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 text-center">
                        <a href="/en/info/volunteers" class="btn btn-volunteer">Become Volunteer</a>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> 
</html>