<!DOCTYPE html><html lang="fr">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Tickets - Irie Vibes</title>
        <meta property="og:title" content="Achetez vos Billets"/>
        <meta property="og:description" content="Achetez vos billets de Irie Vibes en prévente avant qu'il ne soit trop tard! C'est l'endroit où tout commence. Irie Vibes vous invite à l'édition de Back to The Roots au cœur de l'été 2020 à Kortemark." /> 
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_fr.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <script src="/src/js/eventsquare-embed.js" rel="external" type="text/javascript"></script>
        <!-- This is the main container that encapsulates everything content related. -->
        <div class="container content">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="display-7 text-center m-1">Billets</h3>
                    <p class="text-center text-irie"><b>Juillet 16-17-18 2020</b></p>
                </div>
                <div class="col-12 pb-2 rounded">
                    <div class="p-2 text-box-2 rounded">
                        <div class="rounded" id="eventsquare-store" alt="Eventsquare Store"></div>
                    </div>
                </div>
                <div id="tickets" class="col-12 col-md-6">
                    <h1>Preventes</h1>
                    <ul>
                        <li><b>Roulers</b>: Barbier Steve</li>
                        <li><b>Handzame</b>: Drankencenter Rojo</li>
                        <li><b>Werken</b>: Jeugdhuis De Zunne</li>
                        <li><b>Dixmude</b>: 4AD</li>
                        <li><b>Courtrai</b>: Zimba Shop</li>
                        <li><b>Torhout</b>: RoseHeart Tattoo</li>
                        <li><b>Bruges</b>: Vrijplaats Zundag</li>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <h1>Remises</h1>
                    <p>Êtes-vous un résident de Kortemark? 
                        Obtenez vos billets à 10 € par jour sur présentation de votre identifiant.<br/> Pour plus d'informations: <a href="mailto:info@irievibes.be">info@irievibes.be</a></p>
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
