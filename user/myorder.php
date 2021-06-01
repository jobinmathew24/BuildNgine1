<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='user') {
  header('location: ../login.php');
}
include('../database/database_connection.php');
$ec="";
$ide=$_SESSION['loginid'];
$sql2="select Count(*) from ordertbl where loginid='$ide' and status=1 and save=0 and buy=0";
$sql5="select Count(*) from ordertbl where loginid='$ide' and status=1 and save=1 and buy=0";
$sql6="select Count(*) from ordertbl where loginid='$ide'  and save=0 and buy=1";
$sql4="select sum(price) as total from ordertbl where loginid='$ide' and status=1 and save=0 and buy=0";
// echo $sql2;
$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
$result1=mysqli_query($con,$sql2)or die("number query moonchi");
$result3=mysqli_query($con,$sql4)or die("number query moonchi");
$result4=mysqli_query($con,$sql5)or die("number query moonchi");
$result5=mysqli_query($con,$sql6)or die($sql6);
$row=mysqli_fetch_array($result1);
$rows=mysqli_fetch_array($result3);
$rowse=mysqli_fetch_array($result4);
$rowses=mysqli_fetch_array($result5);
$cart=$row['Count(*)'];
$save=$rowse['Count(*)'];
$orders=$rowses['Count(*)'];
$total=$rows['total'];
$sql3="select * from ordertbl where loginid='$ide' and save=0 and buy=1";
$result2=mysqli_query($con,$sql3)or die("number query moonchi");



if (isset($_POST['delete'])) {
$name=$_POST['result'];
$sql3="update ordertbl set status =0 ,remark='Order cancelled by User' where loginid='$ide' and name='$name' and orderid=(select orderid FROM ordertbl where loginid='$ide' and status=1 and save=0 and name='$name' LIMIT 1)";
$result2=mysqli_query($con,$sql3)or die("number query moonchi");
header('location:myorder.php');

}
if (isset($_POST['invoice'])) {
$orderid=$_POST['result'];
$_SESSION['orderid']=$orderid;
header('location:generate.php');

}

if (isset($_POST['sumbite'])) {

header('location:cart.php');
}
else {


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>My Orders</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/top.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "../css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
<style media="screen">
  td{
    padding: 7px;
  }
</style>
</head>

<body>
  <?php
  include('../php/main_header.php');
   ?>

  <script type="text/javascript">
  function one(a) {

  document.getElementById('resulte').value=a;
  alert("Your order has been cancelled");
  // document.getElementById("forme").submit();
  }
  function one1(a) {

  document.getElementById('resulte').value=a;
  // alert("Your order has been cancelled");
  // document.getElementById("forme").submit();
  }
  </script>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
        	<br />
        	<h2 align="center">Your Orders</h2>
        	<br />
          <form id="forme" action="" method="post">
              <input type="hidden" name="result" id="resulte">


            <div class="col-md-10">
            	<br />
                <div class="row filter_data">
                <?php
                // echo $ec;
                if ($orders>0) {
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
          <img  style="float:left; padding:5px;" src="../project/cabinet/<?php echo $row['name']  ?>.jpg " width="100px" height="100px"  >

      <?php  }?>




                          <h4 style="float: left;"><strong><?php echo $row['name'] ?></strong></h4>


                      <table  >


                        <tr ><td ><strong> Category</strong></td><td > : <?php echo $row['category'] ?></td>
                        <td ><strong> Price</strong></td><td > : ₹ <?php echo $row['price'] ?></td></tr>
                        <tr><td ><strong> Quantity</strong></td><td > : <?php echo $row['qty'] ?></td>
                        <td ><strong> Sold By</strong></td><td > : <?php echo $row['sold_by'] ?></td></tr>
                        <tr><td ><strong> Status</strong></td><td > : <?php echo $row['remark'] ?></td>
                          <td ><strong> Ordered on</strong></td><td > : <?php echo $row['date'] ?></tr>
                            <tr>
                              <td ><strong> Payment Method</strong></td><td > : Cash on Delivery</td>
                            </tr>
                      <tr>
                        <h4  style="text-align:right;" class="text-danger" >₹ <?php echo $row['total'] ?></h4>

                      </tr>

                      </table>
                      <?php if($row['status']==1) {?>
                      <div style="float: right;">
                        <i class="fa fa-trash"></i>
                        <input type="submit" name="delete" class="btn btn-danger" value="Cancel Order" onclick="one('<?php echo $row['name'] ?>')">
                        <i class="fa fa-archive"></i>
                        <input type="submit" name="invoice" class="btn btn-success" value="Print Bill" onclick="one1('<?php echo $row['orderid'] ?>')">
                        &nbsp;

                        </div>
                        <?php} if ($row['category']=='professional'||$row['category']=='Business'||$row['category']=='gaming'){?>
                        <br><br><br><?php }else{ echo "<br><br>"; } ?>


              				</div>

              			</div>
                  <?php
                }
              }else {?>
              <center> <h3>Your Order List is empty</h3><br>
              <input type="submit" class="btn btn-primary"  name="sumbite" value="Add Products">  </center>
            <?php  }
                ?>

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
