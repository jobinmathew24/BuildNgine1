<?php
session_start();
 if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='admin') {
  header('location: ../login.php');
  }
  include('../database/connection.php');


  $sql2="select Count(*) from ordertbl where status=1 and save=0 and buy =1 and remark!='Order in Transit'";
  // echo $sql2;

  $result1=mysqli_query($con,$sql2)or die("number query moonchi");
  $row=mysqli_fetch_array($result1);
  $cart=$row['Count(*)'];
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>buildNgine</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/11.css">
  <!-- <link rel="stylesheet" href="../css/1.css"> -->
  <link rel="stylesheet" href="../css/top.css">
  <script src="../js/jquery-1.10.2.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/bootstrap.min.js"></script>

<style>
.navbare .icon {
display: none;
}

@media screen and (max-width: 1230px) {
.navbare a:not(:first-child) {display: none;}
.navbare input:not(:first-child) {display: none;}
.navbare a.icon {
  float: right;
  display: block;
}
}

@media screen and (max-width: 1230px) {
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
  background-size: cover;
  color: white;

}
.p{
  width: 1368px;;
  background-color: rgba(0, 0, 0, 0.4);
  height:100%;
}
.i{ padding-top: 120px;
height: 350px;
width: 500px}

.j{ padding-top: 200px;}

</style>
</head>
<body >
  <main>
<center>

    <div class="navbare" id="myTopnav">
      <a href="retailer.php">
      <img src="../images/logos/logo_w.png" alt=""></a>
        <a href="../logout.php" class="loc">Logout</a>
        <a href="orders.php" class="loc"><i class="fa fa-shopping-cart"></i> orders <span class="numbe"><?php echo "$cart" ?></span></a>
        <a href="#" class="loc">welcome <?php echo($_SESSION['loginid'] )?></a>
    <div class="dropdowne">
        <button class="dropbtn">Add a product
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdowne-content">
        <a href="motherboard.php" class="loc">Motherboard</a>
        <a href="cpu.php" class="loc">CPU</a>
        <a href="gpu.php" class="loc">GPU</a>
        <a href="ram.php" class="loc">RAM</a>
        <a href="mem.php" class="loc">Memory</a>
        <a href="mem_m2.php" class="loc">Memory M.2</a>
        <a href="smps.php" class="loc">SMPS</a>
        <a href="cpu_fan.php" class="loc">CPU Fan</a>
        <a href="cabinet.php" class="loc">Cabinet</a>
      </div>

    </div>

    <div class="dropdowne">
        <button class="dropbtn">view a product
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
        <a href="onetime/smps_one.php" class="loc">SMPS</a>
        <a href="onetime/cpu_fan_one.php" class="loc">CPU Fan</a>
        <a href="onetime/smps_one.php" class="loc">SMPS</a>
      </div>
    </div>


        <!-- <a href="Motherboard.php">build a PC</a> -->
        <a href="prebulit.php" class="loc">Prebulit System</a>
        <a href="javascript:void(0);" class="icon" style="padding:15px; color:white;" onclick="myFunction()">
        <i class="fa fa-bars"></i>
        </a>
        <form class="" action="" method="post">
      <input type="hidden" name="" value="">
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
    <div class="p">
    <br><br>
    <center>
      <div class="col-md-12" id="search_result">

      </div>
    </center>


  <div class="i">
    A simple PC builder tool for the users. Select parts from the curated list of components,
    to build your desktop computer in a few minutes. Whether you're building a general purpose
     computer or a gaming rig or a PC for photo/video editing, this little tool is going to save
      you some time and effort  </div>

  <br>
  <div class="i">



</div>


    </center>
  </main>

</div>
</body>

<?php include('../php/footer.php');
 ?>
</html>
