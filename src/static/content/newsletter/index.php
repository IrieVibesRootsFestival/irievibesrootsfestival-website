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

            function printDirContent($dir) {
                $files = scandir($dir);
                sort($files); // this does the sorting
                echo ('<ul>');
                foreach($files as $file){
                    echo'<li><a href="/directory/to/list/'.$file.'">'.$file.'</a></li>';
                }
                echo ('</ul>');
            }

            printDirContent($_SERVER['DOCUMENT_ROOT'].'/src/static/content/newsletter/');
            ?>

        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>