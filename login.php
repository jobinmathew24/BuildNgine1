<?php
session_start();
$_SESSION['msg']=""; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <script type="text/javascript">
  function name1() {


  var namee=document.forms["regform"]["user"];
  var paswd=document.forms["regform"]["pass"];

    if(namee.value == "")
    {
      namee.value = "";
      namee.focus();
      document.getElementById('u').innerHTML="<span class='error'>Please enter a valid username</span>"
      return false;
    }


    else
    {
      document.getElementById('u').innerHTML="<span class='error'></span>"

    paswd.focus();
      return true;
    }
  }
  function check()
  {


    if(paswd.value == "")
    {

paswd.focus();
document.getElementById('u1').innerHTML="<span class='error'>Please enter a valid password</span>"
      return false;

    }


  }

  </script>
<style media="screen">
body
{

  background-image: url('slide2.jpg');

  background-repeat: no-repeat;
  background-size: 100%;

}
.p{
  background-color: rgba(0, 0, 0, 0.4);
  height:auto;
  width: auto;
}
a{
  text-decoration: none;
  color: white;
}
</style>
  <link rel="stylesheet" href="css/BOOT.css">

</head>
<body>

    <div class="p">
    <div class="container col-sm-12 col-md-6">

    <center>

  <form method="post"  action="" style="padding:150px;" name="regform"class="form-group-sm container ">
  <h3 style="color: white;">Login</h3>

    <br>
  <input type="text"class="form-control" name="user" required onblur="name1()"placeholder="User Name"><br>
  <span id="u"style="color:red; font-size:20px;"></span><br>
  <input type="password"class="form-control  form-group" required onblur="check()" name="pass" placeholder="Password"><br>
  <span id="u1" style="color:red; font-size:20px;"></span><br>
  <!-- <div id="forgote"></div><br> -->



<br>
  <input type="submit" class="btn btn-success" name="submit" value="Submit" >
  <br>
  <br>
  <h5><a style="color:white;" href="register.php">New User</a><br>
  &nbsp;<a style="color:white;" href="forgot.php">Forgot Password ? No Problem. </a></h5>
  </form>
  </center>
  </div>
  </div>
<?php

if(isset($_POST['submit'])) {




  $username=$_POST['user'];
  $password=$_POST['pass'];
  $password=md5($password);
  $sql="select * from logintable where loginid='$username' and password='$password'";
echo($sql);

  $con=mysqli_connect("localhost","root","","bulid");
   $result=mysqli_query($con,$sql);
   $n=mysqli_num_rows($result);
   $try=1;
     // echo $n;
   if($n>0){
     $rows=mysqli_fetch_array($result);
     $_SESSION['loginid']=$username;
     $user=$rows['usertype'];
     $_SESSION['user']=$user;
  echo($user);

     if($user=='admin'){

       header('location:admin/admin.php');
     }
    elseif($user=='retailer')
     {
        header('location:retailer/retailer.php');
     }

     else{
       header('location:user/check/checking_login.php');
     }
   }
   else{
     ?>
<script type="text/javascript">
document.getElementById('u1').innerHTML="Please enter a valid user credentials";
// document.getElementById("forgote").innerHTML = "<a href="asd.php">asd</a>";

</script>
<?php

   }

}


?>

</body>
</html>
