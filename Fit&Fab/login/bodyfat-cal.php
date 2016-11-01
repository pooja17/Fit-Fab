<?php

function maleFat($h,$n,$w) {
return round((495/(1.0324-0.19077*(log($w-$n)/log(10))+0.15456*(log($h)/log(10)))-450),3);
};
function femaleFat($h,$n,$w,$r) {
return round((495/(1.29579-0.35004*(log($w+$r-$n)/log(10))+0.22100*(log($h)/log(10)))-450),3);
};
$d = '';
$s = '';
$h = '';
$n = '';
$w = '';
$r = '';
$m = '';
$f = '';
if (isset($_POST['b'])) {
if (isset($_POST['s'])) {
   if ($_POST['s'] === 'm' || $_POST['s'] === 'f') $s = $_POST['s'];
}
if (isset($_POST['d'])) {
   if ($_POST['d'] === '1' || $_POST['d'] === '2.54') $d = $_POST['d'];
}
if (isset($_POST['h'])) {
   if (is_numeric($_POST['h'])) $h = trim($_POST['h']);
}
if (isset($_POST['n'])) {
   if (is_numeric($_POST['n'])) $n = trim($_POST['n']);
}
if (isset($_POST['w'])) {
   if (is_numeric($_POST['w'])) $w = trim($_POST['w']);
}
if (isset($_POST['r'])) {
   if (is_numeric($_POST['r'])) $r = trim($_POST['r']);
}
if ($s === '') {$m = 'Choose Male or Female';}
else {
	if ($d === '') {$m = 'Choose Centimetres or Inches';}
	else {
	    if ($m === '' && !is_numeric($h)) {$m = 'Enter your height';}
	    else {
	        $h1 = $h*$d;
	        if ($h1 < 100 || $h1 > 250) {$m = 'Invalid height entered';}
	        else if ($m === '' && !is_numeric($n)) {$m = 'Enter your neck size';}
	        else {
	            $n1 = $n * $d;
	            if ($n1 < 20 || $n1 > 60) {$m = 'Invalid neck size entered';}
	            else if ($m === '' && !is_numeric($w)) {$m = 'Enter your waist size';}
	                else {
	                    $w1 = $w * $d;
	                    if ($w1 < 30 || $w1 > $h1) {$m = 'Invalid waist entered';}
	                }
	        }
	    }
	}
}
if ($m === '' && $s === 'm') {
   $f = maleFat($h1,$n1,$w1) . '%';
} else if ($m === '' && $s === 'f') {
   if (!is_numeric($r)) {$m = 'Enter your hip size';}
   else {
      $r1 = $r * $d;
	  if ($r1 < 40 || $r1 > 200) {$m = 'Invalid hip size entered';}
	  else $f = femaleFat($h1,$n1,$w1,$r1) . '%';
   }  
}
}
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
							<h1><span>Body Fat Calculator</span></h1>
							<ol class="breadcrumb">
								<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
							</li>
								<li class="active">Body Fat Calculator</li>
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
								<li><a href="bodyfat-cal.php" class="external">Body Fat</a></li>
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
						<li><a href="http://127.0.0.1/Fit&Fab/index.html" class="external">Log Out</a></li>
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
						<h1>Body Fat Calculator</h1>
						
						<div class="description"><strong>What Is Body Fat?</strong><br>The scientific name for body fat is "adipose tissue." Adipose tissue serves a number of important functions. It's primary purpose is to store lipids from which the body creates energy. It also secretes a number of important hormones.<br>

Having an excess of body fat leads to the condition of obesity, and that can be unhealthy. Some people are more genetically predisposed to excess body fat, and others build it up from lack of exercise and bad diets.<br>

