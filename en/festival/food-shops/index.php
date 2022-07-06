<!DOCTYPE html><html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/_page_parts/head_common.php');?>
        <title>Shops | Food & Gear - Irie Vibes</title>
        <meta property="og:title" content="Food & Gear"/>
        <meta property="og:description" content="Interested in a snack; looking for a sourenir? Find out what the shops have to offer." /> 
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/en/_page_parts/header_en.php');?>
        <div class="content container">
            <h1 class="page-header">(non)Food Shops</h1> 
            <p class="text-white">Interested in advertising your food truck, food stand or gear shop on our festival?</p>
            <p><b>Don’t wait too long! Spaces are limited!</b></p>
            More info at: <a href="mailto:shops@irievibes.be?Subject=Foodtruck%20Request" target="_top">shops@irievibes.be</a>.
            <hr/>
            <div class="row">
                <div class="col-md-6"><img alt="" class="img-fluid rounded" src="/src/img/static/foodstand/food%202.jpg"></div>
                <div class="col-md-6"><img alt="" class="img-fluid rounded" src="/src/img/static/foodstand/food%20stall.jpg"></div>
                <div class="col-md-6"><img alt="" class="img-fluid rounded" src="/src/img/static/foodstand/food.jpg"></div>
                <div class="col-md-6"><img alt="" class="img-fluid rounded" src="/src/img/static/foodstand/shop.jpg"></div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/en/_page_parts/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/_page_parts/load_last.php');?>
    <script>
    $(document).ready(function() {
        // get current URL path and assign 'active' class
        var pathname = window.location.pathname;
        $('nav li > a[alt="/en/festival/"]').parent().addClass('active');
    })</script>
</html>