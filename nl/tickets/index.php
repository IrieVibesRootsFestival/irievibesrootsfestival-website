<!DOCTYPE html><html lang="nl">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Tickets - Irie Vibes</title>
        <meta property="og:title" content="He, vroege vogel! Koop je ticket!"/>
        <meta property="og:description" content="De Early Bird ticketverkoop is gestart en duurt tot 5 januari 2020. Wees snel! Het aanbod is beperkt en de prijzen zijn hot!" /> 
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_nl.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <script src="/src/js/eventsquare-embed.js" rel="external" type="text/javascript"></script>
        <!-- This is the main container that encapsulates everything content related. -->
        <div class="container content">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="display-7 text-center m-1">Tickets</h3>
                    <p class="text-center text-irie"><b>Juli 16-17-18 2020</b></p>
                </div>
                <div class="col-12 rounded">
                    <div class="p-2 text-box-2 rounded">
                        <div class="rounded" id="eventsquare-store" alt="Eventsquare Store"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <p class="mx-md-5">Woon je in Kortemark? Koop je tickets aan €10 per dag na het tonen van uw identiteitskaart. Meer info: <a href="mailto:inf@irievibes.be">info@irievibes.be</a></p>
                </div>
                <div id="tickets" class="col-12 col-md-6">
                    <h1>Voorverkoop-punten</h1>
                    <ul>
                        <li><b>Roeselare</b>: Barbier Steve</li>
                        <li><b>Handzame</b>: Drankencenter Rojo</li>
                        <li><b>Werken</b>: Jeugdhuis De Zunne</li>
                        <li><b>Diksmuide</b>: 4AD</li>
                        <li><b>Kortrijk</b>: Zimba Shop</li>
                        <li><b>Torhout</b>: RoseHeart Tattoo</li>
                        <li><b>Brugge</b>: Vrijplaats Zundag</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_nl.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
    <!-- Initialize tooltips -->
    <script>        
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</html>
