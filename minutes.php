<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/minimalistTheme.css" rel="stylesheet">
        <link href="css/headerFooter.css" rel="stylesheet">
        
        <title>Meeting Minutes</title>
        
        <style>
            html, #background{
                background-image: url('general_files/backgrounds/jet_med.jpg');
            }
            
            #page{
                background: rgba(225, 225, 225, 0.5);
            }

            @media screen and (min-width: 80em) and (min-device-width: 80em){
                html, #background{
                    background-image: url('general_files/backgrounds/jet.jpg');
                }
            }
        </style>
    </head>
    <body>
        <div id="background"></div>
        <div id="page">
            <?php include("header.php"); ?>
            <div id="contentPane">
                <h2 id="pageTitle"><i>Meeting Minutes</i></h2>
                <div class="topic top">
                    <p>
                        Click on a meeting date to view or download the minutes 
                        in PDF format.
                    </p>
                    <?php include("scripts/minutesListCreator.php"); ?>
                </div>
            </div>
            <?php include("footer.php"); ?>
        </div>
        <?php include_once("analyticstracking.php"); ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="scripts/js/jquery.navBar.js"></script>
    </body>
</html>

