<html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Page not accessible - Irie Vibes</title>
        <meta property="og:title" content="About Irie Vibes" />
        <meta property="og:description" content="Information about Irie Vibes Roots Festival and its parent GreenForward" />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_en.php');?>
        <div class="container content">
            <div class="d-flex flex-row align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 text-center pt-5">
                            <span class="display-1 d-block"><p>404</p></span>
                            <div class="mb-4 lead"><p>The page you are looking for has restricted access</p>
                                <i class="far fa-frown display-1"></i>
                            </div>
                            <a href="/" class="btn">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_en.php');?>
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
