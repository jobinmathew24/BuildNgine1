<?php
session_start();?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>forgot</title>
  <script type="text/javascript">
  function name1() {


  var namee=document.forms["regform"]["user"];
  var paswd=document.forms["regform"]["pass"];

  function EMail()
  {
      var emai=document.forms["regform"]["email"];
    var mail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z]+(?:\.[a-zA-Z]{2,})*$/;
    if(emai.value == "")
    {
      document.getElementById('maile').innerHTML="<span class='error'>Please enter a email</span>"
      emai.focus();
    }

    if(emai.value.match(mail))
    {
      document.getElementById('u').innerHTML="<span ></span>";
      // document.regform.ph.focus();
      return true;
    }

    else
    {
      document.getElementById('u').innerHTML="<span class='error'>Please enter a valid email</span>";
      emai.focus();
      return false;
    }
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
  background-color: rgba(0, 0, 0, 0.3);
  height:auto;
  width: auto;
}
a{
  text-decoration: none;
  color: white;
}
</style>
  <link rel="stylesheet" href="css/11.css">

</head>
<body>

    <div class="p">
    <div class="container col-sm-12 col-md-6">

    <center>

  <form method="post"  action="send-recovery-mail.php" style="padding:150px;" name="regform"class="form-group-sm container ">
  <h3 style="color: white;">Recover Password</h3>

    <br>
  <input type="text" id ="emaile" class="form-control" name="email" required onblur="name1()"placeholder="Enter E-mail"><br>
  <span id="u"style="color:red;background-color:black; font-size:20px;">
<?php
$msg=$_SESSION['msg'];
echo $msg;
 ?>
</span><br>
<br>
  <input type="submit" class="btn btn-success" name="submit" value="Recover Password" >
  <br>
  <br>
  <h5><a style="color:white;" href="register.php">New User</a>
  <h5><a style="color:white;" href="login.php">Got your Password?!</a>

  </form>
  </center>
  </div>
  </div>
</body>
</html>
