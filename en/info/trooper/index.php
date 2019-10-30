<html>
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Trooper - Irie Vibes</title>
        <meta property="og:title" content="Troop with us"/>
        <meta property="og:description" content="Trooper can help us earn some extra cash whenever you buy from an affiliated shop, and you don't pay a dime! Will you troop with us?" /> 
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_en.php');?>
        <!-- This is the main container that encapsulates everything content related. -->
        <div class="container content">
            <h1 style="margin-bottom:5px" class="display-7 text-center">Trooper</h1> 
            <div class="row">
                <div class="col-12 col-md-8">
                    <h3>What's Trooper?</h3>
                    <p>Trooper is an affiliate programme that allows us to earn extra money, while you just use the affiliate link. You shop through trooper, and the shops pay Trooper and Irie Vibes a percentage of your total order price. You don't pay anything extra!</p>
                    <p>Too much of a hassle? You're in luck! Trooper has built a special TrooperBot. Essentially, this is an extention that will remind you every time you land on a webshop that is affiliated with Trooper. That way, you don't miss out any chances of feeling proud of yourself for supporting us.</p>
                </div>
                <div class="col-12 col-md-4"><div class="text-center"><a href="https://drive.google.com/file/d/1b3mfn1AtoYbK0f32As_jAF5Rdo5DswtU/view"><img class="img-fluid rounded mb-2" src="https://www.trooper.be/Content/Assets/logo_trooper_small.gif"></a></div></div>
                <div class="col-12">
                    <h3>How do I install TrooperBot?</h3>
                    <p>TrooperBot is easily installed on Chrome and Firefox. Clicking on the Trooper logo above will lead you to Trooper's official guide on isntalling TrooperBot (but they don't have hyperlinks!) For Opera users, please install <a href="https://addons.opera.com/en/extensions/details/install-chrome-extensions/">this</a> compatibility plugin by the Opera team and follow the instructions for Chrome users. Here's how to install TrooperBot on your browser:</p>
                    <ol>
                        <li>Navigtate to <a href="www.trooper.be/trooperbot">www.trooper.be/trooperbot</a></li>
                        <li>Click on the icon for your corresponding browser. <i>For Opera users, see the notice above</i><br/>
                        <img class="img-fluid rounded m-2" src="/src/img/trooperbot/1.png"></li>
                        <li>CLick "Add to Firefox" or "Add" to Chrome"</li>
                        <li>Add VZW GreenForward: TrooperBot will ask you to tell them who you are, and which organisation you'd like to support. Fill in your name or other inforation (if you wish to stay anonymous) and add Search for and <b>add VZW GreenForward</b> as the organisation you wish to support</li>
                        <li>You're done! Don't forget to look out for TrooperBot's reminder to you whenever you visit an affiliated site!<br/>
                        <img class="img-fluid rounded m-2" src="/src/img/trooperbot/2.png"></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_en.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>
