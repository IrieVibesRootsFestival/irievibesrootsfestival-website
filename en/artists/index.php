<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Artiesten - Irie Vibes</title>
        <meta property="og:title" content="Artists"/>
        <meta property="og:description" content="Who's playing on Irie Vibes this year? Find out here!" />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_en.php');?>
        <div id="artists" class="container content">
            <h3 class="display-7 text-center">Artists</h3>
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
                                <!-- Start artist -->
                                <div class="col-12" id="artist-jungle-roots">
                                    <div class="row">
                                        <!--Artist picture-->
                                        <div class="col-12 col-md-3"> 
                                            <picture>
                                                <source srcset="/src/img/artists/jungle-roots.webp" type="image/webp">
                                                <source srcset="/src/img/artists/jungle-roots.jpg" type="image/jpeg">
                                                <img alt="" class="img-fluid rounded" src="/src/img/artists/jungle-roots.jpg"/>
                                            </picture>
                                        </div>
                                        <!--Artist text-->
                                        <div class="col-12 col-md-9"> 
                                            <h3>Jungle Roots</h3>
                                            <p>...</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End artist -->
                                <!-- Start artist -->
                                <div class="col-12" id="artist-the-resonators">
                                    <div class="row">
                                        <!--Artist picture-->
                                        <div class="col-12 col-md-3"> 
                                            <picture>
                                                <source srcset="/src/img/artists/the-resonators.webp" type="image/webp">
                                                <source srcset="/src/img/artists/the-resonators.jpg" type="image/jpeg">
                                                <img alt="" class="img-fluid rounded" src="/src/img/artists/the-resonators.jpg"/>
                                            </picture>
                                        </div>
                                        <!--Artist text-->
                                        <div class="col-12 col-md-9"> 
                                            <h3>The Resonators</h3>
                                            <p>...</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End artist -->
                                <!-- Start artist -->
                                <div class="col-12" id="artist-the-resonators">
                                    <div class="row">
                                        <!--Artist picture-->
                                        <div class="col-12 col-md-3"> 
                                            <picture>
                                                <source srcset="/src/img/artists/bounty-radio.webp" type="image/webp">
                                                <source srcset="/src/img/artists/bounty-radio.jpg" type="image/jpeg">
                                                <img alt="" class="img-fluid rounded img-container" src="/src/img/artists/bounty-radio.jpg"/>
                                            </picture>
                                        </div>
                                        <!--Artist text-->
                                        <div class="col-12 col-md-9"> 
                                            <h3>Bounty Radio</h3>
                                            <p>...</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End artist -->

                                <a class="col-12" id="open-air"><hr/></a>
                                <!-- Start artist -->
                                <div class="col-12" id="artist-oxala-tamtam">
                                    <div class="row">
                                        <!--Artist picture-->
                                        <div class="col-12 col-md-3"> 
                                            <picture>
                                                <source srcset="/src/img/artists/oxala-tamtam.webp" type="image/webp">
                                                <source srcset="/src/img/artists/oxala-tamtam.jpg" type="image/jpeg">
                                                <img alt="" class="img-fluid rounded" src="/src/img/artists/oxala-tamtam.jpg"/>
                                            </picture>
                                        </div>
                                        <!--Artist text-->
                                        <div class="col-12 col-md-9"> 
                                            <h3>Oxala Tamtam</h3>
                                            <p>...</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End artist -->

                                <a class="col-12" id="inner-circle"><hr/></a>
                                <!-- Start artist -->
                                <div class="col-12" id="artist-bee-health">
                                    <div class="row">
                                        <!--Artist picture-->
                                        <div class="col-12 col-md-3"> 
                                            <picture>
                                                <source srcset="/src/img/artists/bee-health.webp" type="image/webp">
                                                <source srcset="/src/img/artists/bee-health.jpg" type="image/jpeg">
                                                <img alt="" class="img-fluid rounded" src="/src/img/artists/bee-health.jpg"/>
                                            </picture>
                                        </div>
                                        <!--Artist text-->
                                        <div class="col-12 col-md-9"> 
                                            <h3>Bee & Health</h3>
                                            <p>...</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End artist -->

                                <a class="col-12" id="little-lion"><hr/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
