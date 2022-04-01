<!DOCTYPE html><html lang="nl">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/page_parts/head_common.php');?>
        <title>Veiligheid - Irie Vibes</title>
        <meta property="og:title" content="Veiligheid op Irie Vibes"/>
        <meta property="og:description" content="Er zijn een aantal veiligheidsmaatregelen op het terrein. Bekijk ze hier." />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/nl/_page_parts/header_nl.php');?>
        <div class="container text-center">
            <div class="row text-center pt-4">
                <div class="col-12 col-md-6">
                    <a href="evacuation/">
                        <img alt="" class="img-fluid rounded" src="/src/img/emergency_exit.jpg">
                        <p class="mt-1">Bekijk ons evacuatieplan hier<p>
                    </a>
                </div> 
                <div class="col-12 col-md-6">
                    <a href="quality_nights/">
                        <img alt="" class="img-fluid" src="/src/img/quality_nights.png">
                        <h4>Quality nights, because we care about you!</h4>
                    </a>
                </div>                           
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_nl.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
