<!DOCTYPE html><html lang="fr">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Règles - Irie Vibes</title>
        <meta property="og:title" content="Les règles du festival"/>
        <meta property="og:description" content="Quelles sont les règles du festival? Que pouvez-vous emporter avec vous et qu'est-ce qui n'est pas autorisé?" />
    </head> 
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_fr.php');?>
        <div class="container content">
            <h3 class="display-7 text-center">Règles du festival</h3> 
            <div class="row">
                <h3 class="text-irie text-uppercase col-12"><b>Apporter des objets au festival</b></h3>
                <div class="col-12 col-md-6">
                    <p class="text-danger">Ce qui n’est <b>pas</b> permis:</p>
                    <ul>
                        <li>les objets en verre</li>
                        <li>les armes</li> 
                        <li>les animaux</li> 
                        <li>des objets pointus</li>
                        <li>les feux ouvert</li>
                        <li>grimper les clôtures</li>
                        <li>l’accès au backstage</li>
                        <li>l’accès au podium</li>
                        <li>emporter vos propres boissons</li>
                        <li>construire votre propre petite fête au camping (pas de sons!)</li>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <p class="text-success">Ce qui est bien permis:</p>
                    <ul>
                        <li>Remplir les bouteilles réutilisables vides avec de l’eau au point indiqué (seulement les bouteilles plastiques transparente!)</li>
                        <li>Utilitaires pour s'occuper des enfants (couches, bouteilles, ...)</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_fr.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>