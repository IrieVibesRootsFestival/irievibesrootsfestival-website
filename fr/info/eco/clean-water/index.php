<!DOCTYPE html><html lang="fr">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Eau recyclée - Irie Vibes</title>
        <meta property="og:title" content="Aeu propre et eau recyclée"/>
        <meta property="og:description" content="Une eau propre est vitale pour la nature. Nous donnons également un coup de main avec l'eau recyclée!" />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_fr.php');?>
        <div class="container content">         
            <h1 style="margin-bottom:5px" class="display-7 text-center">Eau propre</h1>
            <br/>
            <div class="row">
                <div class="col-12 col-md-9">
                    <p>Vous savez que…</p>
                    <ul>
                        <li>grace au remplacement des toilettes et au filtrage de nos eaux en collaboration avec <a href="http://www.desotec.com/">Desotec Activated Carbon</a>, nous avons réussi à réduire de moitié notre consommation d’eau pendant le festival?</li>
                        <li>chaque goutte d’eau est purifiée et réutilisée 5 fois pendant le festival?</li>
                    </ul>
                </div>
                <div class="col-12 col-md-3"><img alt="" class="img-fluid rounded" src="/src/img/partners/desotec.jpg"/></div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <picture>
                        <source srcset="/src/img/eco/clean-water/clean-water-info.webp" type="image/webp">
                        <source srcset="/src/img/eco/clean-water/clean-water-info.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/clean-water/clean-water-infor.jpg"/>
                    </picture>
                </div>
                <div class="col-12 col-md-4">
                    <picture>
                        <source srcset="/src/img/eco/clean-water/clean-water-desotec-filter.webp" type="image/webp">
                        <source srcset="/src/img/eco/clean-water/clean-water-desotec-filter.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/clean-water/clean-water-desotec-filter.jpg"/>
                    </picture>
                </div>
                <div class="col-12 col-md-4">
                    <picture>
                        <source srcset="/src/img/eco/clean-water/clean-water-system.webp" type="image/webp">
                        <source srcset="/src/img/eco/clean-water/clean-water-system.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/clean-water/clean-water-system.jpg"/>
                    </picture>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_fr.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>