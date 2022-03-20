<html>
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/page_parts/head_common.php');?>
        <title>Poster - Irie Vibes</title>
        <meta property="og:title" content="Poster"/>
        <meta property="og:description" content="Use this image to print your own posters or share it on social media!" /> 
    </head>
    <body>
        <!-- This is the main container that encapsulates everything content related. -->
        <div class="container-fluid text-center img-container">
            <button onclick="window.history.go(-1); return false;" class="btn btn-irie top-left text-white px-1 rounded h2"><b>Go back</b></button>
            <img alt="" class="img-fluid" src="/src/img/poster2019.jpg">
        </div>
        <!-- Include Footer -->     
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
