<!DOCTYPE html><html lang="fr">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/page_parts/head_common.php');?>
        <title>Plan D'evacuation - Irie Vibes</title>
        <meta property="og:title" content="Plan D'evacuation"/>
        <meta property="og:description" content="Comment puis-je évacuer le terrain en toute sécurité? Ceci est pour la sécurité." />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_fr.php');?>
        <div class="container text-center"> 
            <div class="col-12">   
                <a href="http://www.qualitynights.be/">
                        <img alt="" class="img-fluid text-center my-2" src="/src/img/quality_nights_text.png">
                    </a>
            </div>
            <div class="container">
                <div class="row text-center">
                    <div class="col-6 col-sm-4 col-md-3">
                        <a data-toggle="tooltip" data-placement="bottom" title="Trained Personel"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/trained_personel.png" alt="Trained Personel"></a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                        <a data-toggle="tooltip" data-placement="bottom" title="Health Information"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/health_info.png" alt="Health Information"></a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                        <a data-toggle="tooltip" data-placement="bottom" title="Condoms"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/condoms.png" alt="Condoms"></a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                        <a data-toggle="tooltip" data-placement="bottom" title="Free Water"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/free_water.png" alt="Free Water"></a>
                    </div>
                    <div class="col-6 col-sm-4">
                        <a data-toggle="tooltip" data-placement="bottom" title="Earplugs & Volume Checks"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/earplugs.png" alt="Earplugs & Volume Checks"></a>
                    </div>
                    <div class="col-6 col-sm-4">
                        <a data-toggle="tooltip" data-placement="bottom" title="Initiatives for safer transport"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/safe_transport.png" alt="Initiatives for safer transport"></a>
                    </div>
                    <div class="col-6 col-sm-4">
                        <a data-toggle="tooltip" data-placement="bottom" title="Chillout Space"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/chillout.png" alt="Chillout Space"></a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                        <a data-toggle="tooltip" data-placement="bottom" title="First Aid"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/first_aid.png" alt="First Aid"></a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                        <a data-toggle="tooltip" data-placement="bottom" title="Climate Control"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/climate_control.png" alt="Climate Control"></a>
                    </div>
                    <div class="col-6 col-md-3">
                        <a data-toggle="tooltip" data-placement="bottom" title="Accessibility"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/accessibility.png" alt="Accessibility"></a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a data-toggle="tooltip" data-placement="bottom" title="Food"><img alt="" class="img-fluid border-none rounded" src="/src/img/qn_feature/food.png" alt="Food"></a>
                    </div>
                    <div class="col-12">
                        <a href="http://www.qualitynights.be/"><img alt="" class="img-fluid" src="/src/img/quality_nights_text.png"></a>
                        <p>Quality Nights est une charte que les événements, les clubs, VAD, le partenaire de prévention local et le gouvernement local signent pour veiller à ce que les événements respectent les directives vous offrant la meilleure expérience possible.</p>
                        <a href="https://www.qualitynights.be/fr/le-label-quality-nights/les-objectifs-du-label-2/"><i class="fa fa-info"></i> Qu'est-ce que c'est que Quality Nights?</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_fr.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
<!-- Tooltip JQuery -->
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
