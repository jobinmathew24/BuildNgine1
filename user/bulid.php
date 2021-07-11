<?php
if (!isset($_GET['id'])) {
  header('location:cart.php');
  // code...
}
$prebuilt_id=$_GET['id'];
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='user') {
  header('location: ../login.php');
}
include('../database/connection.php');
$ec="";
$ide=$_SESSION['loginid'];
$sql2="select Count(*) from ordertbl where loginid='$ide' and status=1 and save=0 and buy=0";
$sql5="select Count(*) from ordertbl where loginid='$ide' and status=1 and save=1 and buy=0";
// echo $sql2;

$result1=mysqli_query($con,$sql2)or die("number query moonchi");

$result4=mysqli_query($con,$sql5)or die("number query moonchi");
$row=mysqli_fetch_array($result1);

$rowse=mysqli_fetch_array($result4);
$cart=$row['Count(*)'];
$save=$rowse['Count(*)'];

$sql3="select * from prebuilt_tbl where prebuilt_id=$prebuilt_id";
$result2=mysqli_query($con,$sql3)or die("number query moonchi");



if (isset($_POST['save'])) {
$name=$_POST['result'];
$sql="select * from prebuilt_tbl where name='$name'";
// echo "$sql";

$result=mysqli_query($con,$sql)or die("query moonchi");
while ($rows=mysqli_fetch_array($result)) {
  $price=$rows['price'];
  $category=$rows['category'];
  $cabinet=$rows['cabinet'];
}
$sql="insert into `ordertbl`(`loginid`, `name`, `category`, `price`, `qty`, `total`,date, `pic`,save)VALUES('$ide','$name','$category',$price,'1',$price*1,'$date','$cabinet',1)";
// echo $sql;
mysqli_query($con,$sql)or die("munji");
header('location:saveforlate.php');

}



