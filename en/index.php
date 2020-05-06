<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Home - Irie Vibes</title>
        <meta property="og:title" content="Home"/>
        <meta property="og:description" content="Back in time to where it all began, Irie Vibes invites you to their Back to The Roots edition during the heart of summer 2020 in Kortemark." />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_en.php');?>
        <div class="container content">
            <div class="row justify-content-center">
                <div class="col-12 text-cetner">
                    <picture>
                        <source srcset="/src/img/irie-vibes-cancelled.webp" type="image/webp">
                        <source srcset="/src/img/irie-vibes-cancelled.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/irie-vibes-cancelled.jpg"/>
                    </picture>
                </div>
                <div id="home-text" class="col-12 col-md-8 my-md-3">
                    <h1 class="mb-md-3 mt-2 mt-md-0 text-center quote">Irie Vibes Roots Festival</h1><br/>
                    <div class="text-left text-success">
                        <h1 class="mt-md-3 mb-0 px-3 quote">back to the roots</h1>
                        <p class="text-justify">
                            Irie Vibes is going back to where it all began. Irie Vibes 2020 will be 
                            once again a kickback to our roots, memories and happenings. We invite you to join us and many others at <b>Irie Vibes back to the Roots Festival 2020</b>, where the mind and body come together in a beautiful feast of colours and sounds. Don't miss a single drum hit! Bookmark our <a class="text-success" href="/en/lineup/"><i class="fas fa-link fa-xs" style="font-size: 0.6rem;"></i>line-up page</a> to your home screen. Irie!
                        </p>
                    </div>
                    <div class="text-md-right text-warning">
                        <h1 class="mt-3 mb-0 px-3 quote">one love</h1>
                        <p class="text-justify text-md-right">Here at Irie Vibes, family is important. We're a big family building towards an even bigger future. Without help from people like you, we wouldn't be able to fulfill this dream. Mash down! Visit the <a class="text-warning" href="/en/info/volunteers/"><i class="fas fa-link fa-xs" style="font-size: 0.6rem;"></i>volunteers page</a> to see if you're up for a sweet family thing.</p>
                    </div>
                    <div class="text-left text-danger">
                        <h1 class="mt-3 mb-0 px-3 quote ">be with us</h1>
                        <p class="text-justify">
                            Looking for Tickets? Buy them now! A camping ticket guarantees you a spot on our camping too. Tickets and pricing available <a class="text-danger" href="/en/tickets/"><i class="fas fa-link fa-xs" style="font-size: 0.6rem;"></i>here</a>. Why wait?
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4" id="lineup">
                    <div class="row py-2 my-3 border border-lg border-success rounded bg-img">
                        <div class="col-12"><p class="text-center bg-success rounded text-white">Lion's Den</p></div>
                        <div class="col-12">
                            <div class="text-white bg-dark px-1 rounded h4">TEASER</div>
                            <div class="facebook-responsive">
                                <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fwatch%2F%3Fv%3D1062072777464176&width=500&show_text=false&height=280&appId" width="" height="" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" allowFullScreen="true"></iframe>
                            </div>
                            <a class="d-block text-center pt-2" href="https://www.facebook.com/Spellbreakersband">Spellbreakers</a>
                        </div>
                    </div>
                    <h1 class="mb-md-3 mt-2 mt-md-0 text-center quote">Kijk eens</h1>
                    <div id="slider-wrapper" class="p-2 mb-2 rounded">
                        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/content/slider.php');?>
                    </div>
                    <h1 class="mb-md-3 mt-2 mt-md-0 text-center quote">Aftermovie</h1>
                    <div id="slider-wrapper" class="rounded p-2 mb-1">
                        <style>.embed-container { position: relative; padding-bottom: 43%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://player.vimeo.com/video/371957649?autoplay=1&portrait=false&muted=true' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
                    </div>
                </div>
                <div class="col-12"><h1 class="mb-md-3 mt-2 mt-md-0 text-center quote">music unites</h1><br/></div>
                <div class="col-12 col-md-8">
                    <h3 class="text-irie"><b>News & Praises</b></h3>
                    <!--Inserted elements here -->
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/content/news-links.php');?>  
                </div>
                <div class="col-12 col-md-4">
                    <h3 class="text-irie"><b>Realtime updates</b></h3>
                    <div class="fb-page rounded" data-href="https://www.facebook.com/IrieVibesRootsFesitval" data-tabs="timeline" data-width="" data-height="350" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"></div>
                </div>
            </div> 
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
    <div id="fb-root"></div> <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0"></script>
</html>
