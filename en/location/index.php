<!DOCTYPE html><html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/_page_parts/head_common.php');?>
        <title>Location - Irie Vibes</title>
        <meta property="og:title" content="Festival Location"/>
        <meta property="og:description" content="Find the location of our festival terrain, camping and more." />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'./_page_parts/header_en.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <div id="location" class="container text-center content">
            <br/>
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.7343491980173!2d3.030461763614443!3d51.039526990723125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcb4b9be4eaabf%3A0xf38c55cb0a10d2ff!2sKoekelarestraat+16%2C+8610+Kortemark!5e0!3m2!1snl!2sbe!4v1465242561126" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <h2>Koekelarestraat 16, 8610 Kortemark</h2><br/>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'./_page_parts/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
