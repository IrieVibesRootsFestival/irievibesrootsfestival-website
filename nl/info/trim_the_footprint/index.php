<html>
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Trim The Footprint - Irie Vibes</title>
        <meta property="og:title" content="Trim The Footprint"/>
        <meta property="og:description" content="Waar gaat Trim The Footprint over?" />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_nl.php');?>
        <!-- This is the container that allows the slider to be wider --> 
        <div class="container content">
            <?php include($_SERVER['DOCUMENT_ROOT'].'/nl/info/trim_the_footprint/core.php');?>
            <div class="row">
                <!-- map & logos -->
                <div class="col-12 col-md-6 order-md-2">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <a href="https://www.laconditionpublique.com/">
                                <img class="img-fluid rounded" src="/src/img/partners/lacondition.jpg" alt="La Condition Publique">
                            </a>
                        </div>
                        <div class="col-6 mb-3">
                            <a href="https://www.esperanzah.be/">
                                <img class="img-fluid rounded" src="/src/img/partners/esperanzah.jpg" alt="Esperanzah! festival">
                            </a>
                        </div>
                        <div class="col-6 mb-3"><img class="img-fluid rounded" src="/src/img/irievibesrootsfestival-4-3.jpg" alt="Irie Vibes Roots Festival"></div>
                        <div class="col-6 mb-3">
                            <a href="https://www.interreg-fwvl.eu/nl/">
                                <img class="img-fluid rounded" src="/src/img/partners/interreg.jpg" alt="Interreg - France Flanders Wallonie">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-md-1">
                    <div class="mb-md-2"><a href="/src/img/trimthefootprint/map.png"><img class="img-fluid rounded" src="/src/img/trimthefootprint/map.png" alt="Esperanzah! festival"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_nl.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
