<html>
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Waterrecyclage - Irie Vibes</title>
        <meta property="og:title" content="Wij recycleren water!"/>
        <meta property="og:description" content="Proper water is vitaal voor de natuur. Wij helpen ook een handje!" />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_nl.php');?>
        <div class="container content">         
            <h1 style="margin-bottom:5px" class="display-7 text-center">Waterrecyclage</h1>
            <br/>
            <div class="row">
                <div class="col-12 col-md-3 order-md-2"><img class="img-fluid rounded" src="/src/img/partners/desotec.jpg"/></div>
                <div class="col-12 col-md-9">
                    <p>Wist je dat…</p>
                    <ul>
                        <li>we dankzij het vervangen van spoeltoiletten en het filteren van ons afwaswater in samenwerking met <a href="http://www.desotec.com/">Desotec Activated Carbon</a> erin slaagden ons waterverbruik tijdens het festival met de helft te verminderen?</li>
                        <li>elke druppel water bij ons tot 5 maal toe gezuiverd en hergebruikt wordt?</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4"><img class="img-fluid rounded" src="/src/img/eco/clean-water-info.png"/></div>
                <div class="col-12 col-md-4"><img class="img-fluid rounded" src="/src/img/eco/clean-water-desotec-filter.jpg"/></div>
                <div class="col-12 col-md-4"><img class="img-fluid rounded" src="/src/img/eco/clean-water-system.jpg"/></div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_nl.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>