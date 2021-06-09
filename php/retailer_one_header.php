<div class="navbare">
    <a href="../../logout.php"  class="loc">Logout</a>
    <a href="../orders.php" class="loc"><i class="fa fa-shopping-cart"></i> orders <span class="numbe"><?php echo "$cart" ?></span></a>
    <a href="#" class="loc">welcome <?php echo($_SESSION['loginid'] )?></a>
    <div class="dropdowne">
        <button class="dropbtn">Add a product
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdowne-content">
        <a href="../motherboard.php" class="loc">Motherboard</a>
        <a href="../cpu.php" class="loc">CPU</a>
        <a href="../gpu.php" class="loc">GPU</a>
        <a href="../ram.php" class="loc">RAM</a>
        <a href="../mem.php" class="loc">Memory</a>
        <a href="../mem_m2.php" class="loc">Memory M.2</a>
        <a href="../smps.php" class="loc">SMPS</a>
        <a href="../cpu_fan.php" class="loc">CPU Fan</a>
        <a href="../cabinet.php" class="loc">Cabinet</a>
      </div>

    </div>
    <div class="dropdowne">
        <button class="dropbtn">view a product
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdowne-content">
        <a href="motherboard_one.php"  class="loc">Motherboard</a>
        <a href="cpu_one.php"  class="loc">CPU</a>
        <a href="gpu_one.php"  class="loc">GPU</a>
        <a href="ram_one.php"  class="loc">RAM</a>
        <a href="mem_one.php"  class="loc">Memory</a>
        <a href="mem_m2_one.php"  class="loc">Memory M.2</a>
        <a href="smps_one.php"  class="loc">SMPS</a>
        <a href="cpu_fan_one.php"  class="loc">CPU Fan</a>
        <a href="cabinet_one.php"  class="loc">Cabinet</a>
      </div>
    </div>
        <a href="../../prebulit.php" class="loc">Prebulit System</a>
    <a href="../../retailer.php"  class="loc">Home</a>
    <form class="" action="" method="post">

      <button type="submit" class="search"><i class="fa fa-search"></i></button>
      <input type="text" name="search_text" placeholder="Search.." value="">
    </form>
    <a href="retailer.php">
    <img src="../../images/logos/logo_w.png" alt=""></a>
    </div>
