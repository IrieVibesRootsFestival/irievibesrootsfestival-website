<!DOCTYPE html><html lang="fr">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Partners - Irie Vibes</title>
        <meta property="og:title" content="Partners & Cooperations"/>
        <meta property="og:description" content="View our partners and cooperations. Click an image to discover." />
    </head> 
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_fr.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <div class="container content">
            <br/>
            <h1 class="display-7 text-center">Parternaires</h1>
            <div class="row"><?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/content/partners.php');?></div>
            <h1 class="display-7 text-center">Coopérations</h1>
            <div class="row"><?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/content/cooperations.php');?></div>
            <p class="mt-2 mb-2 text-center">
                <span class="text-danger">La liste des sponsors n'est <u>pas</u> complète! </span>La date d'achèvement prévue est avril.
            </p>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_fr.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
