<?php
	session_start();
if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
$error="";
 $con=mysqli_connect("localhost","root","","bulid");
	$sel_query = "SELECT * FROM `user_login` WHERE email='".$email."'";
	$results = mysqli_query($con,$sel_query);
	$rows=mysqli_fetch_array($results);
	$loginid=$rows['loginid'];
	$row = mysqli_num_rows($results);
	if ($row==""){
		$error .= "<p>No user is registered with this email address!</p>";
		$_SESSION['msg']=" No user is registered with this email address! , try again. ";

		header('location:forgot.php');
		}

	if($error!=""){
$_SESSION['msg']=" No user is registered with this email address! , try again. ";
		}else{
	$expFormat = mktime(date("H"), date("i"), date("s"), date("m")  , date("d")+1, date("Y"));
	$expDate = date("Y-m-d H:i:s",$expFormat);
	$key = md5($email);
	$addKey = substr(md5(uniqid(rand(),1)),3,10);
	$key = $key . $addKey;
// Insert Temp Table
mysqli_query($con,
"INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`)
VALUES ('".$email."', '".$key."', '".$expDate."');");

$output='Dear user,';
$output.='Please click on the following link to reset your password.';
$output.="http://localhost/bulidNgine/reset-password.php?email=$email&key=$key ";
$output.='Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.If you did not request this forgotten password email, no action
is needed, your password will not be reset. However, you may want to log into
your account and change your security password as someone may have guessed it.';
$output.='Thanks,';
$output.='BuildNgine Team';
$body = $output;
$subject = "Password Recovery - BuildNgine";
$to_email = $email;
$headers = "From: jobinrj31255@gmail.com";

if(!mail($to_email, $subject, $body, $headers)){
echo "Mailr Error";
}else{

	$_SESSION['msg']="An email has been sent to you with instructions on how to reset your password.";
header('location:forgot.php');
	}

		}

}
?>
