<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/minimalistTheme.css" rel="stylesheet">
        <link href="css/headerFooter.css" rel="stylesheet">
        
        <title>Purdue Pilots, Inc.</title>
        
        <style>
            html, #background{
                background-image: url('general_files/backgrounds/map_med.jpg');
            }
            
            #page{
                background: rgba(225, 225, 225, 0.75);
            }
            
            div.column{
                max-width: 29%;
                margin: 0 4%;
                text-align: left;
                overflow: hidden;
            }
            
            div.column .title{
                font-size: 1em;
            }
         
            div.column ul{
                padding-left: 1em;
                margin-top: 1em;
            }
            div.column li{
                display: block;
                list-style: none;
                font-size: 0.8em;
            }
            
            div.column a{
                color: inherit;
            }
            
            div.column a:hover{
                text-decoration: underline;
            }
            @media screen and (min-width: 80em) and (min-device-width: 80em){
                html, #background{
                    background-image: url('general_files/backgrounds/map.jpg');
                }
            }
        </style>
    </head>
    <body>
        <div id="background"></div>
        <div id="page">
            <?php include("header.php"); ?>
            <div id="contentPane">
                <h2 id="pageTitle"><i>Site Map</i></h2>
                <div class="topic top">
                    <div class="centeredBoxColumns">
                        <div class="column">
                            <h4 class="title"><a href="about.php">About PPI</a></h4>
                            <ul>
                                <li><a href="learn.php">Learn To Fly</a></li>
                                <li><a href="travels.php">Where We've Been</a></li>
<!--                                <li><a href="friends.php">The Pilot Life</a></li>-->
                                <li><a href="photos.php">Our Photos</a></li>
                                <li><a href="rules.php">Club Rules</a></li>
                                <li><a href="join.php">Join PPI</a></li>
                                <li><a href="learn.php#alien">Non-Resident Guide</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                        
                        <div class="column">
                            <h4 class="title"><a href="members.php">Member Resources</a></h4>
                            <ul>
                                <li><a href="members.php#schedule">Meeting Schedule</a></li>
                                <li><a href="minutes.php">Meeting Minutes</a></li>
                                <li><a href="members.php#multiDayXC">Multi-Day XC Requests</a></li>
                                <li><a href="safetyPilot.php">Safety Pilot Guide</a></li>
                            </ul>
                        </div>
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

