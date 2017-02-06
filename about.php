<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/minimalistTheme.css" rel="stylesheet">
        <link href="css/headerFooter.css" rel="stylesheet">
        
        <title>About PPI</title>
        
        <style>
            html, #background{
                background-image: url('general_files/backgrounds/turbines_med.jpg');
            }
            
            .activityBox{
                width: 23%;
                min-width: 145px;
                overflow: hidden;
            }
            .activityBox img{
                width: 100%;
            }
            
            .activityBox figure{
                margin: 10px;
                /*max-width: 90%;*/
            }
            
            .activityBox:hover{
                background: rgba(255, 255, 255, 0.3);
            }
            
            .activityBox .more{
                visibility: hidden;
                color: #1f1f1f;
                font-size: 0.75em;
            }
            .activityBox:hover .more{
                visibility: visible;
            }
            
            .aircraft{
                width: 100%;
                overflow: hidden;
            }
            
            .aircraft .photo{
                width: 100%;
                float: left;
                text-align: center;
            }
            
            .aircraft .photo img{
                width: 100%;
                max-width: 400px;
                margin: 0 auto;
            }
            
            .aircraft .photo .number{
                /*font-size: 1.2em;*/
                font-weight: 900;
                text-align: center;
            }
            
            .aircraft .specs{
                float: left;
                min-width: 280px;
            }
            
            .aircraft .spec{
                width: 100px;
                margin: 2px;
                /*float: left;*/
            }

            .aircraft .spec p{
                color: #2f2f2f;
                text-align: center;
                margin: 0;
                -webkit-margin-top: 0;
                -webkit-margin-bottom: 0;
            }

            .aircraft .spec .metric{
                font-size: 1.5em;
            }

            .aircraft .spec .desc{
                font-size: 0.75em;
            }
            
            .aircraft .description{
                width: 100%;
                float: left;
            }
            
            .row{
                width: 100%;
                float: left;
            }
            
            .row img{
                display: none;
            }
            
            .row .description{
                float: left;
                width: 100%;
            }
            
            .QA p{
                margin: 0;
                -webkit-padding: 0;
            }
            
            .QA .Q{
                font-weight: 900;
            }
            
            .QA b{
                font-size: 1.1em;
            }
            .QA .Q, .QA .A{
                width: 100%;
            }
            
            @media screen and (min-width: 40.5em) and (min-device-width: 40.5em){
                
                
                .aircraft .photo{
                    width: 35%;
                }
                
                .aircraft .photo img{
                    display: block;
                    width: 100%;
                }
                
                .aircraft .specs{
                    margin-top: 3.1em;
                    width: 65%;
                }
                
                .row{
                    min-height: 68px;
                }
                
                .row img{
                    display: block;
                    width: 64px;
                    height: 64px;
                    margin: 2px 10px 2px 0;
                    float: left;
                }
                
                .row .description{
                    width: 85%;
                }
            }
            
            @media screen and (min-width: 80em) and (min-device-width: 80em){
                html, #background{
                    background-image: url('general_files/backgrounds/turbines.jpg');
                }
                
                .aircraft .specs{
                    margin-top: 6em;
                    max-width: 600px;
                }
                
                .row .description{
                    width: 90%;
                }
            }
            
        </style>
    </head>
    <body>
        <div id="background"></div>
        <div id="page">
            <?php include("header.php"); ?>
            <div id="contentPane">
                
                <h2 id="pageTitle"><i>About</i></h2>
                
                <div class="pageNav">
                    <div class="centeredBoxColumns">
                        <div class="topicLink">
                            The Club
                            <a class="divLink" href="#club"><span></span></a>
                        </div>
                        <div class="topicLink">
                            Membership
                            <a class="divLink" href="#membership"><span></span></a>
                        </div>
                        <div class="topicLink">
                            Our Aircraft
                            <a class="divLink" href="#aircraft"><span></span></a>
                        </div>
                        <div class="topicLink">
                            Officers
                            <a class="divLink" href="#officers"><span></span></a>
                        </div>
