<!DOCTYPE html><html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Line Up - Irie Vibes</title>
        <meta property="og:title" content="Line Up"/>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_en.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <br/>
        <div id="line-up" class="container">
            <div class="text-center">
                <div class="btn-group mb-1" role="group" aria-label="Nav-button">
                    <button class="btn btn-irie"><a href="/nl/lineup/kortemark-conge/"><p>Thursday</p></a></button>
                    <button class="btn btn-filter" data-toggle="collapse" data-target="#day2"><p>Friday</p></button>
                    <button class="btn btn-filter" data-toggle="collapse" data-target="#day3"><p>Saturday</p></button>
                </div>
            </div>
            <span class="d-block m-1"></span>
            <!--Add the content for the Friday Line-up from External page-->
            <?php include($_SERVER['DOCUMENT_ROOT'].'/en/lineup/friday.php');?>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
    <script src="/src/js/modernizr.js"></script>
    <script src="/src/js/timetable.js"></script>
    <!-- Initialize Tooltips--><script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
    </script>
</html>
