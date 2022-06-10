<!DOCTYPE html>
<html lang="nl">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/_page_parts/head_common.php');?>
        <title>Tickets - Irie Vibes</title>
        <meta property="og:title" content="He, vroege vogel! Koop je ticket!"/>
        <meta property="og:description" content="Kom meer te weten over de ticketverkoop voor Irie Vibes Roots Festival" /> 
    </head>
    <body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . './_page_parts/header_nl.php'); ?>
        <!-- This is the main container that encapsulates everything content related. -->
        <script src="/src/js/eventsquare-embed.js" rel="external" type="text/javascript"></script>
        <!-- This is the main container that encapsulates everything content related. -->
        <div class="container content">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-header">Tickets</h1>
                </div>
                <div class="col-12 col-md-6">
                    <h1>Kortingen</h1>
                    <p>Woon je in Kortemark? Koop je tickets voor maar €10 per dag na vertoon van uw identiteitskaart.</p>
                    <p>Gratis toegang op vertoon van een <b>vrijetijdspas</b> of <b>cultuurpas Kortemark</b></p>
                    <p>Meer info: <a href="mailto:info@irievibes.be">info@irievibes.be</a></p>
                    <div class="row">
                        <div class="col-6">
                            <picture>
                                <source srcset="/src/img/partners/vtpas.webp" type="image/webp">
                                <source srcset="/src/img/partners/vtpas.jpg" type="image/jpeg">
                                <img alt="" class="img-fluid rounded" src="/src/img/partners/vtpas.jpg"/>
                            </picture>
                        </div>
                        <div class="col-6">
                            <picture>
                                <source srcset="/src/img/partners/cultuurkortemark.webp" type="image/webp">
                                <source srcset="/src/img/partners/cultuurkortemark.jpg" type="image/jpeg">
                                <img alt="" class="img-fluid rounded" src="/src/img/partners/cultuurkortemark.jpg"/>
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'./_page_parts/footer_nl.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
