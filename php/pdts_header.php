<style media="screen">
.navbare .icon {
display: none;
}

@media screen and (max-width: 900px) {
.navbare a:not(:first-child) {display: none;}
.navbare input:not(:first-child) {display: none;}
.navbare a.icon {
  float: right;
  display: block;
}
}

@media screen and (max-width: 900px) {
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
</style>
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

<br><br><br>
<center>
  <div class="col-md-12" id="search_result">

  </div>
</center>