if (isset($_POST['submit'])) {

$name=$_POST['result'];
$sql="select * from prebuilt_tbl where name='$name'";
// echo "$sql";

$result=mysqli_query($con,$sql)or die("query moonchi");
while ($rows=mysqli_fetch_array($result)) {
  $price=$rows['price'];
  $category=$rows['category'];
    $cabinet=$rows['cabinet'];
}


$sql="insert into `ordertbl`(`loginid`, `name`, `category`, `price`, `qty`, `total`,date, `pic`)VALUES('$ide','$name','$category',$price,'1',$price*1,'$date','$cabinet')";
// echo $sql;
$result=mysqli_query($con,$sql)or die("query moonchi");
header('location:cart.php');
}
else {


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>CART</title>
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
  <?php
  include('../php/main_header.php');
   ?>

  <script type="text/javascript">
  function one(a) {

  document.getElementById('resulte').value=a;
  // alert("Your order is placed, And you can complete the payment by Cash on Delivery");
  // document.getElementById("forme").submit();
  }
  function two(a) {

  document.getElementById('resulte').value=a;
  // alert("Your order is placed, And you can complete the payment by Cash on Delivery");
  // document.getElementById("forme").submit();
  }
  </script>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
        	<br />
        	<h2 align="center">Prebulit System</h2>
          <a href="prebulit.php">
          <button type="button" class="btn btn-primary" value="">Go Back</button>
          </a>
        	<br />
          <form id="forme" action="" method="post">
              <input type="hidden" name="result" id="resulte">


            <div class="col-md-11">
            	<br />
                <div class="row filter_data">
                <?php
                echo $ec;

                 foreach($result2 as $row)
                		{?>


              				<!-- <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:auto;"> -->
                        <nav>
                          <div class="col-sm-4">
                          <img  style=" padding:5px;"src="../project/cabinet/<?php echo $row['pic']  ?> " width="300px" height="300px"  >
                          <br><br>



                            <input type="submit" name="save" class="btn btn-warning" value="Save for later" onclick="two('<?php echo $row['name'] ?>')">
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            <input type="submit" name="submit" class="btn btn-primary" value="Purchase Now" onclick="one('<?php echo $row['name'] ?>')">

                          </div>
                        </nav>

                          <h4 ><strong><?php echo $row['name'] ?></strong></h4>
                          <br>
                          <div class="col-sm-4">
                      <table>

                        <tr><td><img  style="float:left; padding:5px;"src="../images/icons/motherboard.png " width="60px" height="60px"  ></td><td><strong>&nbsp;&nbsp;<?php echo $row['motherboard'] ?></strong></td> </tr>
                        <tr><td><img  style="float:left; padding:5px;"src="../images/icons/cpu.png " width="60px" height="60px"  ></td><td><strong>&nbsp;&nbsp;<?php echo $row['cpu'] ?></strong></td> </tr>
                        <tr><td><img  style="float:left; padding:5px;"src="../images/icons/ram.png " width="60px" height="60px"  ></td><td><strong>&nbsp;&nbsp;<?php echo $row['ram'] ?></strong></td> </tr>
                        <tr><td><img  style="float:left; padding:5px;"src="../images/icons/gpu.png " width="60px" height="60px"  ></td><td><strong>&nbsp;&nbsp;<?php echo $row['gpu'] ?></strong></td> </tr>
                        <tr><td><img  style="float:left; padding:5px;"src="../images/icons/hdd.png " width="60px" height="60px"  ></td><td><strong>&nbsp;&nbsp;<?php echo $row['mem'] ?></strong></td> </tr>
                        <tr><td><img  style="float:left; padding:5px;"src="../images/icons/ssd.png " width="60px" height="60px"  ></td><td><strong>&nbsp;&nbsp;<?php echo $row['mem_m2'] ?></strong></td> </tr>
                        <tr><td><img  style="float:left; padding:5px;"src="../images/icons/smps.png " width="60px" height="60px"  ></td><td><strong>&nbsp;&nbsp;<?php echo $row['smps'] ?></strong></td> </tr>
                        <tr><td><img  style="float:left; padding:5px;"src="../images/icons/cpu fan.png " width="60px" height="60px"  ></td><td><strong>&nbsp;&nbsp;<?php echo $row['cpu_fan'] ?></strong></td> </tr>
                        <tr><td><img  style="float:left; padding:5px;"src="../images/icons/cabinet.png " width="60px" height="60px"  ></td><td><strong>&nbsp;&nbsp;<?php echo $row['cabinet'] ?></strong></td> </tr>
                      </table>
                    </div>
                        <div class="col-sm-4">
                          <h4  style="text-align:right;" class="text-danger" >₹ <?php echo $row['price'] ?></h4>
                          <h5>CPU Frequency</h5>
                          <div class="progress">
                            <?php $val=($row['cpu_freq']/5000)*100;
                             ?>
                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="5000" style="width:<?php echo $val ?>%">
                            <?php echo $row['cpu_freq'] ?> Mhz
                          </div>
                        </div>
                        <h5>HDD Size</h5>
                        <div class="progress">
                          <?php $val=($row['hdd_size']/2000)*100;
                           ?>
                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                          aria-valuemin="0" aria-valuemax="2000" style="width:<?php echo $val ?>%">
                          <?php echo $row['hdd_size'] ?> Gb
                        </div>
                      </div>
                      <h5>GPU Size</h5>
                      <div class="progress">
                        <?php $val=($row['grap_size']/4)*100;
                         ?>
                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                        aria-valuemin="0" aria-valuemax="2000" style="width:<?php echo $val ?>%">
                        <?php echo $row['grap_size'] ?> Gb
                      </div>
                    </div>
                    <h5>RAM Size</h5>
                    <div class="progress">
                      <?php $val=($row['ram_size']/8)*100;
                       ?>
                      <div class="progress-bar" role="progressbar" aria-valuenow="70"
                      aria-valuemin="0" aria-valuemax="2000" style="width:<?php echo $val ?>%">
                      <?php echo $row['ram_size'] ?> Gb
                    </div>
                  </div>

                          <!-- <tr ><td><strong> Price</strong></td><td > : ₹ <?php echo $row['price'] ?></td></tr> -->
                        <tr><td ><strong> Category</strong></td><td > : <?php echo $row['category'] ?></td></tr>

                        <?php if ($row['category']=='professional'||$row['category']=='Business'||$row['category']=='gaming'){?>
                        <br><br><br><br><br><br><br><br><br><?php }else{ echo "<br><br>"; } ?>


              				</div>

              			</div>
                  </div>
                  <?php
                }
              ?>

                </div>
            </div>

      </form>

    </div>


<?php
include('../php/footer.php');
 ?>

</body>

</html>
<?php } ?>
