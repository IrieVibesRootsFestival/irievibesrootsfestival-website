<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/page_parts/head_common.php');?>
        <title>Tickets - Irie Vibes</title>
        <meta property="og:title" content="Early Birds! Buy your tickets!"/>
        <meta property="og:description" content="The Early Bird ticket sale has started, and lasts until January 5th. Be quick! Supply is limited and the prices are hot!" /> 
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/en/page_parts/header_en.php');?>
        <!-- EventSquare requires loading before the DOM -->
        <script src="/src/js/eventsquare-embed.js" rel="external" type="text/javascript"></script>
        <!-- This is the main container that encapsulates everything content related. -->
        <div class="container content">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-header">Tickets</h1>
                    <p class="text-center text-irie"><b>22/23/24 July 2022</b></p>
                </div>
                <div class="col-12 pb-2 rounded">
                    <div class="p-2 text-box-2 rounded">
                    <h3>Ticket sales are currently on hold. No tickets are sold at physical shop locations, nor online.</h3>
                        <!--<div class="rounded" id="eventsquare-store" alt="Eventsquare Store"></div>-->
                    </div>
                </div>
                <div id="tickets" class="col-12 col-md-6">
                    <h1>Presale stores</h1>
                    <h3>Ticket sales are currently halted.</h3>
                    <ul>
                        <li><b>Roeselare</b>: <a href="https://facebook.com/Mr-Steve-barbershop-Roeselare-267312400351270/">Barbier Steve</a></li>
                        <li><b>Handsam</b>: <a href="http://www.rojo.be/">Drankencenter Rojo</a></li>
                        <li><b>Werken</b>: <a href="https://www.facebook.com/Jeugdhuisdezunne/">Jeugdhuis De Zunne</a></li>
                        <li><b>Diksmuide</b>: <a href="https://www.4ad.be/">4AD</a></li>
                        <li><b>Kortrijk</b>: <a href="https://www.facebook.com/Zimbakortrijk/">Zimba Shop</a></li>
                        <li><b>Torhout</b>: <a href="https://janeleenders.wixsite.com/mijnsite">RoseHeart Tattoo</a></li>
                        <li><s><b>Bruges</b>: <a>Vrijplaats Zundag</a></s></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <h1>Discounts</h1>
                    <ul>
                    <li>Are you a resident from Kortemark? Get your tickets at €10 a day, upon showing your ID.</li>
                        <li>Free entry when using your Vrijetijdspas or Cultuur Kortemark card</li>
                    </ul>
                    <p>For more info: <a href="mailto:inf@irievibes.be">info@irievibes.be</a></p>
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
        <?php include($_SERVER['DOCUMENT_ROOT']."/en/page_parts/footer_en.php");?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
