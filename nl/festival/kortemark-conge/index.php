<!DOCTYPE html><html lang="nl">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Kortemark Congé - Irie Vibes</title>
        <meta property="og:title" content="Kortemark Congé"/>
        <meta property="og:description" content="Alles dat je moet weten over het evenement Kortemark Congé op Iie Vibes Roots Festival." />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_nl.php');?>
        <!-- Main Content --> 
        <div class="container content">
            <div class="row"> 
                <div class="col-12">
                    <span class="display-7 d-block mx-auto">Kortemark Conge</span>
                </div>
                <div class="col-12 col-md-5">

                </div>

                <!-- Text block block (left) -->
                <div class="col-12">
                    <h3 class="text-irie text-uppercase">15 juli 2021 vanaf 18u00</h3>
                    <a href="https://www.facebook.com/events/2326818524093825/">Kortemark Congé 2021 - Facebook Events</a>
                    <p>vzw Greenforward heet jullie welkom op onze GRATIS festivalavond “Kortemark Congé”.</p>
                    <ul>
                        <li>
                            Lion’s Den: “a touch of reggae, a lot of vibes”
                            Warmte, gastvrijheid, ritme en vibes … 
                            <div class="row m-0 p-0">
                                <!--KConge 2018-->
                                <div class="col-12 col-md-4">
                                    <div class="embed-responsive embed-responsive-16by9 rounded mb-3">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=6GhMiDClsqk" frameborder="0"></iframe>
                                    </div>
                                </div>
                                <!--KConge 2019-->
                                <div class="col-12 col-md-4">
                                    <div class="embed-responsive embed-responsive-16by9 rounded mb-3">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=6GhMiDClsqk" frameborder="0"></iframe>
                                    </div>
                                </div>
                                <!--Focus WTV Clip-->
                                <div class="col-12 col-md-4">
                                    <div class="embed-responsive embed-responsive-16by9 rounded mb-3">
                                        <iframe class="embed-responsive-item" src="//player.cdn01.rambla.be?account_id=VzaPKg&amp;item_id=W9MoDP" frameborder="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            Trim the footprint : “ because there is no planet B” 

                            workshops en lezingen
                            met de steun van Interreg France-Wallonie-Vlaanderen
                            ecologische initiatieven in de kijker

                            (logo Interreg, Trim the Footprint)
                            (filmpje invoegen eco : https://www.facebook.com/IrieVibesRootsFesitval/videos/416779585895356/

                            <div class="row m-0 p-0">
                                <div class="col-12 col-md-4">

                                </div>
                                <div class="col-12 col-md-4">
                                    <img alt="" src="/src/img/eco/trim-the-footprint/trimthefootprint.png" class="img-fluid rounded"/>
                                </div>
                                <div class="col-12 col-md-4"></div>
                            </div>
                            <div class="embed-responsive embed-responsive-16by9 rounded mb-3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=6GhMiDClsqk" frameborder="0"></iframe>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Img block (right) 
<div class="col-12 col-md-3">
<a href="https://www.facebook.com/events/622231101564639/" rel="Kortemark Congé Facebook Page">
<img alt="" src="/src/img/eco/trim-the-footprint/trimthefootprint.png" class="img-fluid rounded"/>
</a>
</div>-->
                <!-- Two poster halves -->
                <div class="col-12 col-md-6">
                    <picture>
                        <source srcset="/src/img/kortemark-conge/kortemarkconge-flyer-front.webp" type="image/webp">
                        <source srcset="/src/img/kortemark-conge/kortemarkconge-flyer-front.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/kortemark-conge/kortemarkconge-flyer-front.jpg"/>
                    </picture>
                </div>
                <div class="col-12 col-md-6">
                    <picture>
                        <source srcset="/src/img/kortemark-conge/kortemarkconge-flyer-back.webp" type="image/webp">
                        <source srcset="/src/img/kortemark-conge/kortemarkconge-flyer-back.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/kortemark-conge/kortemarkconge-flyer-back.jpg"/>
                    </picture>
                </div>
                <!-- Hide line-up on mobile, and display a link to the Line-Up page instead -->
                <div class="col-12 d-none d-md-block mt-md-2">
                    <!-- Include page that holds images/links -->
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/en/lineup/kortemark-conge/core_lineup.php');?>
                </div>
                <div class="col-12 d-block d-md-none text-center">
                    <button class="btn btn-pill btn-irie"><a class="text-white" href="/en/lineup/kortemark-conge/">View Line-up</a></button>
                </div>
            </div>
        </div>        
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_nl.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2"></script>
    <!-- Initialize Tooltips--><script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
    </script>
</html>
