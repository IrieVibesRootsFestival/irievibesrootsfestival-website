<html lang="fr">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Line Up - Irie Vibes</title>
        <meta property="og:title" content="Line Up"/>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_fr.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <br/>
        <div id="line-up" class="container">
            <div class="text-center">
                <div class="btn-group mb-1" role="group" aria-label="Nav-button">
                    <button class="btn btn-filter" data-toggle="collapse" data-target="#day1"><p>Jeudi</p></button>
                    <button class="btn btn-filter" data-toggle="collapse" data-target="#day2"><p>Vendredi</p></button>
                    <button class="btn btn-filter" data-toggle="collapse" data-target="#day3"><p>Samedi</p></button>
                </div>
                <span class="d-block m-1"></span>
                <div class="btn-group mb-3" role="group" aria-label="Nav-button">
                    <button type="button" class="btn btn-success text-white"><a href="#stage_tent">Lion's Den</a></button>
                    <button type="button" class="btn btn-danger text-white"><a href="#stage_air">Open Air</a></button>
                    <button type="button" class="btn btn-sand text-white"><a href="#stage_tent_outside">Inner Circle</a></button> 
                    <button type="button" class="btn btn-warning text-white"><a href="#stage_kids">Little Lion</a></button>
                </div>
            </div>
            <div class="accordion-group">
                <div class="collapse show" id="day1" data-parent="#line-up">
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/en/lineup/kortemark-conge/core_lineup.php');?>
                </div>
                <div class="collapse" id="day2" data-parent="#line-up">
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/en/lineup/friday.php');?>
                </div>
                <div class="collapse" id="day3" data-parent="#line-up">
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/en/lineup/saturday.php');?>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_fr.php');?>        
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
