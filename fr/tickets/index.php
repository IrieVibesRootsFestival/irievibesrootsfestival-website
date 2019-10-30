<html>
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Tickets - Irie Vibes</title>
        <meta property="og:title" content="Achetez vos Billets"/>
        <meta property="og:description" content="Achetez vos billets de Irie Vibes en prévente avant qu'il ne soit trop tard! C'est l'endroit où tout commence. Irie Vibes vous invite à l'édition de Back to The Roots au cœur de l'été 2019 à Kortemark." /> 
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_fr.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <div class="container content">
            <h1 style="margin-bottom:5px" class="display-7 text-center">Billets</h1>   
            <p class="text-center text-irie"><b>Juillet 18-19-20 2019</b></p>
            <div class="container">
                <div id="prices" class="row justify-content-sm-center">
                    <div class="col-sm-12 order-md-3 text-center mt-md-4">
                        <p class="mx-md-5">Êtes-vous un résident de Kortemark? 
                            Obtenez vos billets à 10 € de réduction sur présentation de votre identifiant.<br/> Pour plus d'informations: <a href="mailto:info@irievibes.be">info@irievibes.be</a></p>
                        <button class="btn btn-pill btn-irie"><a class="text-white" href="https://www.eventbrite.be/e/tickets-irie-vibes-roots-festival-2019-56999174064"><i class="fas fa-shopping-cart"></i> Achetez vos tickets</a></button>
                    </div>
                    <div class="col-sm-4 text-center">
                        <h4 class="my-3"><span class="text-box rounded" data-toggle="tooltip" data-placement="bottom" title="mai 1 - juillet 17">Prévente</span></h4>
                        <div class="price">Jeudi: GRATUIT!</div>
                        <div class="price">Vendredi: 15€</div>
                        <div class="price">Samedi: 20€</div>
                        <div class="price">Week-end: 30€</div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <h4 class="my-3"><span class="text-box rounded" data-toggle="tooltip" data-placement="bottom" title="juillet 18-19-20">Vente d'entrée</span></h4>
                        <div class="price">Jeudi: GRATUIT!</div>
                        <div class="price">Vendredi: €20</div>
                        <div class="price">Samedi: €25</div>
                        <div class="price">Week-end: €35</div>
                    </div>
                </div>
            </div>
            <br/>
            <div id="tickets" class="container text-center">
                <h1>Emplacements de prévente</h1>
                <div class="row">
                    <div class="col-6 col-md-2 p-1"><div class="rounded bg-white p-1"><a href="https://www.facebook.com/Muziekclub.4AD.Diksmuide/"><img class="rounded img-responsive" alt="4AD" src="/src/img/presale/4ad.jpg"></a><p class="my-1">Dixmude</p></div></div>
                    <div class="col-6 col-md-2 p-1"><div class="rounded bg-white p-1"><a href="https://www.facebook.com/Zimbakortrijk/"><img class="rounded img-responsive" src="/src/img/presale/zimbashop.jpg"></a><p class="my-1">Courtrai</p></div></div>
                    <div class="col-6 col-md-2 p-1"><div class="rounded bg-white p-1"><a href="http://www.rojo.be"><img class="rounded img-responsive" alt="Drankcenter Rojo" src="/src/img/presale/rojo.jpg"></a><p class="my-1">Handzame</p></div></div>
                    <div class="col-6 col-md-2 p-1"><div class="rounded bg-white p-1"><a href="https://www.facebook.com/cafebotecogent/"><img class="rounded img-responsive" alt="Café Botègo" src="/src/img/presale/boteco.jpg"></a><p class="my-1">Gand</p></div></div>
                    <div class="col-6 col-md-2 p-1"><div class="rounded bg-white p-1"><a href="https://www.facebook.com/Mr-Steve-barbershop-Roeselare-267312400351270/"><img class="rounded img-responsive" alt="Mr. Steve" src="/src/img/presale/mrsteve.jpg"></a><p class="my-1">Roulers</p></div></div>
                    <div class="col-6 col-md-2 p-1"><div class="rounded bg-white p-1"><a href="https://www.facebook.com/Halte-5-707298666029005/"><img class="rounded img-responsive" alt="Café Halte 5" src="/src/img/presale/halte5.jpg"></a><p class="my-1">Bruges</p></div></div>
                </div>
                <br/>
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
