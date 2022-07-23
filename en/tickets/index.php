<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/_page_parts/head_common.php'); ?>
    <title>Ticket pricing - Irie Vibes</title>
    <meta property="og:title" content="Ticket pricing" />
    <meta property="og:description" content="Informations sur le prix des billets." />
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/en/_page_parts/header_en.php'); ?>
    <!-- EventSquare requires loading before the DOM -->
    <script src="/src/js/eventsquare-embed.js" rel="external" type="text/javascript"></script>
    <!-- This is the main container that encapsulates everything content related. -->
    <div class="container content">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-header">Ticket Info</h1>
            </div>
            <div id="pricing" class="col-12 col-md-6">
                <!-- Pricing -->
                <h1>Pricing</h1>
                <p>
                    At the door pricing is valid for all tickets bought at the entrance of the festival.<br />
                    Ammenities are accessory bracelets for various services you might want to make use of.
                </p>
                <p><small>All prices are per person. Children up to 14 years old have free entry. For more info: <a href="mailto:info@irievibes.be">info@irievibes.be</a></small></p>
                <div id="pricing_categories" class="row">
                    <!-- Pricing: categories -->
                    <div id="pricing_categories_festival" class="col-12 col-md-6">
                        <h2>Festival</h2>
                        <ul>
                            <li><b>Friday:</b> €25 <small>July 22</small></li>
                            <li><b>Saturday:</b> €35 <small>July 23</small></li>
                            <li><b>Weekend:</b> €45 <small>July 22 & 23</small></li>
                        </ul>
                    </div>
                    <div id="pricing_categories_ammenities" class="col-12 col-md-6">
                        <h2>Ammenities</h2>
                        <ul>
                            <li><b>Camping:</b> €10 <small>orange</small></li>
                            <li><b>Toilets:</b> €2 <small>yellow</small></li>
                        </ul>
                        <p>
                            Camping tickets include access to the showers and toilets on-site.<br />
                            Toilet access <small>("pipibandje")</small> is valid for the entire weekend.
                        </p>
                    </div>
                </div><!-- END Pricing: categories -->
            </div><!-- END Pricing -->
            <div id="discounts" class="col-12 col-md-6">
                <!-- Discounts -->
                <h1>Discounts</h1>
                <p>Are you a resident from Kortemark? Get your tickets at €10 a day upon verifying with your eID. Don't forget to bring this with you!</p>
                <p>Free entry when using your <b>Vrijetijdspas</b> card or <b>Cultuur Kortemark</b> card</p>
                <p>For more info: <a href="mailto:info@irievibes.be">info@irievibes.be</a></p>
                <div id="discounts_pictures" class="row">
                    <!-- Discounts: pictures -->
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
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/en/_page_parts/footer_en.php'); ?>
</body>
<!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/_page_parts/load_last.php'); ?>

</html>