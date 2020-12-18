<!DOCTYPE html><html lang="nl">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Food Waste Facts - Irie Vibes</title>
        <meta property="og:title" content="Food Waste Facts"/>
        <meta property="og:description" content="Voedselverspilling is een internationaal probleem. Irie Vibes, Esperanzah en La Condition Publique hebben een interactieve cursus gecreëerd om te leren over vaak verspilde voedselproducten en hoe ze opnieuw kunnen worden gebruikt." />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_nl.php');?>
        <div class="container content">         
            <h1 class="page-header">Food Waste Facts</h1>
            <object data="/src/static/FOOD-WASTE-FACTS-WEB.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="100%">
                This browser does not support PDFs. Please <a href="/src/static/FOOD-WASTE-FACTS-WEB.pdf">download the PDF</a> to view it.
            </object>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_nl.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>