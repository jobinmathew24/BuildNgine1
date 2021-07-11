<?php

include('../database/connection.php');


// session_unset($_SESSION['orderid']);
if(isset($_POST['matter'])){
  $matter=$_POST['matter'];
  $email=$_POST['email'];
  $sql="insert into complaints(loginid,matter,status)values('$email','$matter',1)";
  mysqli_query($con,$sql)or die($sql);
header('location:users.php');
}

?>
<html lang="en">

<head>

    <title>Thank you</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/11.css">


    <!-- Custom CSS -->

</head>

<body>

<center>
  <br>
  <br>
  <br>
  <br>
<h2>Complaint/Feedback</h2>
<br>
<a href="users.php">Go Home</a>
<br>
    <div class="p">
  <div class="container col-sm-3 col-md-3 col-lg-3">

<div class="row">

<form class="form-group-sm container" action="" method="post">
  <br>
  <input type="email" name="email" placeholder="Enter your Email" class="form-control" value=""><br> 
<textarea name="matter" required placeholder="Please type your Problem or complaints" class="form-control" rows="8" cols="50"></textarea><br><br>
<input type="submit" name="" class="btn btn-success" value="submit">
</form>
</div>
</div>
</div>
</center>
</body>
</html>