But body fat stored in the abdominal region can be reduced by diet and exercise. Women and men store body fat differently – after the age of 40, or after menopause in the case of women, reduced sexual hormones can lead to excess body fat around the stomach in men, and around the buttocks and thighs in women.<br>
						<br><br>
						
						<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" align="center">
						<input type="hidden" name="b" value="1">
						<fieldset id="bfat">
						<legend>Body Fat Calculator</legend>
						<div class="bfatmessage"><span><?php echo $m; ?></span></div>
						<div><label for="bfats1" class="bfatb"><input type="radio" id="bfats1" name="s" value="m"<?php if ($s === 'm') echo ' checked="checked"'; ?>>Male</label> <label for="bfats2" class="bfatb"><input type="radio" id="bfats2" name="s" value="f"<?php if ($s === 'f') echo ' checked="checked"'; ?>>Fenale</label></div>
						<div><label for="bfatd1" class="bfatb"><input type="radio" id="bfatd1" name="d" value="1"<?php if ($d === '1') echo ' checked="checked"'; ?>>Centimetres</label> <label for="bmid2" class="bfatb"><input type="radio" id="bfatd2" name="d" value="2.54"<?php if ($d === '2.54') echo ' checked="checked"'; ?>>Inches</label></div>
						<div><label for="bfathh">Height:</label> <input type="text" id="bfath" name="h" size="6" value="<?php echo $h ?>"></div>
						<div><label for="bfatn">Neck:</label> <input type="text" id="bfatn" name="n" size="6" value="<?php echo $n ?>"></div>
						<div><label for="bfatw">Waist:</label> <input type="text" id="bfatw" name="w" size="6" value="<?php echo $w ?>"></div>
						<div><label for="bfatr">Hips:</label> <input type="text" id="bfatr" name="r" size="6" value="<?php echo $r ?>"></div>
						<div><input type="submit" value="Calculate" id="bfatbutton"></div>
						<div><label for="f">Body Fat:</label> <input type="text" id="bfatf" name="f" size="6" readonly="readonly" value="<?php echo $f ?>"></div>
						</fieldset>
						</form>
						<br><br>
						
						<strong>Body Fat and Being Overweight</strong><br>
						Being overweight does not necessarily mean that you have an excess of body fat. Powerfully muscled people often are overweight. A certain amount of body fat is also necessary to staying alive. Human beings also have a specialized kind of body fat called "Brown fat." It is located mainly around the neck and large blood vessels of the thorax, and it serves to generate heat to help keep us warm in severe cold.<br><br>
						<strong>What's Wrong with Excess Body Fat?</strong><br>
						As we've said, it's appropriate to think of fat as an important producer of essential hormones. Our bodies' functions are controlled by hormones, and so excess or lack of critical ones can seriously affect our health. Scientists have learned that excess body fat, especially abdominal fat, disrupts the normal balance and functioning of these hormones.<br>

						It is known that body fat pumps out immune system chemicals called cytokines that can increase the risk of cardiovascular disease. These biochemicals are thought to make cells less sensitive to insulin, blood pressure, and blood clotting.<br>

						Another reason that abdominal body fat in excess can be so harmful is that it is located near the portal vein, which carries blood from the intestinal area to the liver. Substances released by body fat, including free fatty acids, enter the portal vein and travel to the liver, where they can impede its functioning.<br>

						Abdominal body fat is directly linked with higher total cholesterol and specifically with the so-called "bad" cholesterol that can clog arteries and lead to a heart attack.<br>

						Insulin resistance means that your body's muscle and liver cells don't respond adequately to normal levels of insulin. Insulin is responsible for carrying glucose into the body's cells. When there is insulin resistance, glucose levels in the blood rise, heightening the risk for diabetes.<br><br>
						<strong>Measuring Body Fat</strong><br>
						Specific techniques must be used to measure body fat. The U.S. Navy has come up with a straightforward and useful method – equations developed by Drs. Hodgdon and Beckett at the Naval Health Research Center take into account differences in the way men and women accumulate fat, thus different measurements are required.<br>

						Measure the circumference of your waist at a horizontal level around the navel for men, and at the level with the least width for women. Don't pull your stomach in.<br>
						Measure the circumference of the neck. Start below the larynx with the tape sloping slightly downward to the front. Avoid flaring your neck out.<br>
						For women only: Measure the circumference of the hips, at the largest horizontal measure.<br>


						body fat calculator formula for man:<br>
						495/(1.0324-0.19077(LOG(waist-neck))+0.15456(LOG(height)))-450<br>

						body fat calculator formula for woman:<br>
						495/(1.29579-0.35004(LOG(waist+hip-neck))+0.22100(LOG(height)))-450<br>
						Now plug the numbers into our calculator. But please understand that this is only an estimate – precise calculation of body fat requires instruments like bioelectric impedance analysis or hydrostatic density testing. You'll need to see a doctor if you want to be tested with absolute precision.<br><br>
						<strong>Controlling Body Fat</strong><br>
						There are thousands of proposals on the Web to help control or reduce body fat.<br>

						But complicated gimmicks aren't needed: Good old-fashioned changes in diet and the use of the right kind of exercise will do the trick.<br>

						The first thing is to avoid "intensive programs." To lose body fat, and keep it off, you need to make long-term lifestyle changes. Find an exercise regime that you can work at regularly. Reduce calories in your diet gradually and carefully, so that you maintain the changes.<br>

						Now limit the amount of carbohydrates you consume. Again, don't make any radical changes like giving up all carbs. Just cut down on starchy foods like potatoes, rice, pasta and bread. Too much of these provide your body with more than it needs for energy and energy storage, and the remaining part will be stored as fat. Cut back on them, replacing them when possible or limiting amounts when not.<br>

						Cut back on sweets too. Excess sugar consumed will be stored as fat. Satisfy your sweet tooth occasionally, but try to replace cakes and candy with fresh fruit. Avoid soda and other high-sugar soft drinks, replacing it with fruit juice if possible.<br>

						Intensive exercise for short periods is the best way to burn fat. That means running on the treadmill, or rowing, or working out with weights. Specific exercises to reduce your girth, like sit-ups, may have no effect at all if not combined with an intense workout.<br>

						Change your diet, do some exercise, and you will feel better and successfully reduce body fat.<br>

					</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="picture"><img src="bodyfat/1.jpg" class="img-responsive" alt=""></div>
						
					</div>
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
									<img src="images/news/carousel/1.jpg" class="img-responsive" alt="" >
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
									<img src="images/news/carousel/1.jpg" class="img-responsive" alt="" >
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
		<script type="text/javascript" src="bodyfat/bfat.js"></script>
	</body>

<!-- Mirrored from webagate.com/demos/alia/laforza-sport-fitness-yoga-multipurpose-responsive-html-template/Fitness/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Apr 2016 15:33:05 GMT -->
</html>