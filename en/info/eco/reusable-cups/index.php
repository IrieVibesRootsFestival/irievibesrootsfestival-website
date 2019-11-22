<html>
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Reusable cups - Irie Vibes</title>
        <meta property="og:title" content="Reusable cups"/>
        <meta property="og:description" content="We only use reusable cups on Irie Vibes. Do you need reusable cups for your event? Find them here!" />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_en.php');?>
        <div class="container content">         
            <h1 style="margin-bottom:5px" class="display-7 text-center">Reusable cups</h1>
            <br/>
            <div class="row">
                <div class="col-12 col-md-9">
                    <p>Did you know that...</p>
                    <ul>
                        <li>we have been using reusable cups since the beginning of Irie Vibes Roots Festival?</li>
                        <li>we use biodegradable straws for our cocktails?</li>
                        <li>our drink vouchers are made from potato peel starches and the ink is biodegradable within one year?</li>
                        <li>you can borrow our cups during the festival? You pay a guarantee for the first cup and we refund it back to you when you return it.</li>
                        <li>you can hand in the cups at the voucher salespoint, but also at the campingbar on Sunday morning?</li>
                    </ul>
                </div>
                <picture>
                    <source srcset="/src/img/eco/reusable-cups/cups-main.webp" type="image/webp">
                    <source srcset="/src/img/eco/reusable-cups/cups-main.jpg" type="image/jpeg">
                    <img class="img-fluid rounded" src="/src/img/eco/reusable-cups/cups-main.jpg"/>
                </picture>
                <small>our own cups with logo</small>
            </div>
        </div>
        <!-- Pictures -->
        <div class="row">
            <div class="col-12 col-md-6 p-1">
                <picture>
                    <source srcset="/src/img/eco/reusable-cups/cups-0.webp" type="image/webp">
                    <source srcset="/src/img/eco/reusable-cups/cups-0.jpg" type="image/jpeg">
                    <img class="img-fluid rounded" src="/src/img/eco/reusable-cups/cups-0.jpg"/>
                </picture>
            </div>
            <div class="col-12 col-md-6 p-1">
                <picture>
                    <source srcset="/src/img/eco/reusable-cups/cups-1.webp" type="image/webp">
                    <source srcset="/src/img/eco/reusable-cups/cups-1.jpg" type="image/jpeg">
                    <img class="img-fluid rounded" src="/src/img/eco/reusable-cups/cups-1.jpg"/>
                </picture>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>