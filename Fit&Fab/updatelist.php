<?php
 session_start(); 
$db=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('fit&fab') or die(mysql_error());
$uname=$_POST['email']; 					
					
						$name= $_POST['name1'];
						$age= $_POST['age1'];
						$gender= $_POST['gender1'];
						$neck= $_POST['neck1'];
						$weight= $_POST['weight1'];
						$height= $_POST['height1'];
						$waist= $_POST['waist1'];
						$hip= $_POST['hip1'];
						
						//bmi
	   $h1=$height/100;
	  
	   $bmi=$weight/($h1*$h1); 
	   
	   
	   //Body fat
	   $lb = $weight*2.2046;
	   $wa=$waist*2.54;
	   $f1 = $lb*1.082+94.42;
	   $f2 = $wa*4.15;
	   $lbmass = $f1 - $f2;
	   $bfweight = $lb - $lbmass;
	   $bfper = ($bfweight*100/$lb);
	   $bf = round($bfper,2);
	   
	   //fat weight
	   $fw = $lb*$bfper/100;
	   $lw = $lb-fw;
	   
	   
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
						
						$query1 = "update details set bmi = '$bmi', bf='$bf',fatw='$fw',leanw='$lw',bmr='$bmr' WHERE email='$uname'";
						$result1 = mysql_query($query1) or die(mysql_error());
						
						
						
						
						
						$query = "update info set name = '$name', gender='$gender',age='$age',height='$height',weight='$weight',neck='$neck',waist='$waist',hip='$hip' WHERE email='$uname'";
						$result = mysql_query($query) or die(mysql_error());
						if($result!="")
						{
							?>
							<script>
							alert("Updated!!");
							</script>
							<?php
							header("location: http://127.0.0.1/Fit&Fab/viewall.php");
						}
						
?>