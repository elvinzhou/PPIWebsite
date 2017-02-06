<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/minimalistTheme.css" rel="stylesheet">
        <link href="css/headerFooter.css" rel="stylesheet">
        
        <title>Rules and Regulations</title>
        
        <style>
            html, #background{
                background-image: url('general_files/backgrounds/clouds_med.jpg');
            }
            #page{
                background: rgba(225, 225, 225, 0.7);
            }
            
            .logbook{
                max-width: 100%;
            }
            @media screen and (min-width: 40.5em) and (min-device-width: 40.5em){
                .logbook{
                    max-width: 650px;
                }
            }
            @media screen and (min-width: 80em) and (min-device-width: 80em){
                html, #background{
                    background-image: url('general_files/backgrounds/clouds.jpg');
                }
            }
            
        </style>
    </head>
    <body>
        <div id="background"></div>
        <div id="page">
            <?php include("header.php"); ?>
            <div id="contentPane">
                
                <h2 id="pageTitle"><i>Safety Pilot Guide</i></h2>
                
                <div class="pageNav">
                    <div class="centeredBoxColumns">
                        <div class="topicLink">
                            Relevant FARs
                            <a class="divLink" href="#FARs"><span></span></a>
                        </div>
                        <div class="topicLink">
                            Example Logbook
                            <a class="divLink" href="#example"><span></span></a>
                        </div>
                        <div class="topicLink">
                            Who Should Pay?
                            <a class="divLink" href="#payment"><span></span></a>
                        </div>
                    </div>
                </div>
                
                <div class="topic top">
                    <p>
                        Unfortunately for us pilots, the FAA does a very poor job of 
                        explaining exactly what a safety pilot is, and how a safety 
                        pilot can log hours while doing so. This is a guide that will 
                        hopefully make it very clear. This information has been compiled 
                        from several sources on the internet as well as the Federal 
                        Aviation Regulations.
                    </p>
                </div>
                <div class="topic" id="FARs">
                    <h3 class="title">Relevant FAA FARs</h3>

                    <b>FAR 91.1</b>: a Pilot in command mean the person who:
                    <ol>
                        <li>Has final authority and responsibility for the operation and safety 
                        of the flight;</li>
                        <li>Has been designated as pilot in command before or during the flight; 
                        and</li>
                        <li>Holds the appropriate category, class, and type rating, if 
                        appropriate, for the conduct of the flight.</li>
                    </ol>

                    <b>FAR 91.3</b>: Responsibility and authority of the pilot in command:
                    <ol>
                        <li>The pilot in command of an aircraft is directly responsible for, and 
                        is the final authority as to, the operation of that aircraft.</li>
                        <li>In an in-flight emergency requiring immediate action, the pilot in 
                        command may deviate from any rule of this part to the extent required to 
                        meet that emergency.</li>
                        <li>Each pilot in command who deviated from a rule under paragraph (b) 
                        of this section shall, upon the request of the Administrator, send a 
                        written report of that deviation to the Administrator.</li>
                    </ol>


                    <b>FAR 91.109</b>: No person may operate a civil aircraft in simulated 
                    instrument flight unless:
                    <ol>
                        <li>The other control seat is occupied by a safety pilot who possesses 
                        at least a private pilot certificate with category and class ratings 
                        appropriate to the aircraft being flown.</li>
                        <li>The safety pilot has adequate vision forward and to each side of the 
                        aircraft, or a competent observer in the aircraft adequately supplements 
                        the vision of the safety pilot; and</li>
                        <li>Except in the case of lighter-than-air aircraft, that aircraft is 
                        equipped with fully functioning dual controls. However, simulated 
                        instrument flight may be conducted in a single-engine airplane equipped 
                        with a single, functioning, throwover control wheel, in place of fixed, 
                        dual controls of the elevator and ailerons, when:
                            <ol>
                                <li>The safety pilot has determined that the flight can 
                                be conducted safely; and</li>
                                <li>The person manipulating the controls has at least 
                                a private pilot certificate with appropriate category and
                                class ratings.</li>
                            </ol>
                        </li>
                    </ol>

                    <b>FAR 61.51</b>: A private pilot may log pilot-in-command time only for 
                    that flight during which that person:
                    <ol>
                        <li>Is the sole manipulator of the controls of an aircraft for which the 
                        pilot is rated or has privileges;</li>
                        <li>Is the sole occupant of the aircraft; or</li>
                        <li>Is acting as pilot in command of an aircraft on which more than one 
                        pilot is required under the type certification of the aircraft or the 
                        regulations under which the flight is conducted.</li>
                    </ol>
                </div>
                <div class="topic" id="example">
                    <h3 class="title">Example Logbook</h3>
                    <p>
                        Say you and your friend (also a current Private Pilot) are going 
                        for a cross country flight. You decide to fly from Lafayette 
                        (KLAF) to Peoria, IL (KPIA). You fly the outbound leg and your 
                        friend flies the returning leg. You each fly under simulated 
                        instrument with the other acting as the safety pilot. While you 
                        are flying under instruments, your friend can log pilot in 
                        command time, but not cross country time. Your friend will also 
                        log Total Flight time and SEL time equal to the amount of 
                        Pilot-In-Command time. The same is true for you when your friend 
                        is flying. To demonstrate this clearly, your logbooks 
                        might look like the ones below. Also note that you would both 
                        log night hours for both legs if the flight was conducted at 
                        night. Night hours relate to the specific conditions of the 
                        flight, not whether or not you were manipulating the controls at 
                        the time.
                    </p>

                    <p>Your logbook:</p>
                    <img class="logbook" src="images/logbook1.jpg" alt="Logbook Entry 1">

                    <p>Your friend's logbook:</p>
                    <img class="logbook" src="images/logbook2.jpg" alt="Logbook Entry 2">
                    
                    <p>A couple of very important things:</p>
                    <ol>
                        <li>When you are flying under the hood, you must write the name of your 
                        safety pilot in your logbook. You should do the same for your own 
                        records when acting as a safety pilot for someone else.</li>
                        <li>When you are the safety pilot, you are responsible for the safety of 
                        the flight. If something happens, you will be held accountable. This can 
                        have major implications so if you do not want to share the 
                        responsibility, then make sure the person flying understands clearly. 
                        You will not be designated the pilot in command and will not be able to 
                        log the time as such.</li>
                    </ol>
                </div>
                <div class="topic" id="payment">
                    <h3 class="title">Who should pay?</h3>

                    <p>
                        There are two options. The first is simply splitting the total 
                        cost of the flight evenly. This is a good method when you're just 
                        out having fun and not necessarily worried about time building. 
                        This is also good when you have another person(s) riding along 
                        that are sharing some of the cost as well. The second and 
                        probably fairest is only paying for the airplane when you are in 
                        the left seat. This method would make most sense in the scenario 
                        discussed above since John Doe decided to do another approach 
                        into Lafayette and flew for more time. It wouldn't make sense 
                        for John Smith to pay extra because of this.
                    </p>

                    <p>
                        Regardless of how you decide to share the cost, payment should 
                        be discussed and agreed upon by both parties before take-off so 
                        there are no disagreements later. Communication is absolutely 
                        paramount throughout the entire process. Make sure you and your 
                        friend are clear on payment, your responsibilities, and 
                        contingency plans. For example, if you are acting as safety 
                        pilot and see that you are on a collision course with an 
                        aircraft, you would immediately take control of the aircraft and 
                        fix the problem. Make sure your friend knows that you would say, 
                        "my controls" for example, and he would know to immediately turn 
                        them over to you without question or hesitation. Discussing all 
                        of this before hand will make flying together much easier and 
                        more importantly, much safer.
                    </p>
                </div>

            <?php include("footer.php"); ?>
        </div>
        <?php include_once("analyticstracking.php"); ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="scripts/js/jquery.navBar.js"></script>
    </body>
</html>
