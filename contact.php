<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/minimalistTheme.css" rel="stylesheet">
        <link href="css/headerFooter.css" rel="stylesheet">
        
        <title>Contact Us</title>
        
        <style>
            html, #background{
                background-image: url('general_files/backgrounds/sunset_med.jpg');
            }
            
            .officer{
                background: rgba(255, 255, 255, 0.1);
            }
            
            @media screen and (min-width: 80em) and (min-device-width: 80em){
                html, #background{
                    background-image: url('general_files/backgrounds/sunset.jpg');
                }
            }
            
        </style>
    </head>
    <body>
        <div id="background"></div>
        <div id="page">
            <?php include("header.php"); ?>
            <div id="contentPane">
                
                <h2 id="pageTitle"><i>Contact</i></h2>
                
                <div class="topic top">
                    <h3 class="title">For General Questions</h3>
                    <div class="centeredBoxColumns">
			<div class="officer">
			    <p class="name">Mailing Address</p>
			    <p class="office">Stewart Center Box 622,
				128 Memorial Mall, West Lafayette, IN 47906</p>
			</div>
                        <div class="officer">
                            <p class="name">Executive Board</p>
                            <p class="office">Stewart Center, Room G20B2</p>
                            <a class="divLink" href="mailto:ppiofficers@lists.purdue.edu"><span></span></a>
                        </div>
                        <div class="officer">
                            <p class="name">Mailing List</p>
                            <p class="office">Join for Announcements and Such</p>
                            <a class="divLink" href="https://lists.purdue.edu/mailman/listinfo/ppimembers" target="blank"><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="topic">
                    <h3 class="title">Individual Officers</h3>
                    <?php include("officerList.php"); ?>
                </div>
                
            </div>
            <?php include("footer.php"); ?>
        </div>
        <?php include_once("analyticstracking.php"); ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="scripts/js/jquery.navBar.js"></script>
    </body>
</html>
