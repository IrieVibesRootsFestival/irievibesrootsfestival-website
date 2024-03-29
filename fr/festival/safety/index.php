<!DOCTYPE html><html lang="fr">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/_page_parts/head_common.php');?>
        <title>Plan D'evacuation - Irie Vibes</title>
        <meta property="og:title" content="Plan D'evacuation"/>
        <meta property="og:description" content="Comment puis-je évacuer le terrain en toute sécurité? Ceci est pour la sécurité." />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/fr/_page_parts/header_fr.php');?>
        <div class="container text-center">
            <div class="row text-center pt-4">
                <div class="col-12 col-md-6">
                    <a href="evacuation/">
                        <img alt="" class="img-fluid rounded" src="/src/img/emergency_exit.jpg">
                        <p class="mt-1">Voir notre plan d'évacuation ici<p>
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
        <?php include($_SERVER['DOCUMENT_ROOT'].'/fr/_page_parts/footer_fr.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/_page_parts/load_last.php');?>
</html>
