<!DOCTYPE html><html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Kortemark Congé - Irie Vibes</title>
        <meta property="og:title" content="Kortemark Congé"/>
        <meta property="og:description" content="Everything there is to know about Kortemark Congé in and around Irie Vibes Roots Festival" />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_en.php');?>
        <!-- Main Content --> 
        <div class="container content">
            <div class="row">     
                <div class="col-12 text-center"><span class="display-7">Kortemark Conge</span></div>
                <!-- Left column, first block. -->
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="embed-responsive embed-responsive-16by9 rounded mb-3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6GhMiDClsqk"></iframe>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="embed-responsive embed-responsive-16by9 rounded mb-3">
                                <iframe class="embed-responsive-item" src="//player.cdn01.rambla.be?account_id=VzaPKg&amp;item_id=W9MoDP" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="https://www.facebook.com/events/622231101564639/" rel="Kortemark Congé Facebook Page">
                                <img alt="" src="/src/img/kortemark-conge.jpg" class="img-fluid rounded"/>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Right column, first block. -->
                <div class="col-12 col-md-6 col-lg-4 d-none d-md-block">
                    <div class="text-center">
                        <div class="fb-page" data-href="https://www.facebook.com/events/2326818524093825/" data-tabs="timeline, events" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/events/2326818524093825/" class="fb-xfbml-parse-ignore"><a 
                    href="https://www.facebook.com/events/2326818524093825/">Kortemark Congé</a></blockquote></div>
                    </div>
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
            <!-- Include TTF page content -->
            <?php include($_SERVER['DOCUMENT_ROOT'].'/en/info/trim-the-footprint/core.php');?>
        </div>        
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_en.php');?>        
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
