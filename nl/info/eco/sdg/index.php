<!DOCTYPE html>
<html lang="nl">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Sustainable Development Goals - Irie Vibes</title>
        <meta property="og:title" content="De ‘Sustainable Development Goals’"/>
        <meta property="og:description" content="De ‘Sustainable Development Goals’ (SDG’s) of ‘Duurzame Ontwikkelingsdoelstellingen” zijn 17 doelstellingen, 169 subdoelstellingen en 229 indicatoren die tegen 2030 bereikt moeten worden." />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_nl.php');?>
        <div class="container content">         
            <h1 style="margin-bottom:5px" class="display-7 text-center">Sustainable Development Goals</h1>
            <br/>
            <div class="row">
                <!-- Main text -->
                <div class="col-12 col-md-9">
                    <p>De ‘Sustainable Development Goals’ (SDG’s) of ‘Duurzame Ontwikkelingsdoelstellingen’ werden goedgekeurd door de Algemene Vergadering van de Verenigde Naties in september 2015. Het zijn 17 doelstellingen, 169 subdoelstellingen en 229 indicatoren die tegen 2030 bereikt moeten worden. De SDG’s zorgen voor evenwicht tussen de drie dimensies van duurzame ontwikkeling (de economische, sociale en ecologische dimensie) binnen het kader van vrede en samenwerking.</p>
                </div>
                <!-- Province logo & Sponsor message -->
                <div class="col-12 col-md-3">
                    <picture>
                        <source srcset="/src/img/partners/westvl.webp" type="image/webp">
                        <source srcset="/src/img/partners/westvl.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/partners/westvl.jpg"/>
                    </picture>
                    <small>Dit project wordt gesteund door de Provincie West-Vlaanderen</small>
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
                        <source srcset="/src/img/eco/sdg/intro/SDG.webp" type="image/webp">
                        <source srcset="/src/img/eco/sdg/intro/SDG.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/sdg/intro/SDG.jpg"/>
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
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_nl.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>