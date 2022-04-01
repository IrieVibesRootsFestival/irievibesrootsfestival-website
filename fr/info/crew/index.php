<!DOCTYPE html><html lang="fr">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/page_parts/head_common.php');?>
        <title>Crew - Irie Vibes</title>
        <meta property="og:title" content="Le crew Irie Vibes "/>
        <meta property="og:description" content="Notre équipe est le fléau de l'existence d'Irie Vibes Roots Festival." /> 
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/fr/_page_parts/header_fr.php');?>
        <div class="content container">
            <h1 class="page-header">Crew</h1>
            <p>Notre équipage est incroyablement précieux pour nous. Avec cette page de remerciements et de louanges, nous remercions tous les membres de l’équipe qui ont rendu possible la création d’Irie Vibes, qui a travaillé toute l’année pour offrir un grand spectacle, encore et encore.</p>
            <picture>
                <source srcset="/src/img/crew-2019.webp" type="image/webp">
                <source srcset="/src/img/crew-2019.jpg" type="image/jpeg">
                <img alt="" class="img-fluid rounded" src="/src/img/crew-2019.jpg"/>
            </picture>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_fr.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>