<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/minimalistTheme.css" rel="stylesheet">
        <link href="css/headerFooter.css" rel="stylesheet">
        
        <title>Member Resources</title>
        
        <style>
            html, #background{
                background-image: url('general_files/backgrounds/fields_med.jpg');
            }
            
            #page{
                background: rgba(255, 255, 255, 0.7);
            }
            
            .calWrapper{
                position: relative;
                padding-bottom: 50%;
                height: 0;
                overflow: hidden;
                max-width: 600px;
                max-height: 300px;
                margin-top: 2em;
            }
            
            .calWrapper iframe{
                position: absolute;
                top:0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            @media screen and (min-width: 80em) and (min-device-width: 80em){
                html, #background{
                    background-image: url('general_files/backgrounds/fields.jpg');
                }
            }
            
        </style>
    </head>
    <body>
        <div id="background"></div>
        <div id="page">
            <?php include("header.php"); ?>
            <div id="contentPane">
                
                <h2 id="pageTitle"><i>Member Resources</i></h2>
                
                <div class="pageNav">
                    <div class="centeredBoxColumns">
                        <div class="topicLink">
                            Meeting Schedule
                            <a class="divLink" href="#schedule"><span></span></a>
                        </div>
                        <div class="topicLink">
                            Meeting Minutes
                            <a class="divLink" href="#minutes"><span></span></a>
                        </div>
                        <div class="topicLink">
                            Schedule Aircraft
                            <a class="divLink" href="#schedule"><span></span></a>
                        </div>
                        <div class="topicLink">
                            Multi-Day XC Request
                            <a class="divLink" href="#multiDayXC"><span></span></a>
                        </div>
                        <div class="topicLink">
                            Reimbursements
                            <a class="divLink" href="#reimbursements"><span></span></a>
                        </div>
                        <div class="topicLink">
                            Safety Pilot Guide
                            <a class="divLink" href="#safetyPilot"><span></span></a>
                        </div>
                        <div class="topicLink last">
                            Other Resources
                            <a class="divLink" href="#resources"><span></span></a>
                        </div>
                    </div>
                </div>
                
                <div class="topic top">
                    <h3 class="title" id="schedule">Meeting Schedule</h3>
                    We meet regularly during the fall and spring semesters. Our
                    meetings are typically in FRNY B124 on Purdue's
                    West Lafayette campus; our complete schedule is shown below.
                    <div class="centered calWrapper">
                        <iframe 
                            src="https://www.google.com/calendar/embed?showTitle=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=300&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=purdue.pilots.inc%40gmail.com&amp;color=%23182C57&amp;ctz=America%2FNew_York" 
                            style="border-width:0;" 
                            width="600" height="300" frameborder="0" scrolling="no">
                        </iframe>
                    </div>
                </div>
                
                <div class="topic" id="minutes">
                    <h3 class="title">Meeting Minutes</h3>
                    <p>
                        Our secretary takes notes at our meetings and we make 
                        those notes available to you here.
                    </p>
                    
                    <div class="centeredBoxColumns">
                        <div class="button" style="width: 170px; margin-top: 2em;">
                            Meeting Minutes
                            <a class="divLink" href="minutes.php"><span></span></a>
                        </div>
                    </div>
                </div>
                
                <div class="topic" id="schedule">
                    <h3 class="title">Schedule the Aircraft</h3>
                    <p>
                    Once you're a member of PPI you can rent out our airplanes. 
                    Purdue Aviation, LLC manages our aircraft, and they do a great 
                    job! The link below will send you to their online scheduling 
                    system. If you haven't used it before, follow the link that 
                    says "New Users: Request Login ID". If you're just starting 
                    training, your instructor will be able to set you up with a 
                    username and password.
                    </p>
                    
                    <div class="centeredBoxColumns">
                        <div class="button" style="width: 170px; margin-top: 2em;">
                            Schedule Aircraft
                            <a class="divLink" href="http://lai.kal-soft.com/" target="blank"><span></span></a>
                        </div>
                    </div>
                </div>
                
                <div class="topic" id="multiDayXC">
                    <h3 class="title">Multi-Day Cross Country Requests</h3>
                    <p>
                    According to PPI Regulations, all flights over 24-hours must 
                    receive prior approval from at least 3 members of the 
                    executive board. To request permission, follow the steps below.
                    </p>
                    <ol>
                        <li>Download the Multi-Day X-Country Request form</li>
                        <li>
                            Open the PDF file in Adobe Reader and click on the 
                            Highlight Fields button in the top right portion of 
                            the window. This will make it easier to fill out the 
                            form.
                        </li>
                        <li>
                            Fill out the information in each box as described in 
                            the form. Simply type your name and the date to "sign" 
                            the form at the bottom. Click the save button to save 
                            the data you have typed into the form.
                        </li>
                        <li>
                            Send an e-mail to the 
                            <a href=mailto:ppiofficers@lists.purdue.edu>executive board</a> 
                            and attach the PDF file with your saved information.
                        </li>
                        <li>
                            Once you receive the go-ahead from 3 of the officers, 
                            you are cleared to go! Print out a copy of the PDF 
                            form and leave the top portion with the desk at 
                            Purdue Aviation.
                        </li>
                    </ol>
                    
                    <div class="centeredBoxColumns">
                        <div class="button" style="width: 200px; margin-top: 2em;">
                            XC Request Form
                            <a class="divLink" href="docs/xcreqform.pdf" target="blank"><span></span></a>
                        </div>
                    </div>
                </div>
                
                <div class="topic" id="reimbursements">
                    <h3 class="title">Reimbursements</h3>
                    <p>
                    Chances are if you go on a long cross country flight, you'll 
                    need to buy fuel for the airplane. However, since you're 
                    paying a wet rate for the aircraft, you would be double paying 
                    for fuel. We will reimburse you for the fuel you buy, but at 
                    Purdue Aviation's rates.
                    </p>
                    <p>
                        For example, if you buy 20 gallons of fuel at $5.00 per 
                        gallon and Purdue Aviation is selling fuel at $5.50 
                        per gallon, we will give you $110 ($5.50 * 20). However,
                        if Purdue Aviation is selling fuel for $4.50 per 
                        gallon, we will give you $90 ($4.50 * 20). 
                        Purdue Aviation's prices are usually very average so you will,
                        on average, not lose any money on gas.
                    </p>
                    <p>
                        To get reimbursed, follow these steps:
                    </p>
                    <ol>
                        <li>
                            Get a receipt showing the <b>date</b>, <b>N-number</b>,
                            your <b>name</b> (sign the receipt if needed to have 
                            your name on it), and the number of <b>gallons</b>
                            purchased.
                        </li>
                        <li>
                            Print and sign the reimbursement form
                        </li>
                        <li>
                            Send <b>scanned copies</b> of the receipt, the signed form,
                            and <b>your mailing address</b> to the Treasurer.
                        </li>
                    </ol>
                    
                    <div class="centeredBoxColumns">
                        <div class="button" style="width: 200px; margin-top: 2em;">
                            Reimbursement Form
                            <a class="divLink" href="docs/CheckRequestReimbursementCertification.pdf"
                               target="blank"><span></span></a>
                        </div>
                    </div>
                </div>
                
                <div class="topic" id="safetyPilot">
                    <h3 class="title">Safety Pilot Guidelines</h3>
                    
                    <p>
                        Many of our members work on their IFR training in our 
                        airplanes. As part of that training (or even practice 
                        when you're already certified), you can fly with a 
                        "safety pilot"; he or she will keep their eyes outside 
                        while you practice your IFR skills under the hood. Since 
                        this can be a tricky situation when it comes to logging 
                        time and paying the bill, we've put together a guide 
                        for you!
                    </p>
                    
                    <div class="centeredBoxColumns">
                        <div class="button" style="width: 200px; margin-top: 2em;">
                            Safety Pilot Guide
                            <a class="divLink" href="safetyPilot.php"><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="topic" id="resources">
                    <h3 class="title">Other Resources</h3>
                    
                    <div class="centeredBoxColumns">
                        <div class="button" style="width: 170px; margin-top: 2em;">
                            Panel Training
                            <a class="divLink" href="894-panel-training.php"><span></span></a>
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
