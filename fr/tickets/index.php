<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Tickets - Irie Vibes</title>
        <meta property="og:title" content="Achetez vos Billets"/>
        <meta property="og:description" content="Achetez vos billets de Irie Vibes en prévente avant qu'il ne soit trop tard! C'est l'endroit où tout commence. Irie Vibes vous invite à l'édition de Back to The Roots au cœur de l'été 2021 à Kortemark." /> 
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_fr.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <script src="/src/js/eventsquare-embed.js" rel="external" type="text/javascript"></script>
        <!-- This is the main container that encapsulates everything content related. -->
        <div class="container content">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-header">Billets</h1>
                    <p class="text-center text-irie"><b>Juillet 15-16-17 2021</b></p>
                </div>
                <div class="col-12 pb-2 rounded">
                    <div class="p-2 text-box-2 rounded">
                        <div class="rounded" id="eventsquare-store" alt="Eventsquare Store"></div>
                    </div>
                </div>
                <div id="tickets" class="col-12 col-md-6">
                    <h1>Preventes</h1>
                    <ul>
                        <li><b>Roulers</b>: <a href="https://facebook.com/Mr-Steve-barbershop-Roeselare-267312400351270/">Barbier Steve</a></li>
                        <li><b>Handzame</b>: <a href="http://www.rojo.be/">Drankencenter Rojo</a></li>
                        <li><b>Werken</b>: <a href="https://www.facebook.com/Jeugdhuisdezunne/">Jeugdhuis De Zunne</a></li>
                        <li><b>Dixmude</b>: <a href="https://www.4ad.be/">4AD</a></li>
                        <li><b>Courtrai</b>: <a href="https://www.facebook.com/Zimbakortrijk/">Zimba Shop</a></li>
                        <li><b>Torhout</b>: <a href="https://janeleenders.wixsite.com/mijnsite">RoseHeart Tattoo</a></li>
                        <li class="text-disabled"><s><b>Bruges</b>: <a href="">Vrijplaats Zundag</a></s></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <h1>DRemises</h1>
                    <ul>
                    <li>Êtes-vous un résident de Kortemark? 
                        Obtenez vos billets à 10 € par jour sur présentation de votre identifiant.</li>
                        <li>Entrée gratuite lors de l'utilisation de votre carte Vrijetijdspas ou Cultuur Kortemark</li>
                    </ul>
                    <p>Pour plus d'informations: <a href="mailto:inf@irievibes.be">info@irievibes.be</a></p>
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
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_fr.php');?>     
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
    <!-- override Class Active in nav -->
    <script>
        $(document).ready(function() {
            // get current URL path and assign 'active' class
            var pathname = window.location.pathname;
            $('nav li > a[href="/fr/tickets/"]').parent().addClass('active');
        })</script>
</html>
