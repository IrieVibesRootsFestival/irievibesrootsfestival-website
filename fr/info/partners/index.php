<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/_page_parts/head_common.php'); ?>
    <title>Partenaires - Irie Vibes</title>
    <meta property="og:title" content="Partenaires" />
    <meta property="og:description" content="Voir nos partenaires de cette année" />
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/fr/_page_parts/header_fr.php"); ?>
    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="page-header">Partenaires</h1>
                <p class="text-muted">Sponsors et coopérations</p>
            </div>
            <?php
            $dir_name = $_SERVER['DOCUMENT_ROOT'] . '/src/img/partners/';
            $images = glob($dir_name . "*.jpg");
            foreach ($images as $image) {
                $image_url = 'https://' . $_SERVER['HTTP_HOST'] . '/src/img/partners/' . basename($image, '.jpg');
                echo ('
                    <div class="col-4 col-sm-2 my-1">
                        <picture>
                            <source srcset="' . $image_url . '.webp" type="image/webp">
                            <img alt="' . basename($image, '.jpg') . '" class="img-fluid rounded" src="' . $image_url . '.jpg" type="image/jpeg">
                        </picture>
                    </div>
                    ');
            }
            ?>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/fr/_page_parts/footer_fr.php'); ?>
    </div>
</body>
<!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/_page_parts/load_last.php'); ?>
</script>

</html>