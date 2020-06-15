<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Objectifs de développement durable - Irie Vibes</title>
        <meta property="og:title" content="Les ‘Objectifs de développement durable’"/>
        <meta property="og:description" content="Les Objectifs de développement durable s'agit de 17 objectifs, 169 sous-objectifs et 229 indicateurs à atteindre d'ici 2030." />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_fr.php');?>
        <div class="container content">         
            <h1 style="margin-bottom:5px" class="display-7 text-center">Objectifs de développement durable</h1>
            <br/>
            <div class="row">
                <!-- Main text -->
                <div class="col-12 col-md-9">
                    <p>Les Objectifs de développement durable ont été approuvés par l'Assemblée générale des Nations Unies en septembre 2015. Il s'agit de 17 objectifs, 169 sous-objectifs et 229 indicateurs à atteindre d'ici 2030. Les ODD équilibrent les trois dimensions du développement durable (la dimension économique, sociale et environnementale) dans le cadre de la paix et de la coopération.
                    </p>
                </div>
                <!-- Province logo & Sponsor message -->
                <div class="col-12 col-md-3">
                    <picture>
                        <source srcset="/src/img/partners/westvl.webp" type="image/webp">
                        <source srcset="/src/img/partners/westvl.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/partners/westvl.jpg"/>
                    </picture>
                    <small>Ce projet est soutenu par la Province de Flandre Occidentale</small>
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
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_fr.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>