<!--                        <div class="topicLink">
                            FAQ
                            <a class="divLink" href="#FAQ"><span></span></a>
                        </div>-->
                    </div>
                </div>
                
                <div class="topic top" id="club">
                    <h3 class="title">The Club</h3>
                    <p>
                        Purdue Pilots, Inc. (PPI) is a student run flying club 
                        at Purdue University and an Indiana non-profit 
                        corporation. We own and operate two aircraft at the 
                        Purdue University airport: 
                        only members are permitted to rent our planes.
                    </p>
                    <p>In our planes you can...</p>
                    <div class="centeredBoxColumns">
                        <div class="activityBox">
                            <figure>
                                <img src="about_files/learn.jpg">
                                <figcaption>Learn to Fly</figcaption>
                            </figure>
                            <div class="more">Learn more...</div>
                            <a class="divLink" href="learn.php"><span></span></a>
                        </div>
                        <div class="activityBox">
                            <figure>
                                <img src="about_files/trip.jpg">
                                <figcaption>Visit New Places</figcaption>
                            </figure>
                            <div class="more">Learn more...</div>
                            <a class="divLink" href="travels.php"><span></span></a>
                        </div>
                        <div class="activityBox">
                            <figure>
                                <img src="about_files/view.jpg">
                                <figcaption>Enjoy the View</figcaption>
                            </figure>
                            <div class="more">Learn more...</div>
                            <a class="divLink" href="photos.php"><span></span></a>
                        </div>
                    </div>
                </div>
                
                <div class="topic" id="membership">
                    <h3 class="title">Membership</h3>
                    
                    <p>
                        Anyone from Purdue can 
                        join our club, including faculty, staff, students, or 
                        the spouse of any of those people. Many of our members 
                        join with absolutely no flight experience and earn their 
                        private pilot certificate on our aircraft. Other members 
                        are already pilots and take our airplanes on trips or 
                        earn more certifications. No matter how much experience 
                        you have, Purdue Pilots is here to offer you a great 
                        flying experience!
                    </p>
                    <p>
                        Membership in PPI includes several benefits:
                    </p>
                    <div class="row">
                        <img src="about_files/free.png" alt="freedom">
                        <div class="description">
                            <p>
                                <b>Freedom</b><br> 
                                Although we have our fair share of 
                                <a href="rules.php">rules</a>, our members are 
                                more or less free to fly our planes wherever 
                                they want, whenever they want, with whomever they 
                                want. You want to take a trip to San Francisco? 
                                Sure thing - we've even done that in the past! You 
                                want to take some of your friends with you so 
                                they can experience flying too? Not a problem, 
                                just make sure you check the weight and balance.
                            </p>
                            <p>
                                If you're a Purdue Flight student, you'll find that 
                                we have fewer weather restrictions than the 
                                aviation program and our planes are available to 
                                you 24/7.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <img src="about_files/shield.png" alt="insurance">
                        <div class="description">
                            <p>
                                <b>Insurance</b><br>
                                Purdue Pilots maintains an insurance policy to cover
                                both the complete hull value of our aircraft <i>and</i>
                                liability for our members.
                            </p>
                            <ul>
                                <li>$100 deductible for non-motion incidents</li>
                                <li>$500 deductible for in-motion incidents</li>
                                <li>$1,000,000 liability coverage for bodily injury 
                                    and property damage
                                </li>
                            </ul>
                            <p>
                                In the event of an incident, the club member flying 
                                the plane will be responsible for paying the 
                                deductible. However, our members are safe and 
                                responsible and this has never been an issue!
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <img src="about_files/group.png" alt="social">
                        <div class="description">
                            <p>
                                <b>Support Group</b><br>
                                PPI is, first and foremost, a <i>club!</i> We're 
                                all aviation enthusiasts and come from many areas.
                                Members range from brand new freshman to tenured
                                professors, aerospace engineers to liberal arts 
                                students, novice pilots to certified flight 
                                instructors. If you like airplanes, you'll fit right
                                in regardless of the number of flight hours you've
                                logged. Please, come join us at a club meeting and
                                meet the group!
                            </p>
                            <div class="button centered" style="width: 200px;">
                                Meeting Schedule
                                <a class="divLink" href="members.php#schedule"><span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <img src="about_files/money.png" alt="money">
                        <div class="description">
                            <p>
                                <b>Low Costs</b><br>
                                We know this is important to you. Flying is expensive 
                                and we could all use a little extra cash in our pockets.
                                Since Purdue Pilots is a non-profit corporation 
                                we can offer cheaper rent than our tax-paying 
                                friends at 
                                <a href="http://www.lafayetteaviation.com/aircraft-rental.html" 
                                   target="blank">Lafayette Aviation</a>,
                                who also rent out 
                                airplanes. We rent our airplanes for $5 to $20 
                                cheaper per hour than their counterparts at Lafayette Aviation.
                                Why should I bother with that tiny savings, you 
                                ask? The answer has several parts.
                            </p>
                            <p>
                                First, remember that we're covering your liability
                                insurance (up to $1,000,000!). FBOs like Lafayette
                                Aviation don't cover you at all. Second, joining
                                PPI gives you an awesome support group of pilots!
                                Finally, those $5 - $20 hourly savings do add up.
                                If you're going for your private pilot certificate,
                                you'll need at least 40 hours of flight training
                                and you'll probably be doing it in our Warrior 
                                (closer to the $20/hr cheaper end of the scale) -
                                do the math and you've saved yourself $800. You're
                                welcome.
                            </p>
                            <p>
                                For a numerical break down of flight training 
                                costs, check out our 
                                <a href="learn.php#cost">learn to fly</a> page.
                            </p>
                        </div>
                    </div>
                    <p style="width: 100%; overflow: hidden;">
                        Purdue Pilots membership also comes with a few obligations:
                    </p>
                    <div class="row">
                        <img src="about_files/calendar.png" alt="Attendance">
                        <div class="description">
                            <p>
                                <b>Meeting Attendance</b><br>Once you join PPI, you 
                                are required to attend at least half of our meetings.
                                More specifically, we require that you show up to at 
                                least every other one. If you miss more than two meetings
                                in a row, you face the risk of being grounded; you won't 
                                be able to fly our planes. Our meetings are short and
                                fun; we discuss the club's state of affairs and then 
                                spend a few minutes on aviation quizzes, listening to 
                                guest speakers, or sharing our own stories. It'll be 
                                fun, we promise!
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <img src="about_files/check.png" alt="Dues">
                        <div class="description">
                            <p>
                                <b>Semester Dues</b><br>PPI Membership isn't free. We
                                wish it was, but flying airplanes isn't cheap. Dues 
                                are collected at the beginning of each semester 
                                (August and January); for returning members, the charge 
                                is $50 per semester. If you are new to the club, you 
                                pay a one-time initiation fee of $65 plus the $50 for 
                                the semester. We set aside the money we collect from
                                dues and initiation to upgrade our airplanes' avionics 
                                and other hardware when needed.
                            </p>
                        </div>
                    </div>
                    <p style="width: 100%; overflow: hidden;">
                        Now that we've convinced you we're the 
                        coolest flying club around you should...
                    </p>
                    <div class="button centered" style="width: 200px; margin-top: 3em;">
                        Join PPI!
                        <a class="divLink" href="join.php"><span></span></a>
                    </div>
                </div>
                <div class="topic" id="aircraft">
                    <h3 class="title">Our Aircraft</h3>
                    <div class="aircraft">
                        <div class="photo">
                            <p class="number">Cessna 150 L - N11942</p>
                            <img src="about_files/11942_3.jpg" alt="N11942">
                        </div>
                        <div class="specs centeredBoxColumns">
                            <div class="spec">
                                <p class="metric">100</p>
                                <p class="desc">horsepower</p>
                            </div>
                            <div class="spec">
                                <p class="metric">102</p>
                                <p class="desc">KIAS Cruise</p>
                            </div>
                            <div class="spec">
                                <p class="metric">303</p>
                                <p class="desc">nm range</p>
                            </div>
                            <div class="spec">
                                <p class="metric">2</p>
                                <p class="desc">seats</p>
                            </div>
                            <div class="spec">
                                <p class="metric">1060</p>
                                <p class="desc">lbs, empty</p>
                            </div>
                            <div class="spec">
                                <p class="metric">VFR</p>
                                <p class="desc">capable</p>
                            </div>
                            <div class="spec">
                                <p class="metric">$85</p>
                                <p class="desc">hourly cost, wet</p>
                            </div>
                        </div>
                        <div class="description">
                            <p>
                                Our Cessna, affectionately nicknamed "Tucker" 
                                is flown primarily by student pilots. It
                                is a great plane to learn on, at a great price!
                            </p>
