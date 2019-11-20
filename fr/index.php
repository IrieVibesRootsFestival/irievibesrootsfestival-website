<html>
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Home - Irie Vibes</title>
        <meta property="og:title" content="Irie Vibes Roots Festival 2020 - Découvrez le monde du festival Irie Vibes Roots"/>
        <meta property="og:description" content="De retour à l'endroit où tout a commencé: Irie Vibes vous invite à l'édition Back to The Roots du festival Irie Vibes Roots en plein été 2020 à Kortemark." />
    </head> 
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_fr.php');?>
        <div class="container content">
            <div class="row justify-content-center">
                <!-- Aftermovie -->
                <div class="col-12 mb-md-3">
                    <div id="slider-wrapper" class="rounded p-2 mb-1">
                        <style>.embed-container { position: relative; padding-bottom: 43%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://player.vimeo.com/video/371957649?autoplay=1&portrait=false&muted=true' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
                    </div>
                </div>
                <div class="col-12 my-md-3">
                    <h1 class="mb-md-3 mt-2 mt-md-0 text-center quote">Irie Vibes Roots Festival</h1><br/>
                    <div class="text-left text-success">
                        <h1 class="mt-md-3 mb-0 px-3 quote">back to the roots</h1>
                        <p class="text-justify">
                            Irie Vibes retourne là où tout a commencé. Irie Vibes 2020 sera à nouveau une rétrospective de nos racines, souvenirs et événements. Nous vous invitons à faire partie du <b>retour d'Irie Vibes au festival Roots 2020</b>, où la tête, le cœur et le corps se rencontrent dans un fantastique spectacle de couleurs et de sons.
                            Placez un signet de notre <a class="text-success" href="/en/lineup/"><i class="fas fa-link fa-xs" style="font-size: 0.6rem;"></i>page de line-up</a> sur votre écran d'accueil. Irie!
                        </p>
                    </div>
                    <div class="text-md-right text-warning">
                        <h1 class="mt-3 mb-0 px-3 quote">one love</h1>
                        <p class="text-justify text-md-right">Ici chez Irie Vibes, la famille est importante. Comme une grande famille qui construit pour un avenir encore plus grand. Sans l'aide de personnes comme vous, il serait impossible de réaliser ce rêve. Mash Down! Allez sur la <a class="text-warning" href="/en/info/volunteers/"><i class="fas fa-link fa-xs" style="font-size: 0.6rem;"></i>page des bénévoles</a> pour voir si c'est pour vous. Family thing!</p>
                    </div>
                    <div class="text-left text-danger">
                        <h1 class="mt-3 mb-0 px-3 quote ">être là</h1>
                        <p class="text-justify">
                            Vous cherchez des billets? Achetez-les maintenant! Un ticket de camping vous garantit une place au camping. Les billets et les prix peuvent être trouvés <a class="text-danger" href="/en/tickets/"><i class="fas fa-link fa-xs" style="font-size: 0.6rem;"></i>ici</a>.
                        </p>
                    </div>
                </div>
                <!-- Slider -->
                <div class="col-12 m-md-3">
                    <h1 class="mb-md-3 mt-2 mt-md-0 text-center quote">Regarde</h1>
                    <div id="slider-wrapper" class="p-2 mb-2 rounded">
                        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/content/slider.php');?>
                    </div>
                </div>
                <div class="col-12"><h1 class="mb-md-3 mt-2 mt-md-0 text-center quote">music unites</h1><br/></div>
                <div class="col-12 col-md-6">
                    <h3 class="text-irie"><b>Nouvelles</b></h3>
                    <!--Inserted elements here -->
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/content/news-links.php');?>  
                </div>
                <div class="col-12 col-md-6">
                    <h3 class="text-irie"><b>Mises à jour</b></h3>
                    <a class="twitter-timeline" data-height="380" data-theme="light" data-link-color="#8e142f" href="https://twitter.com/irievibesupdate?ref_src=twsrc%5Etfw" data-chrome="nofooter noborders noscrollbar"></a>
                </div>
            </div> 
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_fr.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</html>
