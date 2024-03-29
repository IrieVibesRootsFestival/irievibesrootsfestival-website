<!DOCTYPE html><html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/_page_parts/head_common.php');?>
        <title>Kortemark Congé Line-up - Irie Vibes</title>
        <meta property="og:title" content="Kortemark Congé Line-up"/>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/nl/_page_parts/header_nl.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <br/>
        <div id="line-up" class="container">
            <h1 class="page-header">>Donderdag</h1>
            <p class="text-center text-irie pb-2"><b>16 Juli 2020 (Kortemark Congé)</b></p>
            <span class="d-block m-1"></span>
            <!--Add the content for the Friday Line-up from External page-->
            <?php include($_SERVER['DOCUMENT_ROOT'].'/src/lineup/thursday.php');?>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/nl/_page_parts/footer_nl.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/_page_parts/load_last.php');?>
    <script src="/src/js/modernizr.js"></script>
    <script src="/src/js/timetable.js"></script>
    <!-- Initialize Tooltips--><script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
    </script>
</html>
