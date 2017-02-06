<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/minimalistTheme.css" rel="stylesheet">
        <link href="css/headerFooter.css" rel="stylesheet">
        
        <title>Join PPI</title>
        
        <style>
            html, #background{
                background-image: url('general_files/backgrounds/sunrise_med.jpg');
            }
            
            #page{
                background: rgba(225, 225, 225, 0.6);
            }
            
            @media screen and (min-width: 80em) and (min-device-width: 80em){
                html, #background{
                    background-image: url('general_files/backgrounds/sunrise.jpg');
                }
            }
            
        </style>
    </head>
    <body>
        <div id="background"></div>
        <div id="page">
            <?php include("header.php"); ?>
            <div id="contentPane">			

		<h2 id="pageTitle"><i>Join Purdue Pilots</i></h2>                
                <div class="topic top" >

		    <h3 class="title" id="schedule">Spring 2017 Callout Information</h3>
		    <p>
			Welcome back to campus! Our callout this semester will be on Thursday
			1/19, in ARMS 3115. Come join the club,
			ask any questions you may have, and meet everyone. Don't forget to
			bring your friends! Like our Facebook page to get consistent updates.
		    </p>
		    <div class="centeredBoxColumns">
			<div class="button" style="width: 170px;">
			    RSVP
			    <a class="divLink" href="https://www.facebook.com/PurduePilots/">
			    <span></span></a>
			</div>
		    </div>

		    <h3 class="title" id="schedule">To join...</h3>
                    <p>
                        Before 
                        you join, make sure you read a little about the club! You must be a 
                        Purdue student, faculty, staff, or the spouse of one of 
                        those people to join PPI. That is our only eligibility 
                        requirement. You may also want to look over our rules 
                        and regulations.
                    </p>
                    
                    <div class="centeredBoxColumns">
                        <div class="button" style="width: 170px;">
                            About PPI
                            <a class="divLink" href="about.php"><span></span></a>
                        </div>
                        <div class="button" style="width: 170px;">
                            Rules
                            <a class="divLink" href="rules.php"><span></span></a>
                        </div>
                    </div>
                    
                    <p>
                        Joining Purdue Pilots is a very simple affair. Just 
                        follow these steps:
                    </p>
                    
                    <ol>
                        <li>
                            Fill out an application form and sign the Purdue release form
                        </li>
                        <li>
                            Gather $115 for your semester dues and initiation fee.
                            First time members pay an initiate fee of $65 in 
                            addition to the $50 semester dues; we use this money 
                            to help pay for new equipment in our airplanes. We 
                            accept cash and checks (made out to Purdue Pilots, 
                            Inc.).
                        </li>
                        <li>
                            Come to one of our meetings and give the treasurer 
                            your filled-out forms and money.
                        </li>
                        <li>
                            The treasurer will give you a membership card and... 
                            you're part of the club! Congratulations!
                        </li>
                    </ol>
                    <p>
                        Please contact us if you have any questions, and make 
                        sure you join the mailing list to receive announcements 
                        and such!
                    </p>
                    <div class="centeredBoxColumns">
                        <div class="button" style="width: 170px;">
                            Application Forms
                            <a class="divLink" href="docs/PPIMembershipInformationForm.pdf" target="blank">
                                <span></span>
                            </a>
                        </div>
                        <div class="button" style="width: 225px;">
                            Join the Mailing List
                            <a class="divLink" href="https://lists.purdue.edu/mailman/listinfo/ppimembers">
                                <span></span>
                            </a>
                        </div>
                        <div class="button" style="width: 170px;">
                            Contact Us
                            <a class="divLink" href="contact.php">
                                <span></span>
                            </a>
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
