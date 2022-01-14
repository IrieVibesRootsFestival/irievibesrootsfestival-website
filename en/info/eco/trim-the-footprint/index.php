<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/page_parts/head_common.php');?>
        <title>Trim The Footprint - Irie Vibes</title>
        <meta property="og:title" content="Trim The Footprint"/>
        <meta property="og:description" content="Trim The Footprint is Greenforward's project towards educating groups about a greener world. Learn more about what we do on our Trim The Footprint pages." />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/en/page_parts/header_en.php');?>
        <!-- This is the container that allows the slider to be wider --> 
        <div class="container content">
            <?php include($_SERVER['DOCUMENT_ROOT'].'/en/info/eco/trim-the-footprint/core.php');?>
            <div class="row">
                <!-- map & logos -->
                <div class="col-12 col-md-6 order-md-2">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <a href="https://www.laconditionpublique.com/">
                                <img alt="" class="img-fluid rounded" src="/src/img/partners/lacondition.jpg" alt="La Condition Publique">
                            </a>
                        </div>
                        <div class="col-6 mb-3">
                            <a href="https://www.esperanzah.be/engagement/trim-the-footprint/">
                                <img alt="" class="img-fluid rounded" src="/src/img/partners/esperanzah.jpg" alt="Esperanzah! festival">
                            </a>
                        </div>
                        <div class="col-6 mb-3"><img alt="" class="img-fluid rounded" src="/src/img/irievibesrootsfestival-4-3.jpg" alt="Irie Vibes Roots Festival"></div>
                        <div class="col-6 mb-3">
                            <a href="https://www.interreg-fwvl.eu/nl/">
                                <img alt="" class="img-fluid rounded" src="/src/img/partners/interreg.jpg" alt="Interreg - France Flanders Wallonie">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-md-1">
                    <div class="mb-md-2">
                        <a href="/src/img/eco/trim-the-footprint/map.png">
                            <picture>
                                <source srcset="/src/img/eco/trim-the-footprint/map.webp" type="image/webp">
                                <source srcset="/src/img/eco/trim-the-footprint/map.png" type="image/png">
                                <img alt="" class="img-fluid rounded" src="/src/img/eco/trim-the-footprint/map.png" alt="Esperanzah! festival">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
