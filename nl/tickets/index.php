<html>
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
                <div class="col-12 py-3">
                    <p class="mx-md-5">Woon je in Kortemark? Koop je tickets aan €10 per dag na het tonen van uw identiteitskaart. Meer info: <a href="mailto:inf@irievibes.be">info@irievibes.be</a></p>
                </div>
                <div id="tickets" class="col-12 text-center">
                    <h1>Voorverkoop-punten</h1>
                    <div class="row">
                        <div class="col-6 col-md-2 p-1"><div class="rounded bg-white p-1"><a href="https://www.facebook.com/Muziekclub.4AD.Diksmuide/"><img class="rounded img-fluid" alt="4AD" src="/src/img/presale/4ad.jpg"></a><p class="my-1">Diksmuide</p></div></div>
                        <div class="col-6 col-md-2 p-1"><div class="rounded bg-white p-1"><a href="https://www.facebook.com/Zimbakortrijk/"><img class="rounded img-fluid" src="/src/img/presale/zimbashop.jpg"></a><p class="my-1">Kortrijk</p></div></div>
                        <div class="col-6 col-md-2 p-1"><div class="rounded bg-white p-1"><a href="http://www.rojo.be"><img class="rounded img-fluid" alt="Drankcenter Rojo" src="/src/img/presale/rojo.jpg"></a><p class="my-1">Handzame</p></div></div>
                        <div class="col-6 col-md-2 p-1"><div class="rounded bg-white p-1"><a href="https://www.facebook.com/cafebotecogent/"><img class="rounded img-fluid" alt="Café Botègo" src="/src/img/presale/boteco.jpg"></a><p class="my-1">Gent</p></div></div>
                        <div class="col-6 col-md-2 p-1"><div class="rounded bg-white p-1"><a href="https://www.facebook.com/Mr-Steve-barbershop-Roeselare-267312400351270/"><img class="rounded img-fluid" alt="Mr. Steve" src="/src/img/presale/mrsteve.jpg"></a><p class="my-1">Roeselare</p></div></div>
                        <div class="col-6 col-md-2 p-1"><div class="rounded bg-white p-1"><a href="https://www.facebook.com/Halte-5-707298666029005/"><img class="rounded img-fluid" alt="Café Halte 5" src="/src/img/presale/halte5.jpg"></a><p class="my-1">Brugge</p></div></div>
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
