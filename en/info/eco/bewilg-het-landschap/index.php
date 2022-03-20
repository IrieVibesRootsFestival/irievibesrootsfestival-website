<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/page_parts/head_common.php');?>
        <title>Bewilg Het Landschap - Irie Vibes</title>
        <meta property="og:title" content="Willows on the festival site"/>
        <meta property="og:description" content="Since 2020, there are willows on the festival grounds to hold the soil, provide shade and create ecosystem." />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/en/page_parts/header_en.php');?>
        <div class="container content">         
            <h1 class="page-header">Bewilg Het Landschap</h1>
            <div class="row">
                <div class="col-12 col-md-9">
                    <p>Willows ensure marshy meadows become drier, they offer a shelter to various animals and insects, hold streams, provide shadow, ...<br/>Therefore, we planted 50 willows on the festival site.</p>
                </div>
                <div class="col-12 col-md-3"><img alt="" class="img-fluid rounded" src=""/></div>
            </div>
            <!-- Mooimakers Pictures -->
            <div class="row">
                <div class="col-12 col-md-6 p-1">
                    <picture>
                        <source srcset="/src/img/eco/bewilg-het-landschap/bewilg-0.webp" type="image/webp">
                        <source srcset="/src/img/eco/bewilg-het-landschap/bewilg-0.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/bewilg-het-landschap/bewilg-0.jpg"/>
                    </picture>
                </div>
                <div class="col-12 col-md-6 p-1">
                    <picture>
                        <source srcset="/src/img/eco/bewilg-het-landschap/bewilg-1.webp" type="image/webp">
                        <source srcset="/src/img/eco/bewilg-het-landschap/bewilg-1.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/bewilg-het-landschap/bewilg-1.jpg"/>
                    </picture>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT']."/en/page_parts/footer_en.php");?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>