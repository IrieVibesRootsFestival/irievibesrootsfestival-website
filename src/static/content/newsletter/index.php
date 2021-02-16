<!DOCTYPE html><html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Contact - Irie Vibes</title>
        <meta property="og:title" content="Our contact info"/>
        <meta property="og:description" content="Contact Irie Vibes" />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_en.php');?>
        <div class="content container">
            <?php
            function only_files($dir_element) {
                if (!is_dir($dir_element)) {
                    return $dir_element;
                }
            }

            function givemefiles($dir) {
                $scanned_dir = scandir($dir);
                return array_filter($scanned_dir, "only_files");
            }

            $dir_path = $_SERVER['DOCUMENT_ROOT'].'/src/static/content/newsletter/';

            givemefiles($dir_path);
            echo "<pre>";
            var_dump($scanned_dir);
            echo "</pre>";
            ?>

        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>