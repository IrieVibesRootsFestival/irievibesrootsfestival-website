<!DOCTYPE html>
<html lang="nl">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Tickets - Irie Vibes</title>
        <meta property="og:title" content="He, vroege vogel! Koop je ticket!"/>
        <meta property="og:description" content="De Early Bird ticketverkoop is gestart en duurt tot 5 januari 2021. Wees snel! Het aanbod is beperkt en de prijzen zijn hot!" /> 
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
                    <p class="text-center text-irie"><b>Juli 15-16-17 2021</b></p>
                </div>
                <div class="col-12 pb-2 rounded">
                    <div class="p-2 text-box-2 rounded">
                        <div class="rounded" id="eventsquare-store" alt="Eventsquare Store"></div>
                    </div>
                </div>
                <div id="tickets" class="col-12 col-md-6">
                    <h1>Voorverkoop-punten</h1>
                    <ul>
                        <li><b>Roeselare</b>: <a href="https://facebook.com/Mr-Steve-barbershop-Roeselare-267312400351270/">Barbier Steve</a></li>
                        <li><b>Handzame</b>: <a href="http://www.rojo.be/">Drankencenter Rojo</a></li>
                        <li><b>Werken</b>: <a href="https://www.facebook.com/Jeugdhuisdezunne/">Jeugdhuis De Zunne</a></li>
                        <li><b>Diksmuide</b>: <a href="https://www.4ad.be/">4AD</a></li>
                        <li><b>Kortrijk</b>: <a href="https://www.facebook.com/Zimbakortrijk/">Zimba Shop</a></li>
                        <li><b>Torhout</b>: <a href="https://janeleenders.wixsite.com/mijnsite">RoseHeart Tattoo</a></li>
                        <li class="text-disabled"><s><b>Brugge</b>: <a href="">Vrijplaats Zundag</a></s></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <h1>Korting</h1>
                    <ul>
                    <li>Woon je in Kortemark? Koop je tickets aan €10 per dag na het tonen van uw identiteitskaart.</li>
                        <li>Gratis toegang op vertoon van een vrijetijdspas of cultuurpas Kortemark</li>
                    </ul>
                    <p>Meer info: <a href="mailto:inf@irievibes.be">info@irievibes.be</a></p>
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
