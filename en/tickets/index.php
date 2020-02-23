<!DOCTYPE html><html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Tickets - Irie Vibes</title>
        <meta property="og:title" content="Early Birds! Buy your tickets!"/>
        <meta property="og:description" content="The Early Bird ticket sale has started, and lasts until January 5th. Be quick! Supply is limited and the prices are hot!" /> 
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_en.php');?>
        <!-- EventSquare requires loading before the DOM -->
        <script src="/src/js/eventsquare-embed.js" rel="external" type="text/javascript"></script>
        <!-- This is the main container that encapsulates everything content related. -->
        <div class="container content">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="display-7 text-center m-1">Tickets</h3>
                    <p class="text-center text-irie"><b>July 16-17-18 2020</b></p>
                </div>
                <div class="col-12 pb-2 rounded">
                    <div class="p-2 text-box-2 rounded">
                        <div class="rounded" id="eventsquare-store" alt="Eventsquare Store"></div>
                    </div>
                </div>
                <div id="tickets" class="col-12 col-md-6">
                    <h1>Presale stores</h1>
                    <ul>
                        <li><b>Roeselare</b>: Barbier Steve</li>
                        <li><b>Handsam</b>: Drankencenter Rojo</li>
                        <li><b>Werken</b>: Jeugdhuis De Zunne</li>
                        <li><b>Diksmuide</b>: 4AD</li>
                        <li><b>Kortrijk</b>: Zimba Shop</li>
                        <li><b>Torhout</b>: RoseHeart Tattoo</li>
                        <li><b>Bruges</b>: Vrijplaats Zundag</li>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <h1>Korting</h1>
                    <p>Are you a resident from Kortemark? Get your tickets at €10 a day, upon showing your ID. <br/>For more info: <a href="mailto:inf@irievibes.be">info@irievibes.be</a></p>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
