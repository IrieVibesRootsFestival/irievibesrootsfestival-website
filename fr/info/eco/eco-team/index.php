<!DOCTYPE html><html lang="fr">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Team Eco - Irie Vibes</title>
        <meta property="og:title" content="Le Team Eco au Irie Vibes"/>
        <meta property="og:description" content="Nous nous soucions de l'environnement! Mais que faisons-nous réellement? Découvrez ici!" />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_fr.php');?>
        <div class="container content">         
            <h1 class="page-header">Le Team Eco</h1>
            <br/>
            <div class="row">
                <div class="col-12 col-md-9">
                    <p>Vous savez que…</p>
                    <ul>
                        <li>pendant l’année nous sommes occupées pour un monde meilleur et plus propre?</li>
                        <li>nous participons à la World Clean Up Day?</li>
                        <li>notre ecoteam travaille pendant le festival pour garder le terrain propre?</li>
                        <li>nous mettons à la disposition de nos visiteurs des cendriers de poche gratuits?</li>
                        <li>nous sommes attentifs au gaspillage alimentaire pour notre catering backstage et avons une coopération avec les commerçants locaux?</li>
                        <li>vous pouvez visiter le compost mobile pendant le festival?</li>
                    </ul>
                </div>
                <div class="col-12 col-md-3"><img alt="" class="img-fluid rounded" src="/src/img/partners/mooimakers.jpg"/></div>
            </div>
            <!-- Mooimakers Pictures -->
            <div class="row">
                <div class="col-12 col-md-6 p-1">
                    <picture>
                        <source srcset="/src/img/eco/mooimakers/ttf-mooimaker.webp" type="image/webp">
                        <source srcset="/src/img/eco/mooimakers/ttf-mooimaker.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/mooimakers/ttf-mooimaker.jpg"/>
                    </picture>
                </div>
                <div class="col-12 col-md-6 p-1">
                    <picture>
                        <source srcset="/src/img/eco/mooimakers/cleanup-day-4.webp" type="image/webp">
                        <source srcset="/src/img/eco/mooimakers/cleanup-day-4.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/mooimakers/cleanup-day-4.jpg"/>
                    </picture>
                </div>
                <!-- Line break -->
                <div class="col-6 col-md-3 p-1">
                    <picture>
                        <source srcset="/src/img/eco/mooimakers/ashtray-0.webp" type="image/webp">
                        <source srcset="/src/img/eco/mooimakers/ashtray-0.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/mooimakers/ashtray-0.jpg"/>
                    </picture>
                </div>
                <div class="col-6 col-md-3 p-1">
                    <picture>
                        <source srcset="/src/img/eco/mooimakers/ashtray-1.webp" type="image/webp">
                        <source srcset="/src/img/eco/mooimakers/ashtray-1.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/mooimakers/ashtray-1.jpg"/>
                    </picture>
                </div>
                <div class="col-6 col-md-3 p-1">
                    <picture>
                        <source srcset="/src/img/eco/mooimakers/eco-team-0.webp" type="image/webp">
                        <source srcset="/src/img/eco/mooimakers/eco-team-0.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/mooimakers/eco-team-0.jpg">
                    </picture>
                </div>
                <div class="col-6 col-md-3 p-1">
                    <picture>
                        <source srcset="/src/img/eco/mooimakers/eco-team-1.webp" type="image/webp">
                        <source srcset="/src/img/eco/mooimakers/eco-team-1.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/mooimakers/eco-team-1.jpg">
                    </picture>
                </div>
                <!-- Line break -->
                <div class="col-6 col-md-4 p-1">
                    <picture>
                        <source srcset="/src/img/eco/mooimakers/eco-team-2.webp" type="image/webp">
                        <source srcset="/src/img/eco/mooimakers/eco-team-2.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/mooimakers/eco-team-2.jpg">
                    </picture>
                </div>
                <div class="col-6 col-md-4 p-1">
                    <picture>
                        <source srcset="/src/img/eco/mooimakers/eco-team-3.webp" type="image/webp">
                        <source srcset="/src/img/eco/mooimakers/eco-team-3.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/mooimakers/eco-team-3.jpg">
                    </picture>
                </div>
                <div class="col-12 col-md-4 p-1">
                    <picture>
                        <source srcset="/src/img/eco/mooimakers/compostmobiel.webp" type="image/webp">
                        <source srcset="/src/img/eco/mooimakers/compostmobiel.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/mooimakers/compostmobiel.jpg">
                    </picture>
                </div>
            </div>
        </div>   
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_fr.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>