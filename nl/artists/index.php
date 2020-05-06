<!DOCTYPE html><html lang="nl">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Artiesten - Irie Vibes</title>
        <meta property="og:title" content="Artists"/>
        <meta property="og:description" content="Wie speelt op Irie Vibes dit jaar? Je vindt het hier!" />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_nl.php');?>
        <div id="artists" class="container content">
            <h3 class="display-7 text-center">Artiesten</h3>
            <div class="row">
                <div class="col-12 px-3 text-center">
                    <div class="btn-group mb-3" role="group" aria-label="Nav-button">
                        <button type="button" class="btn btn-success text-white"><a href="#lions-den">Lion's Den</a></button>
                        <button type="button" class="btn btn-danger text-white"><a href="#open-air">Open Air</a></button>
                        <button type="button" class="btn btn-sand text-white"><a href="#inner-circle">Inner Circle</a></button> 
                        <button type="button" class="btn btn-warning text-white"><a href="#little-lion">Little Lion</a></button>
                    </div>
                </div>
                <!--Artist text-->
                <div class="col-12">
                    <div class="text-box-2 p-2 rounded">
                        <div class="text-box rounded sticky-top">
                            <div class="row p-1">
                                <a class="col-12" id="lions-den"></a>


                                <a class="col-12" id="open-air"><hr/></a>
                                

                                <a class="col-12" id="inner-circle"><hr/></a>
                                

                                <a class="col-12" id="little-lion"><hr/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_nl.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
