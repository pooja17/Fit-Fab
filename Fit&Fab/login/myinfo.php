<?php 
 session_start(); 
$db=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('fit&fab') or die(mysql_error());


?>

<!DOCTYPE html>
<html lang="en">
	

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Fit&Fab</title>
		<!-- All Stylesheets -->
		<link href="css/all-stylesheets.css" rel="stylesheet">
		<!-- ALL COLORED STYLESHEETS -->
		<link rel="alternate stylesheet" type="text/css" href="css/colors/blue.css" title="default">
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- ABOUT US BANNER STARTS -->
		<div class="inner-banner parallax-1">
			<div class="header">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-7 col-sm-6">
							<h1><span>My Info</span></h1>
							<ol class="breadcrumb">
								<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
							</li>
								<li class="active">My Info</li>
							</ol>
						</div>
					<!--	<div class="col-lg-4 col-md-5 col-sm-6">
							<div class="box blue-bg">
								<h2><strong>START</strong> to engage in sports right now</h2>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		<!-- ABOUT US BANNER ENDS -->
		<!-- NAVIGATION STARTS
			========================================================================= -->
		<nav id="navigation" class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><img src="images/logos/logo-1.png" width="195" height="70" alt="" ></a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav pull-right">
					<li><a href="index.html" class="external">Home</a></li>
					<!--	<li class="dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
							<ul class="dropdown-menu">
									<li><a href="index.html" class="external">Fitness</a></li>
							<li><a href="http://webagate.com/demos/alia/laforza-sport-fitness-yoga-multipurpose-responsive-html-template/Yoga/index.html" class="external">Yoga</a></li>
								<li><a href="http://webagate.com/demos/alia/laforza-sport-fitness-yoga-multipurpose-responsive-html-template/Fight/index.html" class="external">Fight</a></li> 
							</ul>
						</li> -->
						<li><a href="about-us.html" class="external">About Us</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Calculators<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="BMI.html" class="external">BMI</a></li>
								<li><a href="BMR.html" class="external">BMR</a></li>
								<li><a href="calories-intake.html" class="external">Caloric Intake</a></li>
								<li><a href="activity-cal.html" class="external">Activity</a></li>
								<li><a href="heart-rate.html" class="external">Heart Rate</a></li>
								<li><a href="bodyfat-cal.html" class="external">Body Fat</a></li>
								<li><a href="ideal-weight-cal.html" class="external">Ideal Weight</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Goals<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="weight-loss.html" class="external">Weight Loss</a></li>
								<li><a href="weight-gain.html" class="external">Weight Gain</a></li>
								<li><a href="maintain.html" class="external">Maintain</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Traning <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="weight-traning.html" class="external">Weight Traning</a></li>
								<li><a href="yoga.html" class="external">Yoga</a></li>
								<li><a href="cardio.html" class="external">Cardio</a></li>
							</ul>
						</li>
						<li><a href="Recipes.html" class="external">Recipes</a></li>
					<!--	<li><a href="events.html" class="external">Events</a></li>
						<li><a href="stories.html" class="external">Stories</a></li> -->
						
					<!--	<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Details <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="blog-details.html" class="external">Blog Details</a></li>
								<li><a href="classes-details.html" class="external">Classes Details</a></li>
								<li><a href="event-details.html" class="external">Events Details</a></li>
								<li><a href="trainer-details.html" class="external">Trainer Details</a></li>
							</ul>
						</li> -->
						<li><a href="myinfo.php" class="external">My Info</a></li>
						<li><a href="http://127.0.0.1/Fit&Fab/index.html" class="external">Log out</a></li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
		<!-- /. NAVIGATION ENDS
			========================================================================= -->
		<!-- ABOUT US CONTENTS STARTS
			========================================================================= -->
		<div class="about-us">
			<!-- INTRO STARTS
				========================================================================= -->
				 
			<div class="container intro">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<?php 
						$name=$_SESSION['login_user']; 
						$query = "SELECT * FROM `info` WHERE email='$name'";
						$result = mysql_query($query) or die(mysql_error());

          while( $row = mysql_fetch_assoc( $result ) ){
            
			echo "<h1>Hello {$row['name']}";
			echo "<br>";
			echo "<br>";
			echo "Gender : {$row['gender']}";
			echo "<br>";
			echo "DOB : {$row['dob']}";
			echo "<br>";
			echo "Age : {$row['age']}";
			echo "<br>";
			echo "Height : {$row['height']}cm";
			echo "<br>";
            echo "Weight : {$row['weight']}kg";
			echo "<br>";
            echo "Neck : {$row['neck']}cm";
			echo "<br>";
            echo "Waist : {$row['waist']}cm";
			echo "<br>";
			 echo "Hip : {$row['hip']}cm";
			echo "<br>";
			echo "<br>";
           
		  }

		  
						?>
						</h1>
								
						<h1> Your current body status 
						<?php 
						$name=$_SESSION['login_user']; 
						$query = "SELECT * FROM `details` WHERE email='$name'";
						$result1 = mysql_query($query) or die(mysql_error());
          while( $row1 = mysql_fetch_assoc( $result1 ) ){
			echo "<br>";
			echo "<br>";
			echo "BMI : {$row1['bmi']} kg/m2(metric units) ";
			echo "<br>";
			echo "Body Fat : {$row1['bf']}";
			echo "<br>";
			echo "Body Fat weight : {$row1['fatw']}";
			echo "<br>";
			echo "Body Lean weight : {$row1['leanw']}";
			echo "<br>";
			echo "BMR : {$row1['bmr']} Calories/day";
			echo "<br>";
			
		  }
		  
		  $query = "SELECT * FROM `details` WHERE email='$name'";
		  $result = mysql_query($query) or die(mysql_error());
		  while ($rowval = mysql_fetch_assoc($result)) {
	$bmi = $rowval['bmi'];
	$bmr = $rowval['bmr'];
}	
?><br><br>
<?php
			
		  if($bmi<18.5)
		  {
			  ?>
			 <p style="font-size:40px">You are under weight!!</p>
			 <pre>
			 <h1>You need to increase your calorie intake.
				Present BMR : <?php$bmr?> + 500 calories
				For weight gain : <?php $bmr+500?> </pre>
				<h1>For more details view : <a href="weight-gain.html">Weight Gain</a>
			  <?php
		  }
		  else if($bmi>18.5 && $bmi<25.0)
		  {
			  ?>
			  <p style="font-size:40px">You have Healthy weight!!</p>
			   <h1>To maintain you need normal BMR calorie.
			<h1>For more details view : <a href="maintain.html">Maintain</a>
			  <?php
		  }
		  else if($bmi<25.0 && $bmi<30.0)
		  {
			  ?>
			  <p style="font-size:40px">Over weight!!</p>
			   <h1>We suggest you to go for a weight loss plan.<br>
				Reduce your calorie intake by 500 calories.<br>
				Present BMR : <?php echo $bmr ?> - 500 calories<br>
				For weight loss : <?php echo $bmr-500 ?> 
				<h1>For more details view : <a href="weight-loss.html">Weight Loss</a>
			  <?php
		  }
		  else
		  {
			   ?>
			  <p style="font-size:40px">Obese!!</p>
			   <h1>We suggest you to go for a weight loss plan.<br>
				Reduce your calorie intake by 500 calories.<br>
				Present BMR : <?php echo $bmr ?> - 500 calories<br>
				For weight loss : <?php echo $bmr-500 ?> 
				<h1>For more details view : <a href="weight-loss.html">Weight Loss</a>
			  <?php
		  }
		  
		  
						?>
						<br><br>
						</h1>
						 <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="login-form">
						<a href="myinfoup.php"><button type="submit" name="update" class="btn">Update details!</a>
						</form>
						
						
						
					
				</div>
			</div>
			<!-- /. INTRO ENDS
				========================================================================= -->
			<!-- CLIENT STORIES STARTS
				========================================================================= -->
		
			<!-- /. CLIENT STORIES ENDS
				========================================================================= --> 
			<!-- TEAM STARTS
				========================================================================= -->     
		
			<!-- /. TEAM ENDS
				========================================================================= -->
			<!-- OUR PHOTOS STARTS
				========================================================================= -->
			
			<!-- /. OUR PHOTOS ENDS
				========================================================================= -->   
		</div>
		<!-- /. ABOUT US CONTENTS ENDS
			========================================================================= -->
		<!-- STRIP STARTS
			========================================================================= -->
		<div class="totop-strip blue-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"><img src="images/logos/logo-1.png" alt="" ></div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div class="scrollup"><a href="#"></a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- /. STRIP ENDS
			========================================================================= -->
		<!-- FOOTER STARTS
			========================================================================= -->
		<footer class="dark-grey-bg">
			<div class="container">
				<div class="row">
					<!-- Stories Starts -->
					<div class="col-lg-4 clearfix f-stories">
						<div class="stories-carousel">
							<!-- Story Starts -->
							<div class="block">
								<h1>Stories</h1>
								<div class="picture">
									<img src="images/news/carousel/2.jpg" class="img-responsive" alt="" >
									<div class="name">Nitin<br>Agarwal</div>
								</div>
								<div class="description">True healthy care reform starts in your kitchen, is something everyone who has to follow. for better health small steps are needed.</div>
							</div>
							<div class="block">
								<h1>Stories</h1>
								<div class="picture">
									<img src="images/news/carousel/1.jpg" class="img-responsive" alt="" >
									<div class="name">Pooja K<br>Kulkarni</div>
								</div>
								<div class="description">A fit and healthy body, that is the best fashion statement. is the new trend followed by everyone. staying fit is not a option it is the way of life.</div>
							</div>
							<!-- Story Ends -->
							<!-- Story Starts -->
							<div class="block">
								<h1>Stories</h1>
								<div class="picture">
									<img src="images/news/carousel/3.jpg" class="img-responsive" alt="" >
									<div class="name">R Afreen<br>Aftab</div>
								</div>
								<div class="description">Body is the only place you have to live in, hence its are responsibility to take care of it.</div>
							</div>
							<!-- Story Ends -->
						</div>
					</div>
					<!-- Stories Ends -->
					<!-- Links Starts -->
					<div class="col-lg-5 links">
						<div class="block">
							<h1>Pages</h1>
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<ul class="links">
										
							<li><a href="index.html">Home</a></li>
							<li><a href="about-us.html">About us</a></li>
						
						
						
						
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Exercises<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="weight-traning.html" class="external">Weight Lifting</a></li>
								<li><a href="yoga.html" class="external">Yoga</a></li>
								<li><a href="cardio.html" class="external">Cardio</a></li>
							</ul>
						</li>
										
										<li><a href="Recipes.html">Recipes</a></li>
										
										
									</ul>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<ul class="links">
									
									<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Calculator<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="BMI.html" class="external">BMI</a></li>
								<li><a href="BMR.html" class="external">BMR</a></li>
								<li><a href="calories-intake.html" class="external">Caloric Intake</a></li>
								<li><a href="activity-cal.html" class="external">Activity</a></li>
								<li><a href="heart-rate.html" class="external">Heart Rate</a></li>
								<li><a href="bodyfat-cal.html" class="external">Body fat</a></li>
								<li><a href="ideal-weight-cal.html" class="external">Ideal Weight</a></li>
							</ul>
						</li>
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Goals <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="weight-loss.html" class="external">weight loss</a></li>
								<li><a href="weight-gain.html" class="external">Weight gain</a></li>
								<li><a href="maintain.html" class="external">Maintain</a></li>
							</ul>
						</li>	
						<li><a href="signin/sign-in.html">Login</a></li>						
									</ul>
								</div>
							<!--	<div class="col-lg-5 instagram">
									<!-- SnapWidget -->
								<!--	<script src="../../../../../snapwidget.com/js/snapwidget.js"></script>
									<iframe src="http://snapwidget.com/in/?h=ZW52YXRvc3R1ZGlvfGlufDQwfDJ8Mnx8bm98OHxmYWRlT3V0fG9uU3RhcnR8eWVzfHllcw==&amp;ve=121115" title="Instagram Widget" class="snapwidget-widget" style="border:none; overflow:hidden; width:100%;"></iframe>
									Instagram Photos
								</div> -->
							</div>
						</div>
					</div>
					<!-- Links Ends -->
					<!-- Contact Starts -->
					<div class="col-lg-3 contact">
						<div class="block">
							<h1>Contacts</h1>
							<ul>
								<li>
									<div class="icon"><i class="fa fa-phone"></i></div>
									<div class="text">Telephone:  + 91 966 000 9901</div>
								</li>
							<!--	<li>
									<div class="icon"><i class="fa fa-fax"></i></div>
									<div class="text">Fax/phone:  + 91 966 000 9901</div>
								</li> -->
								<li>
									<div class="icon"><i class="fa fa-envelope"></i></div>
									<div class="text">E-mail:  <a href="#">agarwalnitin192@gmail.com</a></div>
								</li>
								<li>
									<div class="icon"><i class="fa fa-map-marker"></i></div>
									<div class="text">Adress: BMS college of Enginnering.<br>Bull temple Road.<br>Bangalore,<br>PinCode: 56 00 19</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- Contact Ends -->
				</div>
			</div>
		</footer>
		<!-- /. FOOTER ENDS
			========================================================================= -->
		<!-- COPYRIGHT STARTS
			========================================================================= -->
		<div class="copyright medium-grey-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">Copyright © 2016 <a href="#">Fit&Fab</a></div>
					<div class="col-lg-6">
						<ul class="social-icons">
							<li>Social Links:</li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /. COPYRIGHT ENDS
			========================================================================= -->
		<!-- STYLE SWITCHER PANEL STARTS
			========================================================================= -->
	
		<!-- /.STYLE SWITCHER PANEL ENDS 
			========================================================================= -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Style Switcher -->
		<script src="js/styleswitcher/styleswitcher.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
			    "use strict";
			    $("#hide, #show").click(function() {
			        if ($("#show").is(":visible")) {
			
			            $("#show").animate({
			                "margin-left": "-400px"
			            }, 400, function() {
			                $(this).hide();
			            });
			
			            $("#switch").animate({
			                "margin-left": "0px"
			            }, 400).show();
			        } else {
			            $("#switch").animate({
			                "margin-left": "-400px"
			            }, 400, function() {
			                $(this).hide();
			            });
			            $("#show").show().animate({
			                "margin-left": "0"
			            }, 400);
			        }
			    });			
			});					
		</script>
		<!-- Isotope Gallery --> 
		<script type="text/javascript" src="js/isotope/jquery.isotope.min.js"></script> 
		<script type="text/javascript" src="js/isotope/custom-isotope-mansory.js"></script>
		<!-- Magnific Popup core JS file -->
		<script type="text/javascript" src="js/magnific-popup/jquery.magnific-popup.js"></script>		
		<!-- Owl Carousel --> 
		<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>        
		<!-- FitVids --> 
		<script type="text/javascript" src="js/fitvids/jquery.fitvids.js"></script>
        <!-- ScrollTo --> 
		<script type="text/javascript" src="js/nav/jquery.scrollTo.js"></script> 
		<script type="text/javascript" src="js/nav/jquery.nav.js"></script>
		<!-- Sticky --> 
		<script type="text/javascript" src="js/sticky/jquery.sticky.js"></script>		
		<!-- Custom JS -->
		<script src="js/custom/custom.js"></script>
	</body>


</html>