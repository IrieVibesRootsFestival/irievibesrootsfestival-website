<!DOCTYPE html><html lang="fr">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/_page_parts/head_common.php');?>
        <title>Food Waste Facts - Irie Vibes</title>
        <meta property="og:title" content="Food Waste Facts"/>
        <meta property="og:description" content="Le gaspillage alimentaire est un problème international. Irie Vibes, Esperanzah et La Condition Publique ont créé un cours interactif pour en savoir plus sur les produits alimentaires couramment gaspillés et comment les réutiliser." />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/fr/_page_parts/header_fr.php');?>
        <div class="container content">         
            <h1 class="page-header">Food Waste Facts</h1>
            <object data="/src/static/FOOD-WASTE-FACTS-WEB.pdf#toolbar=0&navpanes=0&scrollbar=0" type=”application/pdf” width=”100%” height=”100%”>
                This browser does not support PDFs. Please <a href="/src/static/FOOD-WASTE-FACTS-WEB.pdf">download the PDF</a> to view it.
            </object>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/fr/_page_parts/footer_fr.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'_page_parts/load_last.php');?>
</html>