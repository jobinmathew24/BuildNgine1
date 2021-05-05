<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='user') {
  header('location: ../login.php');
}
include('../database/database_connection.php');

$ide=$_SESSION['loginid'];
$sql2="select Count(*) from ordertbl where loginid='$ide' and status=1 and save=0 and buy=0 ";
$sql5="select Count(*) from ordertbl where loginid='$ide' and status=1 and save=1 and buy=0";
$sql4="select sum(price) as total from ordertbl where loginid='$ide' and status=1 and save=1";
// echo $sql2;
$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
$result1=mysqli_query($con,$sql2)or die("number query moonchi");
$result3=mysqli_query($con,$sql4)or die("number query moonchi");
$result4=mysqli_query($con,$sql5)or die("number query moonchi");
$row=mysqli_fetch_array($result1);
$rows=mysqli_fetch_array($result3);
$rowse=mysqli_fetch_array($result4);
$cart=$row['Count(*)'];
$save=$rowse['Count(*)'];
$total=$rows['total'];
$sql3="select * from ordertbl where loginid='$ide' and status=1 and save=1";
$result2=mysqli_query($con,$sql3)or die("number query moonchi");

if (isset($_POST['submite'])) {
$sql3="update ordertbl set save=0 where loginid='$ide' ";
$result2=mysqli_query($con,$sql3)or die("number query moonchi");
header('location:users.php');
}

if (isset($_POST['adde'])) {
$name=$_POST['result'];
$sql3="update ordertbl set save=0 where loginid='$ide'and name='$name' and orderid=(select orderid FROM ordertbl where loginid='$ide' and status=1 and save=1 and name='$name' LIMIT 1) ";
echo "$sql3";
$result2=mysqli_query($con,$sql3)or die("number query moonchi");
header('location:saveforlate.php');
}

if (isset($_POST['delete'])) {
$name=$_POST['result'];
$sql3="delete from ordertbl where loginid='$ide'and name='$name' and orderid=(select orderid FROM ordertbl where loginid='$ide' and status=1 and save=1 and name='$name' LIMIT 1) ";
$result2=mysqli_query($con,$sql3)or die("number query moonchi");
header('location:saveforlate.php');

}

else {


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Save for later</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/top.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "../css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->

</head>

<body>
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

  <script type="text/javascript">
  function one(a) {

  document.getElementById('resulte').value=a;
  // alert(a);
  // document.getElementById("forme").submit();
  }
  </script>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
        	<br />
        	<h2 align="center">Your Saved ones</h2>
        	<br />
          <form id="forme" action="" method="post">
              <input type="hidden" name="result" id="resulte">


            <div class="col-md-8">
            	<br />
                <div class="row filter_data">
                <?php

                if ($save>0) {
                 foreach($result2 as $row)
                		{?>
                    <div class="col-sm-12 col-lg-12 col-md-12">

                      <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:auto;">
                        <?php if ($row['category']=='professional'||$row['category']=='Business'||$row['category']=='gaming'){?>
                          <img  style="float:left; padding:5px;"src="../project/cabinet/<?php echo $row['pic']  ?>.jpg " width="100px" height="100px"  >

                      <?php  } elseif ($row['category']=='CPU') {?>
                        <img  style="float:left; padding:5px;"src="../project/cpu/<?php echo $row['name']  ?>.jpg " width="100px" height="100px"  >

                    <?php  }elseif ($row['category']=='GPU') {?>
                      <img  style="float:left; padding:5px;"src="../project/gpu/<?php echo $row['name']  ?>.jpg " width="100px" height="100px"  >

                  <?php  }elseif ($row['category']=='MEMORY') {?>
                    <img  style="float:left; padding:5px;"src="../project/mem/<?php echo $row['name']  ?>.jpg " width="100px" height="100px"  >

                <?php  }elseif ($row['category']=='RAM') {?>
                  <img  style="float:left; padding:5px;"src="../project/ram/<?php echo $row['name']  ?>.jpg " width="100px" height="100px"  >

              <?php  }elseif ($row['category']=='Motherboard') {?>
                <img  style="float:left; padding:5px;"src="../project/mother/<?php echo $row['name']  ?>.jpg " width="100px" height="100px"  >

            <?php  }elseif ($row['category']=='SMPS') {?>
              <img  style="float:left; padding:5px;"src="../project/smps/<?php echo $row['name']  ?>.jpg " width="100px" height="100px"  >

          <?php  }elseif ($row['category']=='CPU FAN') {?>
            <img  style="float:left; padding:5px;"src="../project/fan/<?php echo $row['name']  ?>.jpg " width="100px" height="100px"  >

        <?php  }elseif ($row['category']=='cabinet') {?>
          <img  style="float:left; padding:5px;"src="../project/cabinet/<?php echo $row['name']  ?>.jpg " width="100px" height="100px"  >

      <?php  }?>
                        <div style="float: left;">
                          <h4><strong><?php echo $row['name'] ?></strong></h4>

                          </div>
                      <table  >


                        <tr ><td ><strong> Category</strong></td><td > : <?php echo $row['category'] ?></td></tr>
                        <tr ><td ><strong> Price</strong></td><td > : ₹ <?php echo $row['price'] ?></td></tr>
                        <tr><td ><strong> Quantity</strong></td><td > : <?php echo $row['qty'] ?></td></tr>
                      <tr>
                        <h4  style="text-align:right;" class="text-danger" >₹ <?php echo $row['total'] ?></h4>

                      </tr>

                      </table>
                      <div style="float: right;">
                        <i class="fa fa-trash"></i>
                        <input type="submit" name="delete" class="btn btn-danger" value="Delete" onclick="one('<?php echo $row['name'] ?>')">
                        &nbsp;
                        <i class="fa fa-shopping-cart"></i>
                        <input type="submit" name="adde" class="btn btn-primary" value="Add to Cart" onclick="one('<?php echo $row['name'] ?>')">

                        </div>

                        <?php if ($row['category']=='professional'||$row['category']=='Business'||$row['category']=='gaming'){?>
                        <br><br><br><br><br><?php }else{ echo "<br><br>"; } ?>
              			</div>
                    </div>
                  <?php
                }
              }else {?>
              <center> <h3>Your Cart is empty</h3><br>
              <input type="submit" class="btn btn-primary"  name="sumbite" value="Add Products">  </center>
            <?php  }
                ?>

                </div>
            </div>
            <div class="col-md-4">

              <div class="col-sm-12 col-lg-12 col-md-12">
                <br>
                <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:170px;">
                  <table>
                    <tr>
                      <td> <h4> <strong> Total Summary</strong> </h4></td>
                    </tr>
                    <tr>
                      <td> <strong>Total items </strong></td>
                      <td> <?php echo $save ?></td>
                    </tr>
                    <tr>
                      <td> <strong>Total Price </strong></td>
                        <td> ₹ <?php echo $total ?></td>
                    </tr>
                  </table>
                  <br>
                  <div style="float: right;">
                    <i class="fa fa-shopping-cart"></i>
                    <input type="submit" name="submite" class="btn btn-primary" value="Purchase All" onclick="one(\''.$row['name'].'\')">

                    </div>
              </div>
              </div>

        </div>
      </form>

    </div>
    </div>
    <?php
    include('../php/footer.php');
     ?>
</body>

</html>
<?php } ?>
