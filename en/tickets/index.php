<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/_page_parts/head_common.php');?>
    <title>Tickets - Irie Vibes</title>
    <meta property="og:title" content="Early Birds! Buy your tickets!" />
    <meta property="og:description"
        content="The Early Bird ticket sale has started, and lasts until January 5th. Be quick! Supply is limited and the prices are hot!" />
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/en/_page_parts/header_en.php');?>
    <!-- EventSquare requires loading before the DOM -->
    <script src="/src/js/eventsquare-embed.js" rel="external" type="text/javascript"></script>
    <!-- This is the main container that encapsulates everything content related. -->
    <div class="container content">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-header">Ticket Info</h1>
            </div>
            <div class="col-12 col-md-6">
                <h1>Discounts</h1>
                <p>Are you a resident from Kortemark? Get your tickets at €10 a day, upon showing your ID.</p>
                <p>Free entry when using your <b>Vrijetijdspas</b> card or <b>Cultuur Kortemark</b> card</p>
                <p>For more info: <a href="mailto:info@irievibes.be">info@irievibes.be</a></p>
                <div class="row">
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
                </div>
            </div>
        </div>
    </div>
    <!-- Include Footer -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/en/_page_parts/footer_en.php');?>
</body>
<!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
<?php include($_SERVER['DOCUMENT_ROOT'].'_page_parts/load_last.php');?>

</html>