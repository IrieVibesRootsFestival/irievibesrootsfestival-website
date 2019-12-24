<!DOCTYPE html><html lang="fr">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Gobelets réutilisables - Irie Vibes</title>
        <meta property="og:title" content="Gobelets réutilisables"/>
        <meta property="og:description" content="Chez Irie Vibes, nous utilisons uniquement des gobelets réutilisables. Voulez-vous également des gobelets réutilisables pour votre événement?" />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_fr.php');?>
        <div class="container content">         
            <h1 style="margin-bottom:5px" class="display-7 text-center">Gobelets reutilisables</h1>
            <br/>
            <div class="row">
                <div class="col-12 col-md-9">
                    <p>Vous savez que...</p>
                    <ul>
                        <li>nous utilisons uniquement des gobelets réutilisables depuis le début de Irie Vibes Roots Festival?</li>
                        <li>nos pailles sont dégradables?</li>
                        <li>nos jetons sont fabriquées à partir d’amidon extrait de pelures de pomme de terre et l’encre est entièrement biodégradable dans un an?</li>
                        <li>vous empruntez nos gobelets pendant le festival ? Vous payez un certain montant pour votre premier gobelet et au retour, nous vous rembourserons.</li>
                        <li>vous pouvez échanger les gobelets dans la salle des coupons, mais aussi le dimanche au bar du camping?</li>
                    </ul>
                </div>
                <picture>
                    <source srcset="/src/img/eco/reusable-cups/cups-main.webp" type="image/webp">
                    <source srcset="/src/img/eco/reusable-cups/cups-main.jpg" type="image/jpeg">
                    <img alt="" class="img-fluid rounded" src="/src/img/eco/reusable-cups/cups-main.jpg"/>
                </picture>
                <small>now propres goblets avec logo</small>
            </div>
        </div>
        <!-- Pictures -->
        <div class="row">
            <div class="col-12 col-md-6 p-1">
                <picture>
                    <source srcset="/src/img/eco/reusable-cups/cups-0.webp" type="image/webp">
                    <source srcset="/src/img/eco/reusable-cups/cups-0.jpg" type="image/jpeg">
                    <img alt="" class="img-fluid rounded" src="/src/img/eco/reusable-cups/cups-0.jpg"/>
                </picture>
            </div>
            <div class="col-12 col-md-6 p-1">
                <picture>
                    <source srcset="/src/img/eco/reusable-cups/cups-1.webp" type="image/webp">
                    <source srcset="/src/img/eco/reusable-cups/cups-1.jpg" type="image/jpeg">
                    <img alt="" class="img-fluid rounded" src="/src/img/eco/reusable-cups/cups-1.jpg"/>
                </picture>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_fr.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>