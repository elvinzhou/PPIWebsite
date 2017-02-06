<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/minimalistTheme.css" rel="stylesheet">
        <link href="css/headerFooter.css" rel="stylesheet">
        
        <title>Places We've Been</title>
        
        <style>
            html, #background{
                background-image: url('general_files/backgrounds/city_med.jpg');
            }
            
            .mapWrapper{
                position: relative;
                padding-bottom: 60%;
                height: 0;
                overflow: hidden;
                max-width: 1000px;
                max-height: 600px;
            }
            
            .mapWrapper iframe{
                position: absolute;
                top:0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            
            @media screen and (min-width: 80em) and (min-device-width: 80em){
                html, #background{
                    background-image: url('general_files/backgrounds/city.jpg');
                }
            }
            
        </style>
    </head>
    <body>
        <div id="background"></div>
        <div id="page">
            <?php include("header.php"); ?>
            <div id="contentPane">
                
                <h2 id="pageTitle"><i>The Places We've Been</i></h2>
                
                
                
                <div class="topic top">
                    <p>
                        Our members have flown our airplanes to many different 
                        airports throughout the years. Check out the map below 
                        to see where we've been!
                    </p>
                    
                    <div class="mapWrapper centered">
                        <iframe src="https://mapsengine.google.com/map/embed?mid=zgrug3Fy3Rf8.kYuoZmNLSUOY"
                                width="1000" height="600"></iframe>
                    </div>
                </div>
                
            </div>
            <?php include("footer.php"); ?>
        </div>
        <?php include_once("analyticstracking.php"); ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="scripts/js/jquery.navBar.js"></script>
    </body>
</html>
