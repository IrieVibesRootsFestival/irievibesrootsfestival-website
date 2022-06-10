<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/src/page_parts/head_common.php'); ?>
    <title>Partners - Irie Vibes</title>
    <meta property="og:title" content="Partners & Cooperations" />
    <meta property="og:description" content="View our partners and cooperations." />
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/en/_page_parts/header_en.php'); ?>
    <!-- This is the main container that encapsulates everything content related. -->
    <div class="container content">
        <p>test</p>
        <?php
        $dir_name = $_SERVER['DOCUMENT_ROOT'] . '/src/img/partners/';
        $images = glob($dir_name . "*.jpg");
        foreach ($images as $image) {
            $image_url = 'https://' . $_SERVER['HTTP_HOST'] . '/src/img/partners/' . basename($image, '.jpg');
            echo ('
            <div class="col-3 col-sm-3 my-2">
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
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/en/page_parts/footer_en.php"); ?>
</body>
<!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/src/static/pages/load_last.php'); ?>

</html>