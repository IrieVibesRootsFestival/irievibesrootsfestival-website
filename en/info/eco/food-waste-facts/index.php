<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/page_parts/head_common.php');?>
    <title>Food Waste Facts - Irie Vibes</title>
    <meta property="og:title" content="Food Waste Facts" />
    <meta property="og:description"
        content="Food waste is an international problem. Irie Vibes, Esperanzah and La Condition Publique have created an interactive course to learn about commonly wasted food products, and how to reuse them." />
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/en/_page_parts/header_en.php');?>
    <div class="container content">
        <h1 class="page-header">Food Waste Facts</h1>
        <object data="/src/static/FOOD-WASTE-FACTS-WEB.pdf#toolbar=0&navpanes=0&scrollbar=0" type=”application/pdf”
            width=”100%” height=”100%”>
            This browser does not support PDFs. Please <a href="/src/static/FOOD-WASTE-FACTS-WEB.pdf">download the
                PDF</a> to view it.
        </object>
    </div>
    <!-- Include Footer -->
    <footer>
        <?php include($_SERVER['DOCUMENT_ROOT']."/en/page_parts/footer_en.php");?>
    </footer>
</body>
<!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
<?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>

</html>