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
            <h3 class="display-7 text-center pb-2">Line-up Index</h3>
            <div class="row">
                <div class="col-12 col-lg-3 order-lg-2">
                    <div class="text-box-2 rounded p-2 sticky-top mt-1">
                        <div class="btn-group-vertical d-flex text-box">
                            <a class="btn" href="#lineup-thursday"><p>Donderdag</p></a>
                            <button class="btn"><a href="#lineup-friday"><p>Vrijdag</p></a></button>
                            <button class="btn"><a href="#lineup-saturday"><p>Zaterdag</p></a></button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <a id="lineup-thursday"></a>
                    <h3 class="text-irie text-uppercase">
                        <b>Donderdag (Kortemark Congé) 
                            <a href="/nl/lineup/kortemark-conge/">
                                <i class="fas fa-link fa-xs" style="font-size: 0.6rem;"></i>
                            </a>
                        </b>
                    </h3>
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/lineup/kortemark-conge.php');?>
                    <a id="lineup-friday"></a>
                    <h3 class="text-irie text-uppercase">
                        <b>Vrijdag 
                            <a href="/nl/lineup/friday/">
                                <i class="fas fa-link fa-xs" style="font-size: 0.6rem;"></i>
                            </a>
                        </b>
                    </h3>
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/lineup/friday.php');?>
                    <a id="lineup-saturday"></a>
                    <h3 class="text-irie text-uppercase">
                        <b>Zaterdag 
                            <a href="/nl/lineup/saturday/">
                                <i class="fas fa-link fa-xs" style="font-size: 0.6rem;"></i>
                            </a>
                        </b>
                    </h3>
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
