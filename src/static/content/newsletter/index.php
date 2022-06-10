<!DOCTYPE html><html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/_page_parts/head_common.php');?>
        <title>Contact - Irie Vibes</title>
        <meta property="og:title" content="Our contact info"/>
        <meta property="og:description" content="Contact Irie Vibes" />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/en/_page_parts/header_en.php');?>
        <div class="content container">
            <h1>Newsletter Archive / Nieuwsbriefarchief / Archives du Bulletin</h1>
            <?php
            function printDirContent($dir) {
                $files = array_slice(scandir($dir), 2);
                sort($files); // this does the sorting
                echo ('<ul>');
                foreach($files as $file){
                    if(!is_dir($file) and $file!="index.php"){
                        echo'<li><a href="/src/static/content/newsletter/'.$file.'">'.$file.'</a></li>';
                    }  
                }
                echo ('</ul>');
            }

            printDirContent($_SERVER['DOCUMENT_ROOT'].'/src/static/content/newsletter/');
            ?>

        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/en/_page_parts/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>