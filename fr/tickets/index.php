<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/_page_parts/head_common.php'); ?>
    <title>Ticket pricing - Irie Vibes</title>
    <meta property="og:title" content="Ticket pricing" />
    <meta property="og:description" content="Informations sur le prix des billets." />
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/fr/_page_parts/header_en.php'); ?>
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
                <h1>Prix</h1>
                <p>
                    Le tarif à la porte est valable pour tous les billets achetés à l'entrée du festival.<br />
                    Les équipements sont des bracelets accessoires pour divers services dont vous pourriez avoir besoin.
                </p>
                <p><small>Tous les prix sont par personne. Les enfants jusqu'à 12 ans ont l'entrée gratuite. Pour plus d'informations, envoyez-nous un message:<a href="mailto:info@irievibes.be">info@irievibes.be</a></small></p>
                <div id="pricing_categories" class="row">
                    <!-- Pricing: categories -->
                    <div id="pricing_categories_festival" class="col-12 col-md-6">
                        <h2>Festival</h2>
                        <ul>
                            <li><b>Vendredi:</b> €25 <small>Juillet 22</small></li>
                            <li><b>Samedi:</b> €35 <small>Juillet 23</small></li>
                            <li><b>Week-end:</b> €45 <small>Juillet 22 & 23</small></li>
                        </ul>
                    </div>
                    <div id="pricing_categories_ammenities" class="col-12 col-md-6">
                        <h2>Agréments</h2>
                        <ul>
                            <li><b>Camping:</b> €10 <small>orange</small></li>
                            <li><b>Toilettes:</b> €2 <small>jaune</small></li>
                        </ul>
                        <p>
                            Les billets de camping incluent l'accès aux douches et aux toilettes sur place.<br />
                            L'accès aux toilettes <small>("pipibandje")</small> est valable pour tout le week-end.
                        </p>
                    </div>
                </div><!-- END Pricing: categories -->
            </div><!-- END Pricing -->
            <div id="discounts" class="col-12 col-md-6">
                <!-- Discounts -->
                <h1>Réductions</h1>
                <p>Êtes-vous un résident de Kortemark? Obtenez vos billets à 10 € par jour après vérification avec votre eID. N'oubliez pas d'apporter ceci avec vous !</p>
                <p>Entrée gratuite avec votre carte <b>"Vrijetijdspas"</b> ou votre carte <b>Culture Kortemark</b></p>
                <p>Pour plus d'informations, envoye-nous un message: <a href="mailto:info@irievibes.be">info@irievibes.be</a></p>
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
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/fr/_page_parts/footer_en.php'); ?>
</body>
<!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/_page_parts/load_last.php'); ?>

</html>