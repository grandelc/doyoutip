<?php
	// // A required php to connect to the database
 //  	require './require/config.php';
 //  	require './require/database.php';

	// // A query that retrieves only 5 of the 
	// // most recent data from the database
	// $tip = find_all_tip();

	// //print_r($tip);

?>

<!doctype html>

<html lang="en">
	<head>
	  <meta charset="utf-8">

	  <title>Survey | Do You Tip</title>
	  <meta name="description" content="Do You Tip Survey">
	  <meta name="author" content="DylanKeenas">

	  <link rel="stylesheet" href="css/reset.css"> 
	  <link rel="stylesheet" href="css/styles.css">
	  <link rel="stylesheet" href="css/responsive.css">
	  <!-- Important Owl stylesheet -->
	<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
 
	<!-- OWL Default Theme -->
	<!-- <link rel="stylesheet" href="owl-carousel/owl.theme.css"> -->

	  <link href='http://fonts.googleapis.com/css?family=Exo+2:400,900,800,600,300,400italic|Maven+Pro:400,700' rel='stylesheet' type='text/css'>
	  <link rel="icon" type="image/png" href="icon.ico">
	  <!--[if lt IE 9]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  <![endif]-->
	</head>

	<body>
<!-- 	
		<?php if ($tip && $tip->num_rows > 0): ?>
			<?php while ($row = $tip->fetch_assoc()): ?>
				<?= $row['yes'] ?>
				<?= $row['no'] ?>
			<?php endwhile; ?>
		<?php else: ?>
			<p>There are no tips :(</p>
		<?php endif; ?>
 -->
		<!-- WRAPPER START -->
		<div id="wrapper"> 

			<header class = "group">
				<a href="index.php"><h1>Do You Tip? <span id = "net">Survey</span></h1></a>
				<a href="survey.php">
					<div id="button-hdr">
						<p>Restart</p>
					</div>
				</a>	
			</header>

			<div id="content">
				
			<h2>Survey</h2>
			<p>Some call them the grunuts and the unsung heros. Others say it's their job and they get paid to do it. Click on a service title below and let your opinion be known if they should be tipped or not!</p>

				<div id="job-slide" class="owl-carousel">
	 
				  <div class="item">
				  		<div class="job-box">
				  			<p class="job-title">Servers</p>
				  			<p class="percent">50%</p>
				  			<p class="job-text">Lorem ipsum dolor sit amet, maiorum molestie forensibus ne cum, no tempor voluptatibus vel, dictas pertinax no sed. Vis quis tantas eu, id eos omnes regione integre, epicurei salutandi deseruisse eum ex. Et duo invenire vituperatoribus, sit at invenire erroribus consequuntur.</p>
				  			<div class="survey-btn group">
					  			<div class="doTip">
					  				<p class="next">I Tip</p>
					  			</div>
					  			<div class="dontTip">
					  				<p class="next">I Don't Tip</p>
					  			</div>
				  			</div>
				  		</div>
				  </div>

				  <div class="item">
				  		<div class="job-box">
				  			<p class="job-title">Movers</p>
				  			<p class="percent">50%</p>
				  			<p class="job-text">Lorem ipsum dolor sit amet, maiorum molestie forensibus ne cum, no tempor voluptatibus vel, dictas pertinax no sed. Vis quis tantas eu, id eos omnes regione integre, epicurei salutandi deseruisse eum ex. Et duo invenire vituperatoribus, sit at invenire erroribus consequuntur.</p>
				  			<div class="survey-btn group">
					  			<div class="doTip">
					  				<p class="next">I Tip</p>
					  			</div>
					  			<div class="dontTip">
					  				<p class="next">I Don't Tip</p>
					  			</div>
				  			</div>
				  		</div>
				  </div>

				  <div class="item">
				  		<div class="job-box">
				  			<p class="job-title">Hoes</p>
				  			<p class="percent">50%</p>
				  			<p class="job-text">Lorem ipsum dolor sit amet, maiorum molestie forensibus ne cum, no tempor voluptatibus vel, dictas pertinax no sed. Vis quis tantas eu, id eos omnes regione integre, epicurei salutandi deseruisse eum ex. Et duo invenire vituperatoribus, sit at invenire erroribus consequuntur.</p>
				  			<div class="survey-btn group">
					  			<div class="doTip">
					  				<p class="next">I Tip</p>
					  			</div>
					  			<div class="dontTip">
					  				<p class="next">I Don't Tip</p>
					  			</div>
				  			</div>
				  		</div>
				  </div>

				   <div class="item">
				  		<div class="job-box">
				  			<p class="job-title">Thanks For Taking Our Survey! </p>
				  			<p class="percent">We really Appreciate That! </p>
				  			<p class="job-text">Lorem ipsum dolor sit amet, maiorum molestie forensibus ne cum, no tempor voluptatibus vel, dictas pertinax no sed. Vis quis tantas eu, id eos omnes regione integre, epicurei salutandi deseruisse eum ex. Et duo invenire vituperatoribus, sit at invenire erroribus consequuntur.</p>
				  			<div class="survey-btn group">
					  			<div class="doTip">
					  				<a href="#"><p>Donate</p></a>
					  			</div>
					  			<div class="dontTip">
					  				<p id="survey-share">Share</p>
					  			</div>
				  			</div>
				  		</div>
				  </div>
	 
				</div> <!-- SLIDE END -->	
				

			</div>	

			<footer>
			<ul id="footer-links">
				<a href="#"><li>About</li></a>
				<a href="#"><li>Donate</li></a>
				<a href="#"><li>Submit Service Job</li></a>
				<a href="#"><li>Contact</li></a>
			</ul>
			<div id="s-link-list">
			 <div id="social-icons">
				 	<a href="#"><img src="img/facebook.png" alt="facebook"></a>
				 	<a href="#"><img src="img/twitter.png" alt="twitter"></a>
				 	<a href="#"><img src="img/googleplus.png" alt="google plus"></a>
			 </div>
			 </div>

		</footer>
		</div> <!-- WRAPPER END -->

		
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Include OWL plugin -->
	<script src="owl-carousel/owl.carousel.js"></script>
	<script src="surveySlide.js" type="text/javascript"></script>

	</body>