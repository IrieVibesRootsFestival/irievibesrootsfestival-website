<!DOCTYPE html>
<html lang="nl">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Line-Up - Irie Vibes</title>
        <meta property="og:title" content="Line-Up"/>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_nl.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <div id="lineup-home" class="container content">
            <h3 class="display-7 text-center">Line-up Index</h3>
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <div>
                            <a href="#lineup-thursday"><button class="btn btn-irie"><p>Donderdag</p></button></a>
                            <a href="#lineup-friday"><button class="btn btn-irie"><p>Vrijdag</p></button></a>
                            <a href="#lineup-saturday"><button class="btn btn-irie"><p>Zaterdag</p></button></a>
                        </div>
                    </div>
                    <a id="lineup-thursday"/>
                    <h3 class="text-irie"><b>Donderdag (Kortemark Congé) <a href="/nl/lineup/kortemark-conge/"><i class="fas fa-link fa-xs" style="font-size: 0.6rem;"></i></a></b></h3>
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/lineup/kortemark-conge.php');?>
                    <a id="lineup-friday"/>
                   <h3 class="text-irie"><b>Vrijdag <a href="/nl/lineup/friday/"><i class="fas fa-link fa-xs" style="font-size: 0.6rem;"></i></a></b></h3>
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/lineup/friday.php');?>
                    <a id="lineup-saturday"/>
                  <h3 class="text-irie"><b>Zaterdag <a href="/nl/lineup/saturday/"><i class="fas fa-link fa-xs" style="font-size: 0.6rem;"></i></a></b></h3>
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/lineup/saturday.php');?>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
