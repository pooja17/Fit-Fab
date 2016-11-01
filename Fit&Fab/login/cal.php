<?

 session_start(); 
$db=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('fit&fab') or die(mysql_error());

$name=$_SESSION['login_user']; 
						$query = "SELECT * FROM `info` WHERE email='$name'";
						$result = mysql_query($query) or die(mysql_error());
						
			
						
						
						while ($row = mysql_fetch_assoc($result)) {
    $gender = $row['gender'];
    $age = $row['age'];
	$height = $row['height'];
	$weight = $row['weight'];
	$neck = $row['neck'];
	$waist = $row['waist'];
	$hip = $row['hip'];
}

echo "height :" . $row['height'];



//BMI
	   $lb = $weight*2.2046;
	   $w=$lb*0.45;
	   $h=$height*0.025;
	   $s=$h*$h;
	   $bmi=$w/$s; 
		$f=7;
 //Body fat
	   
	  
		
		$query = "insert into details values ('$name','$bmi','$f')";
						$result = mysql_query($query) or die(mysql_error());
		
?>