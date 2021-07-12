<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='user') {
  header('location: ../login.php');
}
if (isset($_SESSION['orderid'])) {
unset($_SESSION['orderid']);
unset($_SESSION['name']);
}
$ide=$_SESSION['loginid'];
$sql2="select Count(*) from ordertbl where loginid='$ide' and status=1 and save=0 and buy=0";
// echo $sql2;
include('../database/connection.php');
$result1=mysqli_query($con,$sql2)or die("number query moonchi");
$row=mysqli_fetch_array($result1);
$cart=$row['Count(*)'];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>buildNgine</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="../css/BOOT.css"> -->
  <!-- <link rel="stylesheet" href="../css/1.css"> -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <link rel="stylesheet" href="../css/top.css">
  <script src="../js/jquery-1.10.2.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/bootstrap.min.js"></script>


  <style media="screen">
  .navbare .icon {
  display: none;
  }

  @media screen and (max-width: 1150px) {
  .navbare a:not(:first-child) {display: none;}
  .navbare input:not(:first-child) {display: none;}
  .navbare a.icon {
    float: right;
    display: block;
  }
  }

  @media screen and (max-width: 1150px) {
  .navbare.responsive {position: relative;}
  .navbare.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .navbare.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  }

body
{

  background-image: url('../slide4.jpg');
  position: absolute;
  background-repeat: no-repeat;
  background-size: 100%;
  color: white;

}
.p{

  background-color: rgba(0, 0, 0, 0.4);

}
.i{ padding-top: 220px;
  padding-right: 100px;
  padding-left: 100px;
}


</style>


</head>
<body >
  <main>
<center>
  <div class="p">
    <div class="navbare" id="myTopnav">
      <a href="users.php">
      <img src="../images/logos/logo_w.png" alt=""></a>
      <a href="logout.php" class="loc">Logout</a>
      <a href="cart.php" class="loc"><i class="fa fa-shopping-cart"></i> CART <span class="numbe"><?php echo($cart)?></span></a>
      <!-- <a href="saveforlate.php" class="loc"><i class="fa fa-archive"></i> Saved <span class="numbe"><?php echo($save)?></span></a> -->
    <div class="dropdowne">
      <button class="dropbtn">Buy a product
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdowne-content">
        <a href="onetime/motherboard_one.php" class="loc">Motherboard</a>
        <a href="onetime/cpu_one.php" class="loc">CPU</a>
        <a href="onetime/gpu_one.php" class="loc">GPU</a>
        <a href="onetime/ram_one.php" class="loc">RAM</a>
        <a href="onetime/mem_one.php" class="loc">Memory</a>
        <a href="onetime/mem_m2_one.php" class="loc">Memory M.2</a>
        <a href="onetime/smps_one.php" class="loc">SMPS</a>
        <a href="onetime/cpu_fan_one.php" class="loc">CPU Fan</a>
        <a href="onetime/cabinet_one.php" class="loc">Cabinet</a>
      </div>
    </div>
    <div class="dropdowne">
        <button class="dropbtn" >Welcome <?php echo($_SESSION['loginid'] )?>
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdowne-content">
        <a href="myorder.php" class="loc"> My Orders </a>
        <a href="myprofile.php" class="loc"> My Profile </a>
      </div>
    </div>
    <a href="check/checking_bulid.php" class="loc">build a PC</a>
    <a href="prebulit.php" class="loc">Prebulit System</a>
    <a href="javascript:void(0);" class="icon" style="padding:15px; color:white;" onclick="myFunction()">
    <i class="fa fa-bars"></i>
    </a>
        <!-- <a href="users.php" class="loc">Home</a> -->
        <form class="" action="" method="post">
      <input type="hidden" name="" value="">
          <!-- <button type="submit" class="search"><i class="fa fa-search"></i></button> -->
          <input type="text" name="search_text" id="search" placeholder="Search.." value="">
        </form>

    </div>
    <script type="text/javascript">
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "navbare") {
        x.className += " responsive";
      } else {
        x.className = "navbare";
      }
    }
    $("#search").on("keyup",function(){
        // console.log("asda");
        var search=$(this).val();

        $.ajax({
          url:"live_search.php",
          type:"POST",
          data:{search:search},
          success: function(data){
            $("#search_result").html(data);
          }
        })
      });
    </script>

    <center>
      <br>
      <br>

      <div style="font-size:10px;"class="col-md-12" id="search_result">

      </div>
    </center>
  <div class="i">
A simple PC builder tool for the users. Select parts from the curated list of components,
to build your desktop computer in a few minutes. Whether you're building a general purpose
 computer or a gaming rig or a PC for photo/video editing, this little tool is going to save
  you some time and effort
<form class="" action="check/checking_config.php" method="post">
  <br>
  <input type="submit" class="btn btn-primary"value="build your PC now">
</form>
  </div>
<div class="i">

</div>
  <br>

</div>
    </center>
  </main>
  <?php
  include('../php/footer.php');
   ?>
</body>
</html>