<!--                             <p>The avionics package on 11942 includes:</p>
                            <ul>
                                <li>PS Engineering 2-place intercom</li>
                                <li>King KX155 NAV/COM</li>
                                <li>Apollo Loran</li>
                                <li>KING KT76 Transponder with Mode C</li>
                            </ul>-->
                        </div>
                    </div>
	 	    <div class="aircraft">
			<div class="photo">
			    <p class="number">Piper Warrior II - N3033T </p>
			    <img src="about_files/3033T.jpg" alt="N3033T">
			</div>
			<div class="specs centeredBoxColumns">
       			    <div class="spec">
			        <p class="metric">160</p>
			        <p class="desc">horsepower</p>
			    </div>
                            <div class="spec">
                                <p class="metric">118</p>
                                <p class="desc">KIAS Cruise</p>
                            </div> 
                            <div class="spec">
                                <p class="metric">633</p>
                                <p class="desc">nm range</p>
                            </div> 
                            <div class="spec">
                                <p class="metric">4</p>
                                <p class="desc">seats</p>
                            </div> 
                            <div class="spec">
                                <p class="metric">1353</p>
                                <p class="desc">lbs, empty</p>
                            </div> 
                            <div class="spec">
                                <p class="metric">IFR</p>
                                <p class="desc">capable</p>
                            </div> 
                            <div class="spec">
                                <p class="metric">$100</p>
                                <p class="desc">hourly cost, wet</p>
                            </div> 
		        </div>
		        <div class="description">
		            <p>
			    Our Warrior, Trinity, is being flown 
			    primarily by student pilots, private 
			    pilots, as well as IFR students. Its clean panel and smooth flying 
			    capabilities make it a joy to fly and it will not disappoint you!
			    </p>
		        </div>
                    </div>
		
	 	    <div class="aircraft">
			<div class="photo">
			    <p class="number">Piper Warrior II - N4347G </p>
			    <img src="about_files/4347G.jpg" alt="N4347G">
			</div>
			<div class="specs centeredBoxColumns">
       			    <div class="spec">
			        <p class="metric">160</p>
			        <p class="desc">horsepower</p>
			    </div>
                            <div class="spec">
                                <p class="metric">118</p>
                                <p class="desc">KIAS Cruise</p>
                            </div> 
                            <div class="spec">
                                <p class="metric">633</p>
                                <p class="desc">nm range</p>
                            </div> 
                            <div class="spec">
                                <p class="metric">4</p>
                                <p class="desc">seats</p>
                            </div> 
                            <div class="spec">
                                <p class="metric">1503.4</p>
                                <p class="desc">lbs, empty</p>
                            </div> 
                            <div class="spec">
                                <p class="metric">943.6</p>
                                <p class="desc">lbs, useful load</p>
                            </div> 
                            <div class="spec">
                                <p class="metric">IFR</p>
                                <p class="desc">capable</p>
                            </div> 
                            <div class="spec">
                                <p class="metric">$110</p>
                                <p class="desc">hourly cost, wet</p>
                            </div> 
		        </div>
		        <div class="description">
		            <p>
			    Our second Warrior, Tonto, is being flown 
			    primarily by licenced private pilots, instrument rated pilots, and 
                IFR students. Its modern avionics and handling abilities make it
                an excellent IFR trainer and cross country machine.
			    </p>
		        </div>
                    </div>
		</div>

 
                <div class="topic" id="officers">
                    <h3 class="title">Officers</h3>
                    <p>
                        Our club is led primarily by students, though we do include
                        staff and faculty on our leadership team. We hold elections 
                        every fall and officers remain in office for one calendar 
                        year.
                    </p>
                    
                    <?php include("officerList.php"); ?>
                </div>
                
<!--                <div class="topic" id="FAQ">
                    <h3 class="title">Frequently Asked Questions</h3>
                    <p>
                        We get a lot of questions; we've listed some of the most
                        common questions and our answers to them below. If you 
                        have questions that we don't answer here, please feel
                        free to <a href="contact.php">contact us</a>!
                    </p>
                    <div class="QA">
                        <div class="Q">
                            <p><b>Q: </b>This is a question</p>
                        </div>
                        <div class="A">
                            <p><b>A: </b>This is the answer!</p>
                        </div>
                    </div>
                </div>-->
            </div>
            <?php include("footer.php"); ?>
        </div>
        <?php include_once("analyticstracking.php"); ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="scripts/js/jquery.navBar.js"></script>
    </body>
</html>

