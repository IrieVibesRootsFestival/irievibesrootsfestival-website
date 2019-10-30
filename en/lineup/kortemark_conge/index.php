<html>
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Line Up - Irie Vibes</title>
        <meta property="og:title" content="Line Up"/>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_en.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <div id="line-up" class="container content text-center">
            <span class="display-7 d-block ">Kortemark Congé</span>
            <div class="btn-group mb-3" role="group" aria-label="Nav-button">
                <button type="button" class="btn btn-success text-white"><a href="#stage_tent">Lion's Den</a></button>
                <button type="button" class="btn btn-danger text-white"><a href="#stage_air">Open Air</a></button>
                <button type="button" class="btn btn-sand text-white"><a href="#stage_tent_outside">Inner Circle</a></button> 
                <button type="button" class="btn btn-warning text-white"><a href="#stage_kids">Little Lion</a></button>
            </div>
            <?php include($_SERVER['DOCUMENT_ROOT'].'/en/lineup/kortemark_conge/core_lineup.php');?>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
    <!-- Initialize Tooltips--><script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
    </script>
</html>
