<!DOCTYPE html>
<html lang="nl">

<head>
    <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/_page_parts/head_common.php'); ?>
    <title>Ticketprijzen - Irie Vibes</title>
    <meta property="og:title" content="Ticketprijzen" />
    <meta property="og:description" content="Informatie over de ticketprijzen." />
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nl/_page_parts/header_nl.php'); ?>
    <!-- EventSquare requires loading before the DOM -->
    <script src="/src/js/eventsquare-embed.js" rel="external" type="text/javascript"></script>
    <!-- This is the main container that encapsulates everything content related. -->
    <div class="container content">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-header">Ticket Info</h1>
            </div>
            <div id="pricing" class="col-12 col-md-6"><!-- Pricing -->
                <h1>Pricing</h1>
                <p>
                    Aan-de-deur prijzen zijn geldig voor alle tickets die aan de ingang van het festival worden aangekocht.<br />
                    Voorzieningen zijn bijkomende toegangen voor verscheidene voorzieningen die je zou nodig hebben. 
                </p>
                <p><small>Alle prijzen zijn per persoon. Kinderen onder 12 jaar krijgen gratis toegang. Voor meer info, stuur ons een bericht: <a href="mailto:info@irievibes.be">info@irievibes.be</a></small></p>
                <div id="pricing_categories" class="row"><!-- Pricing: categories -->
                    <div id="pricing_categories_festival" class="col-12 col-md-6">
                        <h2>Festival</h2>
                        <ul>
                            <li><b>Vrijdag:</b> €25 <small>22 Juli</small></li>
                            <li><b>Zaterdag:</b> €35 <small>23 Juli</small></li>
                            <li><b>Weekend:</b> €45 <small>22 & 23 Juli</small></li>
                        </ul>
                    </div>
                    <div id="pricing_categories_ammenities" class="col-12 col-md-6">
                        <h2>Voorzieningen</h2>
                        <ul>
                            <li><b>Camping:</b> €10 <small>oranje</small></li>
                            <li><b>Toiletten:</b> €2 <small>geel</small></li>
                        </ul>
                        <p>Camping tickets geven toegang tot de douches en toiletten op locatie.<br/>
                        Toilet toegang <small>("pipibandje")</small> is geldig voor het hele weekend.</p>
                    </div>
                </div><!-- END Pricing: categories -->
            </div><!-- END Pricing -->
            <div id="discounts" class="col-12 col-md-6"><!-- Discounts -->
                <h1>Kortingen</h1>
                <p>Ben je een inwoner van Kortemark? Koop je tickets aan €10 per dag bij vertoon van je eID! Vergeet deze niet mee te nemen.</p>
                <p>Gratis ingang wanneer je jouw <b>Vrijetijdspas</b> of <b>Cultuur Kortemark kaart</b> gebruikt</p>
                <p>Voor meer info, stuur ons een bericht: <a href="mailto:info@irievibes.be">info@irievibes.be</a></p>
                <div id="discounts_pictures" class="row"><!-- Discounts: pictures -->
                    <div class="col-6">
                        <picture>
                            <source srcset="/src/img/partners/vtpas.webp" type="image/webp">
                            <source srcset="/src/img/partners/vtpas.jpg" type="image/jpeg">
                            <img alt="" class="img-fluid rounded" src="/src/img/partners/vtpas.jpg" />
                        </picture>
                    </div>
                    <div class="col-6">
                        <picture>
                            <source srcset="/src/img/partners/cultuurkortemark.webp" type="image/webp">
                            <source srcset="/src/img/partners/cultuurkortemark.jpg" type="image/jpeg">
                            <img alt="" class="img-fluid rounded" src="/src/img/partners/cultuurkortemark.jpg" />
                        </picture>
                    </div>
                </div><!-- END Discounts: pictures -->
            </div><!-- END Discounts -->
        </div>
    </div>
    <!-- Include Footer -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nl/_page_parts/footer_nl.php'); ?>
</body>
<!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/_page_parts/load_last.php'); ?>

</html>