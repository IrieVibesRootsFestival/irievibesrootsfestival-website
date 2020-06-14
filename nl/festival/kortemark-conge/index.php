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
                <span class="display-7 d-block mx-auto">Kortemark Conge</span>
                <!-- Upper banner block -->
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="embed-responsive embed-responsive-16by9 rounded mb-3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6GhMiDClsqk"></iframe>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="embed-responsive embed-responsive-16by9 rounded mb-3">
                                <iframe class="embed-responsive-item" src="//player.cdn01.rambla.be?account_id=VzaPKg&amp;item_id=W9MoDP" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Text block block (left) -->
                <div class="col-12 col-md-7">
                    <h3>Wat is Kortemark Congé eigenlijk?</h3>
                    <p>Kortemark Congé is een lokaal initiatief om buurtbewoners samen te brengen en te laten genieten van evenementen in de buurt waar Irie Vibes Roots Festival deel van uit maakt. Inwoners van Kortemark kunnen dan in hun eigen buurt evenementen ontdekken, hun buurtbewoners leren kennen, de dreivende krachten achter cultuur en genieten van hun eigen gemeente. Irie Vibes Roots Festival laat festivalgangers op Donderdag gratis een kijkje nemen op het festival terrein, genieten van keigekke reggae of wereldmuziek, en vooral laten zien dat Kortemark toch écht de place-to-be is voor hen.</p>
                </div>
                <!-- Img block (right) -->
                <div class="col-12 col-md-5">
                    <a href="https://www.facebook.com/events/622231101564639/" rel="Kortemark Congé Facebook Page">
                        <img alt="" src="/src/img/kortemark_conge.jpg" class="img-fluid rounded"/>
                    </a>
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
