<!DOCTYPE html><html lang="nl">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/page_parts/head_common.php');?>
        <title>Quality Nights - Irie Vibes</title>
        <meta property="og:title" content="Quality Nights op Irie Vibes"/>
        <meta property="og:description" content="Wat heeft Irie Vibes te bieden voor mijn veiligheid?" />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/nl/_page_parts/header_nl.php');?>
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <a href="http://www.qualitynights.be/">
                        <img alt="" class="img-fluid text-center my-2" src="/src/img/quality_nights_text.png">
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <a data-toggle="tooltip" data-placement="bottom" title="Getraind personeel"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/trained_personel.png" alt="Trained Personel"></a>
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <a data-toggle="tooltip" data-placement="bottom" title="Gezondheidsinfo"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/health_info.png" alt="Health Information"></a>
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <a data-toggle="tooltip" data-placement="bottom" title="Condooms"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/condoms.png" alt="Condoms"></a>
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <a data-toggle="tooltip" data-placement="bottom" title="Gratis Water"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/free_water.png" alt="Free Water"></a>
                </div>
                <div class="col-6 col-sm-4">
                    <a data-toggle="tooltip" data-placement="bottom" title="Oordopjes en volume-metingen"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/earplugs.png" alt="Earplugs & Volume Checks"></a>
                </div>
                <div class="col-6 col-sm-4">
                    <a data-toggle="tooltip" data-placement="bottom" title="Initiatieven voor veiliger transport"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/safe_transport.png" alt="Initiatives for safer transport"></a>
                </div>
                <div class="col-6 col-sm-4">
                    <a data-toggle="tooltip" data-placement="bottom" title="Chillout Space"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/chillout.png" alt="Chillout Space"></a>
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <a data-toggle="tooltip" data-placement="bottom" title="EHBO"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/first_aid.png" alt="First Aid"></a>
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <a data-toggle="tooltip" data-placement="bottom" title="Klimaataanpassing"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/climate_control.png" alt="Climate Control"></a>
                </div>
                <div class="col-6 col-md-3">
                    <a data-toggle="tooltip" data-placement="bottom" title="Toegankelijkheid"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/accessibility.png" alt="Accessibility"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a data-toggle="tooltip" data-placement="bottom" title="Voedsel"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/food.png" alt="Food"></a>
                </div>
                <div class="col-12">
                    <a href="http://www.qualitynights.be/">
                        <img alt="" class="img-fluid text-center my-2" src="/src/img/quality_nights_text.png">
                    </a>
                    <p>
                        Quality Nights is een charter dat events, clubs, VAD en de lokale preventiepartner en de lokale overheden tekenen om er voor te zorgen dat evenementen de richtlijnen volgen die ervoor zorgen dat je een zo goed mogelijke ervaring hebt. Wij werken samen met Quality Nights om ervoor te zorgen dat Irie Vibes voor jou écht onvergetelijk wordt.
                    </p>
                    <a href="https://qualitynights.be/nl/wat-is-quality-nights/"><i class="fa fa-info"></i> Wat is Quality Nights?</a>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_nl.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
