<?php
session_start();
$dbh=mysql_connect('localhost','root') or die(mysql_error());
mysql_select_db('fit&fab') or die(mysql_error());
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$gender=$_POST['gender'];
$dob=$_POST['age'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$neck=$_POST['neck'];
$waist=$_POST['waist'];
$hip=$_POST['hip'];
$email=mysql_real_escape_string($_POST['email']);
$password=$_POST['password'];
		
 $sql = "SELECT count(email) FROM info WHERE email='$email'" ;

   $result = mysql_result(mysql_query($sql),0) ;
   if( $result > 0 )
   {
	?>
	
	<script type='text/javascript'>
	alert('User already exists!!Please change your mail id..');
	</script>
	<?php
   }
   else
   {
	   
	   function GetAge($dob) 
{ 
        $dob=explode("-",$dob); 
        $curMonth = date("m");
        $curDay = date("j");
        $curYear = date("Y");
        $age = $curYear - $dob[0]; 
        if($curMonth<$dob[1] || ($curMonth==$dob[1] && $curDay<$dob[2])) 
                $age--; 
        return $age; 
}
		$age = GetAge($dob);
	   
	   //BMI
		//$lb = $weight*2.2046; //kg to pounds
	   //$w=$lb*0.45;
	   //$h1=$height*2.54; //cm to inches
	   //$h=$h1*0.025;
	   //$s=$h*$h;
	   //$bmi=$w/$s; 
	   //BMI
	   //$lb = $weight*2.2046;
	   //$w=$lb*0.45;
	   //bmi
	   $h1=$height/100;
	  
	   $bmi=$weight/($h1*$h1); 
	   
	   
	   /*Body fat
	   $lb = $weight*2.2046;
	   $wa=$waist*2.54;
	   $f1 = $lb*1.082+94.42;
	   $f2 = $wa*4.15;
	   $lbmass = $f1 - $f2;
	   $bfweight = $lb - $lbmass;
	   $bfper = ($bfweight*100/$lb);
	   $bf = round($bfper,2);*/
	   if($gender == 'female')
	   {
		   //$bf = (1.20 * $bmi) + (0.23 * $age) – (10.8 * 0) – 5.4;
		   $bf = ( 1.20 * $bmi ) + ( 0.23 * $age ) - 5.4;
	   }
	   else
	   {
		   //$bf = ( 1.20 * $bmi ) + ( 0.23 * $age ) – ( 10.8 * 1 ) – 5.4;
		   $bf = ( 1.20 * $bmi ) + ( 0.23 * $age ) - ( 10.8 * 1 ) - 5.4;
	   }
	   
	   //fat weight
	   $lb = $weight*2.2046;
	   $fw = $weight*$bf/100;
	   $lw = $weight-$fw;
	   
	   
	   //bmr
	   $hin=$height * 0.39370;
	   
	   if($gender == 'female')
	   {
		   $bmr = 655 + ( 4.35 * $lb ) + ( 4.7 * $hin ) - ( 4.7 * $age );
	   }
	   else
	   {
		   $bmr = 66 + ( 6.23 * $lb ) + ( 12.7 * $hin ) - ( 6.8 * $age );
	   }
	  
	   
	   if($name != "" && $gender != "" && $dob != "" && $age != "" && $height != "" && $weight != "" && $neck != "" && $waist != "" && $hip != "" && $email != "" && $password != "")
		{
		$result = mysql_query("insert into info values ('$name','$gender','$dob','$age','$height','$weight','$neck','$waist','$hip','$email','$password')");
		$result1 = mysql_query("insert into login values ('$email','$password')");
		$result2 = mysql_query("insert into details values ('$name','$email','$bmi','$bf','$fw','$lw','$bmr')");
		//$r = mysql_fetch_array($result);
		//$r1 = mysql_fetch_array($result1);
		if($result != "" && $result1 != "")
		{
		$_SESSION['login_user'] = $name;
		header("location: signin.php");
		}
		}
		else
		{
			?>
			<script>
		alert("Please fill in all the details.");
		</script>
		<?php
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
        <title>Fit$Fab</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong><a href="../index.html"/>Fit$Fab</a></strong> Sign up Form</h1>
                            <div class="description">
							<p>Enter your details to Sign up:</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Sign up to Fit$Fab</h3>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Name</label>
			                        	<input type="text" name="name" placeholder="Name..." maxlength="20" class="form-username form-control" id="form-username" value="" required>
			                        </div>
									<div class="form-group">
										Gender : 
			                    		<label class="sr-only" for="form-gender">Gender</label>
			                        	<input type="radio" name="gender" value="male"/>Male
										<input type="radio" name="gender" value="female"/>Female
			                        </div>
									<div class="form-group">
			                    		<label class="sr-only" for="form-age">DOB</label>
			                        	<input type="date" name="age" placeholder="DOB..." maxlength="20" class="form-username form-control" id="form-username" value="" required>
			                        </div>
									<div class="form-group">
			                    		<label class="sr-only" for="form-height">Height</label>
			                        	<input type="number" name="height" placeholder="Height...(in cm)" maxlength="3" class="form-username form-control" id="form-username" value="" required>
			                        </div>
									<div class="form-group">
			                    		<label class="sr-only" for="form-weight">Weight</label>
			                        	<input type="number" name="weight" placeholder="Weight...(in Kg)" maxlength="3" class="form-username form-control" id="form-username" value="" required>
			                        </div>
									<div class="form-group">
			                    		<label class="sr-only" for="form-neck">Neck measurement</label>
			                        	<input type="number" name="neck" placeholder="Neck...(in cm)" maxlength="3" class="form-username form-control" id="form-username" value="" required>
			                        </div>
									<div class="form-group">
			                    		<label class="sr-only" for="form-waist">Waist measurement</label>
			                        	<input type="number" name="waist" placeholder="Waist...(in cm)" maxlength="3" class="form-username form-control" id="form-username" value="" required>
			                        </div>
									<div class="form-group">
			                    		<label class="sr-only" for="form-hips">Hip measurement</label>
			                        	<input type="number" name="hip" placeholder="Hip...(in cm)" maxlength="3" class="form-username form-control" id="form-username" value="" required>
			                        </div>
									<div class="form-group">
			                    		<label class="sr-only" for="form-username">Email ID</label>
			                        	<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" maxlength="30" name="email" placeholder="Email ID..." class="form-username form-control" id="form-username" value="" required>
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" maxlength="12" id="form-password" value="" required>
			                        </div>
			                        <button type="submit" name="submit" class="btn">Sign up!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>