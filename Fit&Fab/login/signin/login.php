	<?php  //Start the Session
session_start();
 //require('config.php');
$db=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('fit&fab') or die(mysql_error());

if (isset($_POST['email']) and isset($_POST['password'])){
$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT * FROM `login` WHERE email='$email' and pass='$password'";
$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 1){
$_SESSION['login_user'] = $email;
header("location: http://127.0.0.1/Fitness/indexloggedin.html");
}else{
echo "Invalid Login Credentials.";
header("location: http://127.0.0.1/Fitness/signin/sign-in.html");
}
}
?>