<html>
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Tickets - Irie Vibes</title>
        <meta property="og:title" content="Koop je tickets"/>
        <meta property="og:description" content="Koop je Irie Vibes tickets in voorverkoop, voor het te laat is! Dit is de plek waar het allemaal begint. Irie Vibes nodigt je uit voor de Back to The Roots editie tijdens hartje zomer 2019 in Kortemark." /> 
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_nl.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <div class="container content">
            <h1 style="margin-bottom:5px" class="display-7 text-center">Tickets</h1>   
            <p class="text-center text-irie"><b>July 18-19-20 2019</b></p>
            <div id="prices" class="row justify-content-sm-center">
                <div class="col-sm-12 order-md-3 text-center mt-md-4">
                    <p class="mx-md-5">Woon je in Kortemark? Koop je tickets met €10 korting na het tonen van uw identiteitskaart. <br/>Meer info: <a href="mailto:info@irievibes.be">info@irievibes.be</a></p>
                    <button class="btn btn-pill btn-irie"><a class="text-white" href="https://www.eventbrite.be/e/tickets-irie-vibes-roots-festival-2019-56999174064"><i class="fas fa-shopping-cart"></i> Koop tickets</a></button>
                </div>
                <div class="col-sm-4 text-center">
                    <h4 class="my-3"><span class="text-box rounded" data-toggle="tooltip" data-placement="bottom" title="1 mei - 17 juli">Voorverkoop</span></h4>
                    <div class="price">Donderdag: GRATIS!</div>
                    <div class="price">Vrijdag: €15</div>
                    <div class="price">Zaterdag: €20</div>
                    <div class="price">Weekend: €30</div>
                </div>
                <div class="col-sm-4 text-center">
                    <h4 class="my-3"><span class="text-box rounded" data-toggle="tooltip" data-placement="bottom" title=" 18-19-20 juli">Aan de deur</span></h4>
                    <div class="price">Donderdag: GRATIS!</div>
                    <div class="price">Vrijdag: €20</div>
                    <div class="price">Zaterdag: €25</div>
                    <div class="price">Weekend: €35</div>
                </div>
            </div>
            <br/>
            <div id="tickets" class="container text-center">
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
