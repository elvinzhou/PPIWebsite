<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/minimalistTheme.css" rel="stylesheet">
        <link href="css/headerFooter.css" rel="stylesheet">
        
        <title>Learn To Fly</title>
        
        <style>
            html, #background{
                background-image: url('general_files/backgrounds/chicago_med.jpg');
            }
            
            #page{
                background: rgba(255, 255, 255, 0.5);
            }
            
            .costs{
                border-collapse: collapse;
            }
            
            .costs th{
                background: rgba(200, 200, 200, 0.35);
                text-align: center;
                vertical-align: top;
            }
            
            .costs tr.odd td{
                background: rgba(200, 200, 200, 0.25);
            }
            .costs td, .costs th{
                padding: 0 5px;
                border: 1px solid rgba(200, 200, 200, 0.35);
            }
            .costs .totals{
                font-weight: 900;
            }
            
            @media screen and (min-width: 80em) and (min-device-width: 80em){
                html, #background{
                    background-image: url('general_files/backgrounds/chicago.jpg');
                }
            }
        </style>
    </head>
    <body>
        <div id="background"></div>
        <div id="page">
            <?php include("header.php"); ?>
            <div id="contentPane">
                
                <h2 id="pageTitle"><i>Learn To Fly</i></h2>
                
                <div class="pageNav">
                    <div class="centeredBoxColumns">
                        <div class="topicLink">
                            Dream Flight
                            <a class="divLink" href="#dreamflight"><span></span></a>
                        </div>
                        <div class="topicLink">
                            Learn to Fly with PPI
                            <a class="divLink" href="#learnWithPPI"><span></span></a>
                        </div>
                        <div class="topicLink">
                            The Price Tag
                            <a class="divLink" href="#cost"><span></span></a>
                        </div>
                        <div class="topicLink">
                            Not a US Citizen?
                            <a class="divLink" href="#alien"><span></span></a>
                        </div>
                    </div>
                </div>
                
                <div class="topic top" id="dreamflight">
                    <h3 class="title">Getting Started: Take a Dream Flight</h3>
                    <p>
                    Learning to fly is an exciting, one of a kind experience! Flying
                    gives you such freedom: traveling from point A to point B just 
                    became faster and more direct, not to mention more awesome. 
                    Flying brings you new views, new experiences, new 
                    knowledge, and new status - because even the most humble of 
                    us like to say the words, "Yeah, I'm a pilot."
                    </p>
                    <p>
                        Of course, flight lessons and logging hours in an 
                        airplane comes with a price tag (more on that below). But before
                        you go busting out the big bucks on flying lessons, we 
                        encourage you to take a "dream flight." A dream flight is
                        basically your first flight lesson, but for a discounted 
                        rate. You would normally pay about $90 for the training you 
                        receive during the dream flight, but Purdue Aviation 
                        will only charge $60! You'll get to spend some time with 
                        an instructor on the ground learning about flying and 
                        then you'll get to fly an airplane for a half hour. Yup, 
                        <i>you</i> get to operate the controls! This gives you 
                        the opportunity to see if flying is really for you before
                        you spend too much time or money on training. You're 
                        welcome to bring a friend or two with you as well for no
                        additional charge.
                    </p>
                    <p>
                        If you decide
                        you'd like to join Purdue Pilots after your dream flight,
                        we'll give you a $20 rebate, bringing the cost of your first
                        lesson down to $40. Please make sure you fill out the 
                        dream flight form and 
                        turn it in to the receptionist at Purdue Aviation after 
                        your flight. Without this form, we cannot give you your 
                        rebate. If you have any questions feel free to contact 
                        our president or Purdue Aviation.
                    </p>
                    <div class="centeredBoxColumns" style="margin-top: 3em;">
                        <div class="button" style="width: 170px;">
                            Dream Flight Form
                            <a class="divLink" href="docs/dream_flight_app.pdf">
                                <span></span>
                            </a>
                        </div>
                        <div class="button" style="width: 170px;">
                            President
                            <a class="divLink" href="mailto:kscribne@purdue.edu">
                                <span></span>
                            </a>
                        </div>
                        <div class="button" style="width: 170px;">
                            Purdue Aviation, LLC
                            <a class="divLink" href="http://www.purdueaviationllc.com"
                               target="blank">
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="topic" id="learnWithPPI">
                    <h3 class="title">Learn to Fly with PPI</h3>
                    <p>
                    You've taken the dream flight and decided that you want to 
                    earn your pilot's license. Follow these simple steps and 
                    you'll be on your way!
                    </p>
                    <p>
                        <b>Step 1: <a href="join.php">Join PPI</a></b><br>Membership in PPI brings you
                        lower flight fees and better insurance than you'll find 
                        elsewhere (more about club benefits 
                        <a href="about.php#membership">here</a>).
                    </p>
                    <p>
                        <b>Step 2: Find an Instructor</b><br>We rely on the 
                        excellent instructors at Purdue Aviation to train our 
                        pilots. Simply 
                        <a href="http://www.purdueaviationllc.com/contact-us">
                            contact them
                        </a> and they will take care of the rest!
                    </p>
                    <p>
                        <b>Step 3: Fly!</b><br>That's it, you're ready 
                        to go! Have a great time up there and make sure you come 
                        to club meetings and tell us your stories.
                    </p>
                </div>
                
                <div class="topic" id="cost">
                    <h3 class="title">Flight Training Costs</h3>
                    <p>
                        Flying involves a significant monetary investment and there's 
                        really no getting around that. However, there are several 
                        things you can do to lower your costs. The table below
                        shows several different cost breakdowns. The first column
                        shows the <i>minimum</i> cost to get your pilot's license 
                        with PPI. We assume that you'll only need the mandatory 
                        30 hours of dual instruction and 10 hours of solo flight 
                        plus 10 hours of ground instruction. You would be doing 
                        your training in our Cessna 150 at $85/hr with one 
                        of Purdue Aviation's instructors ($44/hr).
                    </p>
                    <table class="costs centered">
                        <tr class="odd">
                            <th style="text-align:left;">Item</th>
                            <th>Minimum Cost With PPI</th>
                            <th>Avg Cost with PPI</th>
                            <th>Avg Cost with Purdue Aviation, LLC</th>
                        </tr>
                        <tr>
                            <td style="text-align:left;">PPI Initiation Fee</td>
                            <td>$65</td>
                            <td>$65</td>
                            <td>N/A</td>
                        </tr>
                        <tr class="odd">
                            <td style="text-align:left;">PPI Semester Dues (2 sem.)</td>
                            <td>$100</td>
                            <td>$100</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td style="text-align:left;">Dual Flight Training</td>
                            <td>$3870</td>
                            <td>$6450</td>
                            <td>$7443</td>
                        </tr>
                        <tr class="odd">
                            <td style="text-align:left;">Solo Flight Training</td>
                            <td>$850</td>
                            <td>$850</td>
                            <td>$1049</td>
                        </tr>
                        <tr>
                            <td style="text-align:left;">Ground Training</td>
                            <td colspan="3" style="text-align: center;">$440</td>
                        </tr>
                        <tr class="odd">
                            <td style="text-align:left;">Cessna Pilot Center Kit & Extra Supplies</td>
                            <td colspan="3" style="text-align: center;">$360 + $50</td>
                        </tr>
                        <tr>
                            <td style="text-align:left;">Aviation Headset</td>
                            <td colspan="3" style="text-align: center;">$150</td>
                        </tr>
                        <tr class="odd">
                            <td style="text-align:left;">FAA Medical Exam</td>
                            <td colspan="3" style="text-align: center;">$90</td>
                        </tr>
                        <tr>
                            <td style="text-align:left;">FAA Written Exam</td>
                            <td colspan="3" style="text-align: center;">$135</td>
                        </tr>
                        <tr class="odd">
                            <td style="text-align:left;">Flight Test Examiner Fee</td>
                            <td colspan="3" style="text-align: center;">$400</td>
                        </tr>
                        <tr>
                            <td style="text-align:left;">Flight Test Aircraft Rental (1.5 hr)</td>
                            <td>$128.00</td>
                            <td>$128.00</td>
                            <td>$136.00</td>
                        </tr>
                        <tr class="odd totals">
                            <td style="text-align:left;">Totals</td>
                            <td>$6638</td>
                            <td>$9218</td>
                            <td>$10253</td>
                        </tr>
                    </table>
                    <p>
                        The second column shows a more typical cost. Rather than 
                        30 hours of dual instruction, we assume you'll need about
                        50. You would again be training in our Warrior.
                    </p>
                    <p>
                        The final column shows an average cost if you did your 
                        training with Purdue Aviation rather than PPI. We assume 
                        you would be flying a comparable aircraft: their Cessna 
                        172, which costs $112/hr. Like the second column, we allow 
                        for a more typical dual instruction time of 50 hours.
                    </p>
                    <p>
                        It is pretty clear that training with PPI can save you a 
                        fair chunk of change! That minimum cost also looks much 
                        more attractive than the "typical" cost, right? This 
                        difference will be a function of your abilities, motivation,
                        and study habits. We have found that students who fly often 
                        and study between lessons are able to earn their license 
                        in fewer hours than those who fly less frequently and study 
                        less.
                    </p>
                    <p>
                        One important cost consideration that we haven't factored 
                        in to this analysis is liability insurance. The FAA does 
                        not require that pilots have liability insurance, but you'll 
                        be glad you have it if you ever get into an accident. Liability
                        insurance typically costs between $200 and $250 per year 
                        from providers like AOPA or Avemco Insurance. However,
                        Purdue Pilots already has liability insurance for our 
                        members so there is no need for you to purchase any! We 
                        can only insure you when you fly our planes though; if you 
                        fly a different plane you will not be covered and will need 
                        to acquire your own insurance. It is important to note that 
                        FBO's like Purdue Aviation typically do not have liability 
                        insurance for pilots.
                    </p>
                </div>
                <div class="topic" id="alien">
                    <h3 class="title">Not a U.S. Citizen? Not a Problem!</h3>
                    <p>
                        If you're a non-resident alien there are a few rules 
                        regarding how you can take flying lessons while in the 
                        United States. Don't worry: you can earn your license 
                        just like anyone else, you'll just have to complete a
                        little extra paperwork. We've put together a guide to 
                        help you through the process of gaining approval from 
                        the Transportation Security Agency (TSA) to begin taking 
                        lessons.
                    </p>
                    <p>
                        This guide is tailored specifically to members of Purdue
                        Pilots; if you'd like more details concerning all possible 
                        options you can check out AOPA's guide 
                        <a href="http://www.aopa.org/tsa_rule" target="blank">here.</a>
                    </p>
                    <p>
                        If you are a Non-resident Alien (F-1, F-2, J-1, Visa, etc.) 
                        and you would like to receive flight training provided 
                        by Purdue Aviation, you need to do the following:
                    </p>
                    <ol>
                        <li>
                            Go to Purdue Aviation and talk to their chief 
                            flight instructor. Say that you are a non-resident 
                            alien and would like to start flight training. Bring 
                            your passport and visa as they will need to make 
                            copies of it.
                        </li>
                        <li>
                            Go to the website 
                            <a href="https://www.flightschoolcandidates.gov" target="blank">
                                flightSchoolCandidates.gov
                            </a> and register with the TSA. You will most likely 
                            fall into Category 3 for initial flight training 
                            (your Private Pilot certificate).
                            <ul>
                                <li>
                                    Specifically, you want to obtain flight 
                                    training in a single-engine piston airplane. 
                                    Type: Cessna. Model: C150. 
                                    Registration #: N11942.
                                </li>
                                <li>
                                    You will also need the address and phone 
                                    number of <a href="http://www.lafayetteaviation.com/about-contact.html" target="blank">
                                        Purdue Aviation
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Pay the processing fee of $135
                        </li>
                        <li>
                            Once your request has been received and 
                            Purdue Aviation has confirmed that you 
                            wish to start training with them, you will 
                            receive an e-mail with instructions on how 
                            to get fingerprinted.
                            <ul>
                                <li>
                                    <b>Important</b>: If you don't hear 
                                    from the TSA within a week of 
                                    submitting your information, <i>call</i> 
                                    them and ask if they have confirmed 
                                    your training request
                                </li>
                            </ul>
                        </li>
                        <li>
                            Get a prepaid FedEx or UPS envelope
                        </li>
                        <li>
                            Call the Purdue Police at (765)-494-8221 and 
                            ask for an appointment to get fingerprinted 
                            for the TSA Alien Flight Training background 
                            check. They have the necessary equipment and 
                            will send them to the TSA for you (using the 
                            prepaid envelope)
                        </li>
                        <li>
                            Wait until your request has been processed 
                            and approved by the TSA
                        </li>
                        <li>Start flying!</li>
                    </ol>
                </div>
            </div>
            <?php include("footer.php"); ?>
        </div>
        <?php include_once("analyticstracking.php"); ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="scripts/js/jquery.navBar.js"></script>
    </body>
</html>
