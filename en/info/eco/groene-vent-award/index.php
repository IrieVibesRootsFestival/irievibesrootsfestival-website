<!DOCTYPE html><html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/page_parts/head_common.php');?>
        <title>Groene Vent Award - Irie Vibes</title>
        <meta property="og:title" content="Groene Vent Award"/>
        <meta property="og:description" content="We recently won the Groene Vent Award, an award for environmentally responsible events. What does this mean?" />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/en/_page_parts/header_en.php');?>
        <div class="container content">         
            <h1 class="page-header">Groene Vent Award</h1>
            <div class="row">
                <div class="col-12 col-md-8">
                    <p>Did you know that …</p>
                    <ul>
                        <li>in 2017, we were in the finals of the Ovam Green Event Award?</li>
                        <li>in 2018, we received the Ovam Green Event Award for our ecological actions?</li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 rounded">
                    <div class="fb-video" data-href="https://www.facebook.com/groenevent/videos/2178656492159810/" data-width="auto" data-show-text="false">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 mb-2">
                    <picture>
                        <source srcset="/src/img/eco/groene-vent/ge-0.webp" type="image/webp">
                        <source srcset="/src/img/eco/groene-vent/ge-0.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/groene-vent/ge-0.jpg"/>
                    </picture>
                </div>
                <div class="col-12 col-md-6 mb-2">
                   <picture>
                        <source srcset="/src/img/eco/groene-vent/ge-1.webp" type="image/webp">
                        <source srcset="/src/img/eco/groene-vent/ge-1.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/groene-vent/ge-1.jpg"/>
                    </picture>
                </div>
                <div class="col-12 col-md-6 mb-2">
                    <picture>
                        <source srcset="/src/img/eco/groene-vent/ge-2.webp" type="image/webp">
                        <source srcset="/src/img/eco/groene-vent/ge-2.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/groene-vent/ge-2.jpg"/>
                    </picture>
                </div>
                <div class="col-12 col-md-6 mb-2">
                    <picture>
                        <source srcset="/src/img/eco/groene-vent/ge-3.webp" type="image/webp">
                        <source srcset="/src/img/eco/groene-vent/ge-3.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/groene-vent/ge-3.jpg"/>
                    </picture>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT']."/en/page_parts/footer_en.php");?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
    <div id="fb-root"></div>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
</html>