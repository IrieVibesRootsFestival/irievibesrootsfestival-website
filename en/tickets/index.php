<html>
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Tickets - Irie Vibes</title>
        <meta property="og:title" content="Buy your tickets"/>
        <meta property="og:description" content="Buy your Irie Vibes tickets in presale before it's too late! This is the place where it all begins. Irie Vibes invites you to their Back to The Roots edition during the heart of summer 2019 in Kortemark." /> 
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_en.php');?>
        <!-- EventSquare requires loading before the DOM -->
        <script src="/src/js/eventsquare-embed.js" rel="external" type="text/javascript"></script>
        <!-- This is the main container that encapsulates everything content related. -->
        <div class="container content">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="display-7 text-center">Tickets</h3>
                    <p class="text-center text-irie"><b>July 16-17-18 2020</b></p>
                </div>
                <div class="col-12">
                    <p class="mx-md-5">Are you a resident from Kortemark? Get your tickets at €10 off, upon showing your ID. <br/>For more info: <a href="mailto:inf@irievibes.be">info@irievibes.be</a></p>
                    <div id="eventsquare-store"></div>
                    <div id="prices" class="row justify-content-sm-center d-none">
                        <div class="col-sm-12 order-md-3 text-center mt-md-4">
                            <p class="mx-md-5">Are you a resident from Kortemark? Get your tickets at €10 off, upon showing your ID. <br/>For more info: <a href="mailto:inf@irievibes.be">info@irievibes.be</a></p>
                            <button class="btn btn-pill btn-irie"><a class="text-white" href="https://www.eventbrite.be/e/tickets-irie-vibes-roots-festival-2019-56999174064"><i class="fas fa-shopping-cart"></i> Buy Tickets</a></button>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h4 class="my-3"><span class="text-box rounded" data-toggle="tooltip" data-placement="bottom" title="March 1 - July 17">Presale</span></h4>
                            <div class="price">Thursday: FREE!</div>
                            <div class="price">Friday: €15</div>
                            <div class="price">Saturday: €20</div>
                            <div class="price">Weekend: €30</div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h4 class="my-3"><span class="text-box rounded" data-toggle="tooltip" data-placement="bottom" title="July 18-19-20">Entry sale</span></h4>
                            <div class="price">Thursday: FREE!</div>
                            <div class="price">Friday: €20</div>
                            <div class="price">Saturday: €25</div>
                            <div class="price">Weekend: €35</div>
                        </div> 
                    </div>
                </div>
                <br/>
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
