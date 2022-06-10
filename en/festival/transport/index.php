<!DOCTYPE html><html lang="en">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/_page_parts/head_common.php');?>
        <title>Transport - Irie Vibes</title>
        <meta property="og:title" content="Transport"/>
        <meta property="og:description" content="Find your commute for Irie Vibes Roots Festival" />
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/en/_page_parts/header_en.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <div class="container content">
            <h1 class="page-header">Transport</h1> 
            <h3 class="text-irie"><b>Public transport</b></h3>
            <p>Search for your best route to the festival at <a href="https://www.delijn.be/nl/routeplanner/">DeLijn Routeplanner</a>.<br/></p>   
            <p>Kortemark train station is located at 2 km from the festival.<br/> 
                There will be a <b>free shuttle bus from the station to the festival and back</b> on Thursday, Friday and Saturday. 
            </p>
            <h3 class="text-irie"><b>Bicycle</b></h3>
            <p>Right in front of the festival entrance, there is a <b>free parking for bicycles</b>.<br/></p>
            <p>If you are in doubt whether or not to use public transport or the bike, these reasons may convince you:</p>
            <ul>
                <li>You help in reducing the overall environmental gas emissions</li>
                <li>You’ll have time to meet new people</li>
                <li>Public transportation or using the bike allows you to relax</li>
                <li>You’ll save money and improve your personal health</li>
                <li>You’ll definitely make new and interesting friends</li>
            </ul>
            <h3 class="text-irie"><b>Car parking</b></h3>
            <p>The car parking (<b>€5</b>) is located right in front of the festival entrance.
                If you are coming to the festival by car, try carpooling with <a href="https://www.carpool.be/nl/common/app">Carpool.be</a>.
            </p>                
            <h3 class="text-irie"><b>Circulation plan</b></h3>
            <p>A PDF of our circulation plan is available <a href="/src/static/circulation_plan.jpg">here</a>.</p>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/en/_page_parts/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>