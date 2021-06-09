
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BulidNgine</title>
  <link rel="stylesheet" href="css/BOOT.css">
  <link rel="stylesheet" href="css/1.css">

<style>
body
{

  background-image: url('slide2.jpg');
  position: absolute;
  background-repeat: no-repeat;
  background-size: 100%;
  color: white;

}
.p{
  width: auto%;;
  background-color: rgba(0, 0, 0, 0.4);
  height:auto%;
}
.i{ padding-top: 200px;
  padding-left: 50px;
  padding-right: 50px;
height: auto;
width: auto; }

.j{ padding-top: 200px;}

</style>
</head>
<body >
  <main>
<center>
  <div class="p">



  <div class="topnav">

    <a href="login.php">login</a>
  <!--  <a href="3.html">Register</a>-->

        <a href="index.php">Home</a>

  </div>
  <div class="i">
A simple PC builder tool for the users. Select parts from the curated list of components,
to build your desktop computer in a few minutes. Whether you're building a general purpose
 computer or a gaming rig or a PC for photo/video editing, this little tool is going to save
  you some time and effort
<form class="" action="login.php" method="post">
  <br>
  <input type="submit" class="btn btn-primary"value="Bulid your PC now">
</form>
  </div>

  <br>
  <div class="i">

  </div>
    <br>

    </center>
  </main>

</body>
<?php
  include('php/footer.php');
 ?>
</html>
