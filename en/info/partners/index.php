<!DOCTYPE html><html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/page_parts/head_common.php');?>
        <title>Partners - Irie Vibes</title>
        <meta property="og:title" content="Partners & Cooperations"/>
        <meta property="og:description" content="View our partners and cooperations. Click an image to discover." />
    </head> 
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/en/_page_parts/header_en.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <div class="container content">
            <br/>
            <h1 class="page-header">Partners</h1>
            <div class="row"><?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/content/partners.php');?></div>
            <h1 class="page-header">Cooperations</h1>
            <div class="row"><?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/content/cooperations.php');?></div>
        <p class="mt-2 mb-2 text-center"><span class="text-danger">The sponsor list is <u>not</u> complete!</span> Estimated date of completion is April.</p>
        </div>
    <!-- Include Footer -->
    <?php include($_SERVER['DOCUMENT_ROOT']."/en/page_parts/footer_en.php");?>        
    </body>
<!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
<?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
