<html>
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Groene Vent Award - Irie Vibes</title>
        <meta property="og:title" content="Onze Groene Vent"/>
        <meta property="og:description" content="Wij wonnen onlangs de Groene Vent Award. Wat betekent die nu eigenlijk?" />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_nl.php');?>
        <div class="container content">         
            <h1 style="margin-bottom:5px" class="display-7 text-center">Groene Vent Award</h1>
            <br/>
            <div class="row">
                <div class="col-12 col-md-9">
                    <p>Wist je dat …</p>
                    <ul>
                        <li>we in 2017 behoorden tot de finalisten van het GroenEvent Award?</li>
                        <li>onze ecologische initiatieven ervoor zorgen dat we in 2018 de GroenEvent Award mochten ontvangen binnen de categorie kleine evenementen?</li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 rounded">
                    <div class="fb-video" data-href="https://www.facebook.com/facebook/videos/10153231379946729/" data-width="auto" data-show-text="false">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6"><img class="img-fluid rounded" src="/src/img/eco/ge-0.webp"/></div>
                <div class="col-12 col-md-6"><img class="img-fluid rounded" src="/src/img/eco/ge-1.webp"/></div>
                <div class="col-12 col-md-6"><img class="img-fluid rounded" src="/src/img/eco/ge-2.webp"/></div>
                <div class="col-12 col-md-6"><img class="img-fluid rounded" src="/src/img/eco/ge-3.webp"/></div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_nl.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
    <div id="fb-root"></div>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
</html>