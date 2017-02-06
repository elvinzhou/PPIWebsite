<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/minimalistTheme.css" rel="stylesheet">
        <link href="css/headerFooter.css" rel="stylesheet">
        <link href="css/lightbox.css" rel="stylesheet">
        <link href="css/justifiedGallery.css" rel="stylesheet">
        <title>Photos</title>
        
        <style>
            html, #background{
                background-image: url('general_files/backgrounds/train_med.jpg');
            }
            
            #page{
                background: rgba(255, 255, 255, 0.6);
            }
            
            .photo{
                margin: 2px;
                float: none;
                
                display: inline-block;
                zoom: 1;
                vertical-align: top;
                
                position: relative;
            }
            
            #gallery{
                height: 100%;
                margin: 0 auto;
                overflow: hidden;
                width: 90%;
            }
            
            @media screen and (min-width: 80em) and (min-device-width: 80em){
                html, #background{
                    background-image: url('general_files/backgrounds/train.jpg');
                }
            }
            
        </style>
    </head>
    <body>
        <div id="background"></div>
        <div id="page">
            <?php include("header.php"); ?>
            <div id="contentPane">
                
                <h2 id="pageTitle"><i>Enjoy the View</i></h2>
                
                <div class="topic top" >
                    <p>
                        Climbing into an airplane offers a unique vantage point 
                        that many people never get to experience. Check out some 
                        of the stunning photos below that our members have taken 
                        from the cockpit!
                    </p>
                    
                    <div id="gallery" class="centeredBoxColumns">
                        <!--Generate all the code to display the images-->
                        <?php include("scripts/photoGenerator.php"); ?>
                    </div>
                </div>
                
            </div>
            <?php include("footer.php"); ?>
        </div>
        <?php include_once("analyticstracking.php"); ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="scripts/js/jquery.navBar.js"></script>
        <script src="scripts/js/lightbox.min.js"></script>
        <script src="scripts/js/jquery.justifiedGallery.js"></script>
        <script>
            $("#gallery").justifiedGallery();
        </script>
    </body>
</html>
