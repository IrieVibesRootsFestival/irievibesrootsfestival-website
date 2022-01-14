<!DOCTYPE html><html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/page_parts/head_common.php');?>
        <title>Friday Line Up - Irie Vibes</title>
        <meta property="og:title" content="Friday Line Up"/>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_nl.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <br/>
        <div id="line-up" class="container">
            <h1 class="page-header">Vrijdag</h1>
            <p class="text-center text-irie pb-2"><b>17 Juli 2020</b></p>
            <span class="d-block m-1"></span>
            <!--Add the content for the Friday Line-up from External page-->
            <?php include($_SERVER['DOCUMENT_ROOT'].'/src/lineup/friday.php');?>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_nl.php');?>        
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
