<!DOCTYPE html><html lang="nl">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/page_parts/head_common.php');?>
        <title>Partners - Irie Vibes</title>
        <meta property="og:title" content="Partners & Samenwerkingen"/>
        <meta property="og:description" content="Bekijk onze partners & samenwerkingen" />
    </head> 
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_nl.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <div class="container content">
            <br/>
            <h1 class="page-header">Partners</h1>
            <div class="row"><?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/content/partners.php');?></div>
            <h1 class="page-header">Samenwerkingen</h1>
            <div class="row"><?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/content/cooperations.php');?></div>
        <p class="mt-2 mb-2 text-center"><span class="text-danger">De sponsorlijst is <u>niet</u> compleet!</span> Verwachte datum van completering is eind April.</p>
        </div>
    <!-- Include Footer -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_nl.php');?>        
    </body>
<!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
<?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
