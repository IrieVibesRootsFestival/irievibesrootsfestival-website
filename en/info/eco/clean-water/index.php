<!DOCTYPE html><html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/_page_parts/head_common.php');?>
        <title>Clean water - Irie Vibes</title>
        <meta property="og:title" content="Clean & recycled water"/>
        <meta property="og:description" content="Clean water is important for our environment. We certainly take it seriously!" />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/en/_page_parts/header_en.php');?>
        <div class="container content">         
            <h1 class="page-header">Recycled water</h1>
            <div class="row">
                <div class="col-12 col-md-9">
                    <p>Did you know that …</p>
                    <ul>
                        <li>we saved up to 50 % of water by replacing our toilets and filtering our water in cooperation with <a href="http://www.desotec.com/">Desotec Activated Carbon</a>?</li>
                        <li>each drop of water is cleaned and reused up to five times during the festival?</li>
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
        <?php include($_SERVER['DOCUMENT_ROOT'].'/en/_page_parts/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>