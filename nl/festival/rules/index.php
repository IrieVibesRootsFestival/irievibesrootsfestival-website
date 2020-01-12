<!DOCTYPE html><html lang="nl">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Festival regels - Irie Vibes</title>
        <meta property="og:title" content="De regels op het festival"/>
        <meta property="og:description" content="Hier vind je de regels van het festival terrein. Lezen is essentieel!" /> 
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_nl.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <div class="container content">
            <h3 class="text-irie text-uppercase col-12"><b>Festivalregels</b></h3>
            <div class="row">
                <div class="col-12 col-md-6">
                    <p class="text-danger">Dit is niet toegelaten:</p>
                    <ul>
                        <li>glas</li>
                        <li>wapens</li> 
                        <li>dieren (met uitzondering tot begeleidende dieren)</li> 
                        <li>scherpe voorwerpen</li>
                        <li>open vuur of eigen barbecue toestellen</li>
                        <li>over de hekken klimmen</li>
                        <li>toegang tot de backstage ruimte</li>
                        <li>toegang tot het podium</li>
                        <li>eigen drank meenemen</li>
                        <li>je eigen soundsystem mee nemen naar de camping</li>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <p class="text-success">Dit is toegelaten:</p>
                    <ul>
                        <li>een hervulbare fles: Je kan je fles vullen met water aan het waterpunt. Het is gratis! (Alleen transparante plastic flessen.)</li>
                        <li>eigen voorziene producten om je baby of kind te verzorgen (luiers, drinkfles, ...)</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_nl.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>