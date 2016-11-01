<?php
session_start();
$dbh=mysql_connect('localhost','root') or die(mysql_error());
mysql_select_db('fit&fab') or die(mysql_error());
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$age=$_POST['age'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$email=mysql_real_escape_string($_POST['email']);
$password=$_POST['password'];
 $sql = "SELECT count(email) FROM info WHERE email='$email'" ;

   $result = mysql_result(mysql_query($sql),0) ;
   if( $result > 0 )
   {

	  
	   //$msg='There is already a user with that email!';
	   //echo "alert($msg)";
    //die( "There is already a user with that email!" ) ;
	echo "<script type='text/javascript'>alert('User already exists!!');window.location.href= 'sign-up.html';</script>";
   }
   
if($name != "" && $age != "" && $height != "" && $weight != "" && $email != "" && $password != "")
{
$result = mysql_query("insert into info values ('$name','$age','$height','$weight','$email','$password')") or die(mysql_error());
$result1 = mysql_query("insert into login values ('$email','$password')") or die(mysql_error());
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
echo 'Please fill in all the details.';
}
}
?>