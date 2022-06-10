<!DOCTYPE html>
<html lang="nl">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/_page_parts/head_common.php');?>
        <title>Home - Irie Vibes</title>
        <meta property="og:title" content="Irie Vibes Livestream"/>
        <meta property="og:description" content="Kijk naar de Livestream wanneer er evenementen worden gestreamd! - Twitch" />
    </head> 
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'./_page_parts/header_nl.php');?>
        <div class="container-fluid content">
            <div class="row">
                <div class="col-12">
                    <script src="https://embed.twitch.tv/embed/v1.js"></script>
                    <div class="embed-responsive embed-responsive-16by9 rounded" id="alivestream"></div>
                    <script type="text/javascript">
                        new Twitch.Embed("alivestream", {
                            width: '100%',
                            height: '100%',
                            channel: "irievibesrootsfestival"
                        });
                    </script>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'./_page_parts/footer_nl.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
    <div id="fb-root"></div> <script async defer crossorigin="anonymous" src="https://connect.facebook.net/nl_BE/sdk.js#xfbml=1&version=v6.0"></script>
</html>
