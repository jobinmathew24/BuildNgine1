<?php
session_start();
/*

Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/
?>
<html>
<head>
<title>Reset Password - BuildNgine</title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' href='css/BOOT.css' type='text/css' media='all' />
</head>
<style media="screen">
body
{

  background-image: url('slide2.jpg');
color: white;
  background-repeat: no-repeat;
  background-size: 100%;

}
.p{
  background-color: rgba(0, 0, 0, 0.2);
  height:100%;
  width: 100 %;
	margin-top: 0;
}
</style>
<body>
	<div class="p">


<div style="width:700px; margin:50 auto;">

<h2> Reset Password</h2>

<?php
$con=mysqli_connect("localhost","root","","bulid");
$error="";
if (isset($_GET["key"]) && isset($_GET["email"])
&& !isset($_POST["action"])){
$key = $_GET["key"];
$email = $_GET["email"];
// echo $email;
$curDate = date("Y-m-d H:i:s");
$query = mysqli_query($con,"
SELECT * FROM `password_reset_temp` WHERE `key`='".$key."' and `email`='".$email."';");
$row = mysqli_num_rows($query);
if ($row==""){
	$_SESSION['msg']="Link Expired";
$error .= '<h2>Invalid Link</h2>

<p>The link is invalid/expired. Either you did not copy the correct link from the email,
or you have already used the key in which case it is deactivated.</p>
<p><a href="http://localhost/BulidNgine/forgot.php">Click here</a> to reset password.</p>';
	}else{
	$row = mysqli_fetch_assoc($query);
	$expDate = $row['expDate'];
	if ($expDate >= $curDate){
	?>
    <br />
	<form method="post" action="" class="form-group-sm container" name="update">
	<input type="hidden"   name="action" value="update" />
	<br /><br />
	<label><strong>Enter New Password:</strong></label><br />
	<input type="text" class="form-control"  name="pass1" id="pass1" maxlength="15" required />
    <br />
	<label><strong>Re-Enter New Password:</strong></label><br />
	<input type="password" name="pass2"class="form-control"  id="pass2" maxlength="15" required/>
    <br /><br />
	<input type="hidden" name="email" value="<?php echo $email;?>"/>
	<input type="submit" id="reset" class="btn btn-success" value="Reset Password" />
	</form>
<?php
}else{
	$_SESSION['msg']="Link Expired";
$error .= "<h2>Link Expired</h2>
<p>The link is expired. You are trying to use the expired link which as valid only 24 hours (1 days after request).<br /><br /></p>";
				}
		}
if($error!=""){
	echo "<div class='error'>".$error."</div><br />";
	}
} // isset email key validate end


if(isset($_POST["email"]) && isset($_POST["action"]) && ($_POST["action"]=="update")){
$error="";
$pass1 = mysqli_real_escape_string($con,$_POST["pass1"]);
$pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);
$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");
if ($pass1!=$pass2){
		$error .= "<p>Password do not match, both password should be same.<br /><br /></p>";
		}
	if($error!=""){
		echo "<div class='error'>".$error."</div><br />";
		}else{

$pass1 = md5($pass1);
$sql="select loginid from user_login where email='$email'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
$loginid=$row['loginid'];
mysqli_query($con,"UPDATE `logintable` SET `password`='".$pass1."' WHERE `loginid`='".$loginid."';");

mysqli_query($con,"DELETE FROM `password_reset_temp` WHERE `email`='".$email."';");

echo '<div class="error"><p>Congratulations! Your password has been updated successfully.</p>
<p><a href="http://localhost/BulidNgine/login.php">Click here</a> to Login.</p></div><br />';
		}
}
?>


<br /><br />
</div>
	</div>
</body>

</html>
