<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Line-up - Irie Vibes</title>
        <meta property="og:title" content="Line-up Index"/>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_fr.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <div id="lineup-home" class="container content">
            <h3 class="display-7 text-center pb-2">Line up Index</h3>
            <div class="row">
                <div class="col-12 col-lg-3 order-lg-2">
                    <div class="text-box-2 rounded sticky-top mt-1">
                        <div class="btn-group-vertical d-flex text-box rounded mb-2">
                            <h3 class="text-irie mx-auto">Musique</h3>
                            <a class="btn" href="#lineup-thursday"><p>Jeudi</p></a>
                            <a class="btn" href="#lineup-friday"><p>Vendredi</p></a>
                            <a class="btn" href="#lineup-saturday"><p>Samedi</p></a>
                        </div>
                        <div class="btn-group-vertical d-flex text-box rounded">
                            <h3 class="text-irie mx-auto">Animation</h3>
                            <a class="btn" href="#"><p>Workshops</p></a>
                            <a class="btn" href="#"><p>Parleurs</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <!-- Thursday-->
                    <a id="lineup-thursday"></a>
                    <h3 class="text-irie text-uppercase">
                        <b>Jeudi <span class="p">(Kortemark Congé)</span>
                            <a href="/fr/lineup/kortemark-conge/">
                                <i class="fas fa-link fa-xs" style="font-size: 0.6rem;"></i>
                            </a>
                        </b>
                    </h3>
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/lineup/thursday.php');?>
                    <!-- Friday-->
                    <a id="lineup-friday"></a>
                    <h3 class="text-irie text-uppercase">
                        <b>Vendredi 
                            <a href="/fr/lineup/friday/">
                                <i class="fas fa-link fa-xs" style="font-size: 0.6rem;"></i>
                            </a>
                        </b>
                    </h3>
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/lineup/friday.php');?>
                    <!-- Saturday-->
                    <a id="lineup-saturday"></a>
                    <h3 class="text-irie text-uppercase">
                        <b>Samedi 
                            <a href="/fr/lineup/saturday/">
                                <i class="fas fa-link fa-xs" style="font-size: 0.6rem;"></i>
                            </a>
                        </b>
                    </h3>
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/lineup/saturday.php');?>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_fr.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
