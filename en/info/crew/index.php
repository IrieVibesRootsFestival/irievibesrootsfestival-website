<html lang="en"><!DOCTYPE html>
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Crew - Irie Vibes</title>
        <meta property="og:title" content="The Irie Vibes Crew"/>
        <meta property="og:description" content="Our crew is the bane of Irie Vibes Roots Festival's existence." /> 
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_en.php');?>
        <div class="content container">
            <h3  class="display-7 text-center">Crew</h3> 
            <p>Our crew is incredibly valuable to us. With this thanks & praises page, we would like to thank everyone in the crew that makes Irie Vibes possible, working throughout the whole year to put up a big show -- time after time again.</p>
            <picture>
                <source srcset="/src/img/crew-2019.webp" type="image/webp">
                <source srcset="/src/img/crew-2019.jpg" type="image/jpeg">
                <img alt="" class="img-fluid rounded" src="/src/img/crew-2019.jpg"/>
            </picture>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>