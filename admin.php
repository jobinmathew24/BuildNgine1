<!DOCTYPE html>
<?php
session_start(); ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TIME TABLE</title>
  <link rel="stylesheet" href="BOOT.css">
  <link rel="stylesheet" href="1.css">

<style>
body
{

  background-image: url('slide2.jpg');
  position: absolute;
  background-repeat: no-repeat;
  background-size: cover;
  color: white;

}
.p{
  background-color: rgba(0, 0, 0, 0.4);
  height:100%;
}
.i{ padding-top: 200px;
height: 350px;
width: 500px}
.j{  }

</style>
</head>
<?php if(isset($_SESSION['loginid'])) {
  if($_SESSION['user']=='admin'){?>
<body >
  <main>
<center>
  <div class="p">



  <div class="topnav">

    <a href="logout.php">Logout</a>
  <!--  <a href="3.html">Register</a>-->
  <a>welcome <?php echo($_SESSION['loginid'] )?></a>
      <a href="addcomp.php">Add a New compontent</a>
      <a href="order.php">Orders</a>
        <a href="admin.php">Home</a>

  </div>
  <div class="i">
    A timetable is a plan of the times when particular events are to take place. ... In a school or college, a timetable is a list that shows the times in the week at which particular subjects are taught. You can also refer to the range of subjects that a student learns or the classes that a teacher teaches as their timetable.
  </div>
  <form class="" action="tablea.php" method="post">
    <input type="submit" class="btn btn-primary"value="View time table">
  </form>
  <br>
  <div class="j">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

  </div><div class="j">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

  </div><div class="j">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

  </div>
  </div>

    </center>
  </main>


</body>
<?php }else {
header('location:login.php');
}
}else {
  header('location:login.php');
} ?>
</html>
