<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Sustainable Development Goals - Irie Vibes</title>
        <meta property="og:title" content="The ‘Sustainable Development Goals’"/>
        <meta property="og:description" content="The Sustainable Development Goals (SDGs) are 17 goals, 169 sub-goals and 229 indicators to be achieved by 2030." />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_en.php');?>
        <div class="container content">         
            <h1 style="margin-bottom:5px" class="display-7 text-center">Sustainable Development Goals</h1>
            <br/>
            <div class="row">
                <!-- Main text -->
                <div class="col-12 col-md-9">
                    <p>The Sustainable Development Goals (SDGs) were approved by the United Nations General Assembly in September 2015. They are 17 goals, 169 sub-goals and 229 indicators to be achieved by 2030. The SDGs balance the three dimensions of sustainable development (the economic, social and environmental dimension) within the framework of peace and cooperation.
                    </p>
                </div>
                <!-- Province logo & Sponsor message -->
                <div class="col-12 col-md-3">
                    <picture>
                        <source srcset="/src/img/partners/westvl.webp" type="image/webp">
                        <source srcset="/src/img/partners/westvl.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/partners/westvl.jpg"/>
                    </picture>
                    <small>This project is supported by the Province of West-Flanders</small>
                </div>
                <!-- Begin pictures -->
                <div class="col-6 col-md-3">
                    <picture>
                        <source srcset="/src/img/eco/sdg/intro/color-circle.webp" type="image/webp">
                        <source srcset="/src/img/eco/sdg/intro/color-circle.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/sdg/intro/color-circle.jpg"/>
                    </picture>
                </div>
                <div class="col-6 col-md-4 col-xl-3">
                    <picture>
                        <source srcset="/src/img/eco/sdg/intro/intro-square.webp" type="image/webp">
                        <source srcset="/src/img/eco/sdg/intro/intro-square.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/sdg/intro/intro-square.jpg"/>
                    </picture>
                </div>
                <div class="col-6 col-md-4 col-xl-3">
                    <picture>
                        <source srcset="/src/img/eco/sdg/intro/world-in-hands.webp" type="image/webp">
                        <source srcset="/src/img/eco/sdg/intro/world-in-hands.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/sdg/intro/world-in-hands.jpg"/>
                    </picture>
                </div>
                <div class="col-6 col-md-4 col-xl-3">
                    <picture>
                        <source srcset="/src/img/eco/sdg/intro/world-in-hands.webp" type="image/webp">
                        <source srcset="/src/img/eco/sdg/intro/world-in-hands.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/sdg/intro/world-in-hands.jpg"/>
                    </picture>
                </div>
                <!-- End Pictures -->
            </div>

        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>