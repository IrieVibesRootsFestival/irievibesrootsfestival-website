<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/_page_parts/head_common.php');?>
        <title>Tickets - Irie Vibes</title>
        <meta property="og:title" content="Achetez vos Billets"/>
        <meta property="og:description" content="Achetez vos billets de Irie Vibes en prévente avant qu'il ne soit trop tard! C'est l'endroit où tout commence. Irie Vibes vous invite à l'édition de Back to The Roots au cœur de l'été 2021 à Kortemark." /> 
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/fr/_page_parts/header_fr.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <script src="/src/js/eventsquare-embed.js" rel="external" type="text/javascript"></script>
        <!-- This is the main container that encapsulates everything content related. -->
        <div class="container content">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-header">Infos billet</h1>
                </div>
                <div class="col-12 col-md-6">
                    <h1>Remises</h1>
                    <p>Êtes-vous un résident de Kortemark? Obtenez vos billets à 10 € par jour sur présentation de votre identifiant.</p>
                    <p>Entrée gratuite lors de l'utilisation de votre carte <b>Vrijetijdspas</b> ou <b>Cultuur Kortemark</b></p>
                    <p>Pour plus d'informations: <a href="mailto:info@irievibes.be">info@irievibes.be</a></p>
                    <div class="row">
                        <div class="col-6">
                            <picture>
                                <source srcset="/src/img/partners/vtpas.webp" type="image/webp">
                                <source srcset="/src/img/partners/vtpas.jpg" type="image/jpeg">
                                <img alt="" class="img-fluid rounded" src="/src/img/partners/vtpas.jpg"/>
                            </picture>
                        </div>
                        <div class="col-6">
                            <picture>
                                <source srcset="/src/img/partners/cultuurkortemark.webp" type="image/webp">
                                <source srcset="/src/img/partners/cultuurkortemark.jpg" type="image/jpeg">
                                <img alt="" class="img-fluid rounded" src="/src/img/partners/cultuurkortemark.jpg"/>
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/fr/_page_parts/footer_fr.php');?>     
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'_page_parts/load_last.php');?>
</html>
