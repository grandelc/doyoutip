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

	  <title>Do You Tip Test?</title>
	  <meta name="description" content="Do You Tip? ">
	  <meta name="author" content="DylanKeenas">

	  <link rel="stylesheet" href="css/reset.css"> 
	  <link rel="stylesheet" href="css/styles.css">
	  <link rel="stylesheet" href="css/responsive.css"> 
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
				<a href="index.php"><h1>Do You Tip? <span id = "net">.net</span></h1></a>
				<a href="survey.php">
					<div id="button-hdr">
						<p>Take Survey</p>
					</div>
				</a>
			</header>

			<div id="content">
				
			<h2>Do You Tip These Service People?</h2>
			<p>Some call them the grunuts and the unsung heros. Others say it's their job and they get paid to do it. Click on a service title below and let your opinion be known if they should be tipped or not!</p>

				<div id="tip-mation">
					
					ANIMATION BOX	

				</div>
				
				<div id="survey-btn">
					<a href="survey.php">
						<p>Take Survey</p>
					</a>
				</div>

					

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
	<script src="magic.js" type="text/javascript"></script>

	</body>