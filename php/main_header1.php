<div class="navbare">
  <a href="logout.php">Logout</a>
  <a href="cart.php"><i class="fa fa-shopping-cart"></i> CART <span class="numbe"><?php echo($cart)?></span></a>
  <a href="saveforlate.php"><i class="fa fa-archive"></i> Saved <span class="numbe"><?php echo($save)?></span></a>
<div class="dropdowne">
  <button class="dropbtn">Buy a product
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdowne-content">
    <a href="onetime/motherboard_one.php">Motherboard</a>
    <a href="onetime/cpu_one.php">CPU</a>
    <a href="onetime/gpu_one.php">GPU</a>
    <a href="onetime/ram_one.php">RAM</a>
    <a href="onetime/mem_one.php">Memory</a>
    <a href="onetime/mem_m2_one.php">Memory M.2</a>
    <a href="onetime/smps_one.php">SMPS</a>
    <a href="onetime/cpu_fan_one.php">CPU Fan</a>
    <a href="onetime/cabinet_one.php">Cabinet</a>
  </div>
</div>
<div class="dropdowne">
    <button class="dropbtn">Welcome <?php echo($_SESSION['loginid'] )?>
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdowne-content">
    <a href="myorder.php"> My Orders </a>
    <a href="myprofile.php"> My Profile </a>
  </div>
</div>
    <a href="users.php">Home</a>
</div>
