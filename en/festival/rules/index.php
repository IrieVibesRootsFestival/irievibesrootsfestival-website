<!DOCTYPE html><html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Rules - Irie Vibes</title>
        <meta property="og:title" content="Festival Rules"/>
        <meta property="og:description" content="What can and can't you bring to or do on the festival(terrain)?" />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_en.php');?>
        <div id="rules" class="container content">
            <h3 class="display-7 text-center">Festival Rules</h3> 
            <div class="row">
                <h3 class="text-irie text-uppercase col-12"><b>Festival rules</b></h3>
                <div class="col-12 col-md-6">
                    <h4 class="text-danger">What is <b>NOT</b> allowed?</h4>
                    <ul>
                        <li>glass</li>
                        <li>weapons</li> 
                        <li>animals <i>(we make an exception for guide- and assitance dogs)</i></li> 
                        <li>sharp items</li>
                        <li>open fire or barbecue pits</li>
                        <li>climbing on fencing and railing</li>
                        <li>access to the (back)stage</li>
                        <li>bringing your own drinks to the festival</li>
                        <li>bringing your own soundsystem to the camping</li>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <h4 class="text-success">What is allowed?</h4>
                    <ul>
                        <li>empty reusable bottles to fill with water at the water bar (only clear plastic ones!)</li>
                        <li>Utilities to take care of children (diapers, drinking bottles,...)</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
