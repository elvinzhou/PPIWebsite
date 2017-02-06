<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/minimalistTheme.css" rel="stylesheet">
        <link href="css/headerFooter.css" rel="stylesheet">
        
        <title>Join PPI</title>
        
        <style>
            #contentPane p{
                font-size: 2em;
                margin-top: 20%;
            }
        </style>
    </head>
    <body>
        <div id="background"></div>
        <div id="page">
            <?php include("header.php"); ?>
            <div id="contentPane">
                
                <p class="centered">
                    Unfortunately, the page or file you are looking for no longer
                    exists!
                </p>
                
            </div>
            <?php include("footer.php"); ?>
        </div>
        <?php include_once("analyticstracking.php"); ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="scripts/js/jquery.navBar.js"></script>
    </body>
</html>
