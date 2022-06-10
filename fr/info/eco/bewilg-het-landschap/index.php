<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/_page_parts/head_common.php');?>
        <title>Bewilg Het Landschap - Irie Vibes</title>
        <meta property="og:title" content="Saules sur le site du festival"/>
        <meta property="og:description" content="Depuis 2020, il y a des saules sur le terrain du festival pour retenir le sol, fournir de l'ombre et créer un écosystème." />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/fr/_page_parts/header_fr.php');?>
        <div class="container content">         
            <h1 class="page-header">Bewilg Het Landschap</h1>
            <br/>
            <div class="row">
                <div class="col-12 col-md-9">
                    <p>Les saules pollard veillent  à ce que les pâturages deviennent plus secs, offrent un abri a les animaux et les insectes, retiennent les ruisseaux, créent de l’ombre,...<br/>Pour ça, nous avons planté 50 saules sur le site du festival.</p>
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
        <?php include($_SERVER['DOCUMENT_ROOT'].'/fr/_page_parts/footer_fr.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>