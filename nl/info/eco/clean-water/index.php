<!DOCTYPE html><html lang="nl">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/_page_parts/head_common.php');?>
        <title>Waterrecyclage - Irie Vibes</title>
        <meta property="og:title" content="Wij recycleren water!"/>
        <meta property="og:description" content="Proper water is vitaal voor de natuur. Wij helpen ook een handje!" />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/nl/_page_parts/header_nl.php');?>
        <div class="container content">         
            <h1 class="page-header">Waterrecyclage</h1>
            <div class="row">
                <div class="col-12 col-md-9">
                    <p>Wist je dat…</p>
                    <ul>
                        <li>we dankzij het vervangen van spoeltoiletten en het filteren van ons afwaswater in samenwerking met <a href="http://www.desotec.com/">Desotec Activated Carbon</a> erin slaagden ons waterverbruik tijdens het festival met de helft te verminderen?</li>
                        <li>elke druppel water bij ons tot 5 maal toe gezuiverd en hergebruikt wordt?</li>
                    </ul>
                </div>
                <div class="col-12 col-md-3"><img alt="" class="img-fluid rounded" src="/src/img/partners/desotec.jpg"/></div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <picture>
                        <source srcset="/src/img/eco/clean-water/clean-water-info.webp" type="image/webp">
                        <source srcset="/src/img/eco/clean-water/clean-water-info.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/clean-water/clean-water-infor.jpg"/>
                    </picture>
                </div>
                <div class="col-12 col-md-4">
                    <picture>
                        <source srcset="/src/img/eco/clean-water/clean-water-desotec-filter.webp" type="image/webp">
                        <source srcset="/src/img/eco/clean-water/clean-water-desotec-filter.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/clean-water/clean-water-desotec-filter.jpg"/>
                    </picture>
                </div>
                <div class="col-12 col-md-4">
                    <picture>
                        <source srcset="/src/img/eco/clean-water/clean-water-system.webp" type="image/webp">
                        <source srcset="/src/img/eco/clean-water/clean-water-system.jpg" type="image/jpeg">
                        <img alt="" class="img-fluid rounded" src="/src/img/eco/clean-water/clean-water-system.jpg"/>
                    </picture>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/nl/_page_parts/footer_nl.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'_page_parts/load_last.php');?>
</html>