<html>
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
                <div class="col-12 rounded"><div class="p-2 text-box-2 rounded"><div class="rounded" id="eventsquare-store" alt="Eventsquare Store"></div></div></div>
                <div class="col-12">
                        <p class="mx-md-5">Are you a resident from Kortemark? Get your tickets at €10 off, upon showing your ID. <br/>For more info: <a href="mailto:inf@irievibes.be">info@irievibes.be</a></p>
                        <br/> 
                    </div>
                <div id="tickets" class="col-12 text-center">
                    <h1>Presale Shops</h1>
                    <div class="row">
                        <div class="col-6 col-md-2 p-1"><div class="rounded bg-white p-1"><a href="https://www.facebook.com/Muziekclub.4AD.Diksmuide/"><img class="rounded img-fluid" alt="4AD" src="/src/img/presale/4ad.jpg"></a><p class="my-1">Diksmuide</p></div></div>
                        <div class="col-6 col-md-2 p-1"><div class="rounded bg-white p-1"><a href="https://www.facebook.com/Zimbakortrijk/"><img class="rounded img-fluid" src="/src/img/presale/zimbashop.jpg"></a><p class="my-1">Kortrijk</p></div></div>
                        <div class="col-6 col-md-2 p-1"><div class="rounded bg-white p-1"><a href="http://www.rojo.be"><img class="rounded img-fluid" alt="Drankcenter Rojo" src="/src/img/presale/rojo.jpg"></a><p class="my-1">Handzame</p></div></div>
                        <div class="col-6 col-md-2 p-1"><div class="rounded bg-white p-1"><a href="https://www.facebook.com/cafebotecogent/"><img class="rounded img-fluid" alt="Café Botègo" src="/src/img/presale/boteco.jpg"></a><p class="my-1">Ghent</p></div></div>
                        <div class="col-6 col-md-2 p-1"><div class="rounded bg-white p-1"><a href="https://www.facebook.com/Mr-Steve-barbershop-Roeselare-267312400351270/"><img class="rounded img-fluid" alt="Mr. Steve" src="/src/img/presale/mrsteve.jpg"></a><p class="my-1">Roeselare</p></div></div>
                        <div class="col-6 col-md-2 p-1"><div class="rounded bg-white p-1"><a href="https://www.facebook.com/Halte-5-707298666029005/"><img class="rounded img-fluid" alt="Café Halte 5" src="/src/img/presale/halte5.jpg"></a><p class="my-1">Bruges</p></div></div>
                    </div>
                    <br/>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
