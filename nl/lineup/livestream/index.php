<!DOCTYPE html>
<html lang="nl">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Home - Irie Vibes</title>
        <meta property="og:title" content="Irie Vibes Livestream"/>
        <meta property="og:description" content="Kijk naar de Livestream wanneer er evenementen worden gestreamd!" />
    </head> 
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_nl.php');?>
        <div class="container content">
            <div class="row">
            <div class="col-12">
                
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_nl.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
    <div id="fb-root"></div> <script async defer crossorigin="anonymous" src="https://connect.facebook.net/nl_BE/sdk.js#xfbml=1&version=v6.0"></script>
</html>
