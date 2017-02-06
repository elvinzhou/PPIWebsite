<!DOCTYPE html>

<html>

    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<link rel="icon" href="favicon.ico">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" >

		 <!-- Optional theme -->
		<!-- <link rel="stylesheet" href="/css/bootstrap-theme.min.css" > -->
		
		<!-- Google Fonts -->
		<link rel="stylesheet" type="text/css"
         href="https://fonts.googleapis.com/css?family=Lato|Raleway|Lobster|Merriweather">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/cover.css" rel="stylesheet">


        <title>Purdue Pilots, Inc.</title>

        

   

    </head>

    <body>
    <div class="site-wrapper" style="font-family: 'Raleway', serif;">

      <div class="site-wrapper-inner">

        <div class="cover-container">

           <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand" style="font-family: 'Montserrat', serif;">PURDUE PILOTS INC</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class = "active"><a href="index.php">Home</a></li>
                  <li><a href="about.php">About</a></li>
				  <li><a href="join.php">Join PPI</a></li>
				  <li><a href="members.php">For Members</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading" style="font-family: 'Lobster', serif;">Fly with us.</h1>
			<hr>
            <p class="lead" style="font-family: 'Merriweather', serif;">Providing low-cost flight training and aircraft rentals to Purdue faculty and students since 1956.</p>
            <p class="lead">
              <a href="about.php" class="btn btn-lg btn-default">Learn more</a>
            </p>
          </div>

          
		<div class="mastfoot">
		<div class="inner">
		<a class="centered" href="contact.php">Contact Us</a>
		<a class="centered" href="sitemap.php">Site Map</a>
		<p class="copyright">
        <!-- 
        Copyright notice: first the copyright symbol, &copy;, then the 
        year, found by a small php script, then Purdue Pilots
        -->
        &copy; <?php $t = time(); print date('Y', $t) ?> Purdue Pilots, Inc.
		</p>
		<?php include("footer.php"); ?>
            </div>
          </div>
        </div>

      </div>

    </div>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <?php include_once("analyticstracking.php"); ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <script src="scripts/js/jquery.navBar.js"></script>

    </body>

</html>



