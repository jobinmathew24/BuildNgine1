<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='retailer') {
  header('location: ../login.php');
}
include('../database/connection.php');

$ide=$_SESSION['loginid'];
$sql2="select Count(*) from ordertbl where  status=1 and save=0 and buy =1 and remark!='Order in Transit'";
// $sql5="select Count(*) from ordertbl where  status=1 and save=1";
$sql4="select sum(price) as total from ordertbl where  status=1 and save=0";
// echo $sql2;

$result1=mysqli_query($con,$sql2)or die("number query moonchi");
$result3=mysqli_query($con,$sql4)or die("number query moonchi");
// $result4=mysqli_query($con,$sql5)or die("number query moonchi");
$row=mysqli_fetch_array($result1);
$rows=mysqli_fetch_array($result3);
// $rowse=mysqli_fetch_array($result4);
$cart=$row['Count(*)'];
// $save=$rowse['Count(*)'];
$total=$rows['total'];
$sql3="select * from ordertbl where  status=1 and buy =1 and save=0";
$result2=mysqli_query($con,$sql3)or die("number query moonchi");

// if (isset($_POST['submite'])) {
// $sql3="update ordertbl set status=0 where loginid='$ide' ";
// $result2=mysqli_query($con,$sql3)or die("number query moonchi");
// header('location:users.php');
// }

if (isset($_POST['save'])) {
$name=$_POST['result'];
$sql3="update ordertbl set save=1 where orderid=(select orderid FROM ordertbl where status=1 and save=0 and name='$name' LIMIT 1) ";
// echo "$sql3";
$result2=mysqli_query($con,$sql3)or die("number query moonchi");
header('location:orders.php');
}

if (isset($_POST['invoice'])) {
$orderid=$_POST['result'];
$_SESSION['orderid']=$orderid;
header('location:generate.php');

}
if (isset($_POST['cod'])) {
$orderid=$_POST['result'];
// $_SESSION['orderid']=$orderid;
$sql="update payment set payment_status='complete' where orderid='$orderid'";
mysqli_query($con,$sql);
header('location:orders.php');

}
if (isset($_POST['conform'])) {

$name=$_POST['result'];
// echo "$name";
  $sql="update ordertbl set remark='Order in Transit' where orderid=(select orderid FROM ordertbl where status=1 and save=0 and buy=1 and name='$name' LIMIT 1)";
// echo "$sql";

// echo "$sql";
$result=mysqli_query($con,$sql)or die("query moonchi");

// while ($rows=mysqli_fetch_array($result)) {
//   $price=$rows['price'];
// }
// $sql="insert into ordertbl (loginid, name, category, price, qty, total) VALUES ('$ide','$name','CPU FAN', $price,1,$price*1)";
// // echo $sql;
// $result=mysqli_query($con,$sql)or die("query moonchi");
header('location:orders.php');
}
else {


?>

<html lang="en">

<head>

    <title>orders</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/top.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "../css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <!-- <link href="../css/style.css" rel="stylesheet"> -->
    <style media="screen">
      td{
        padding: 7px;
      }
    </style>
</head>

<body>
  <?php
  include('../php/retailer_header.php');
   ?>

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
        	<h2 align="center"> Orders</h2>
        	<br />
          <form id="forme" action="" method="post">
              <input type="hidden" name="result" id="resulte">


            <div class="col-md-10">
            	<br />
                <div class="row filter_data">
                <?php

                if ($cart>0) {
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

                        <?php if ($row['category']=='professional'||$row['category']=='Business'||$row['category']=='gaming'){ ?>
                        <tr ><td ><strong> Type</strong></td><td > : Pre Bulit System</td><tr>
                        <?php } ?>
                        <tr ><td ><strong> Category</strong></td><td > : <?php echo $row['category'] ?></td>
                        <td ><strong> Price</strong></td><td > : ₹ <?php echo $row['price'] ?></td></tr>
                        <tr><td ><strong> Quantity</strong></td><td > : <?php echo $row['qty'] ?></td>
                        <td ><strong> Sold To</strong></td><td > : <?php echo $row['loginid'] ?></td></tr>
                        <tr><td ><strong> Status</strong></td><td > : <?php echo $row['remark'] ?></td>
                        <td ><strong> Ordered date</strong></td><td > : <?php echo $row['date'] ?></td><tr>
                          <?php
                          $id=$row['loginid'] ;
                           $sql="select * from user_login where loginid='$id'";
                           $result=mysqli_query($con,$sql);
                           foreach($result as $row1){?>
                             <tr><td ><strong> Customer Name</strong></td><td > : <?php echo $row1['name'] ?></td>
                             <td ><strong> Address</strong></td><td > : <?php echo $row1['address'] ?></td><tr>
                               <tr><td ><strong> Email</strong></td><td > : <?php echo $row1['email'] ?></td>
                               <td ><strong> Phone</strong></td><td > : <?php echo $row1['phone'] ?></td><tr>
                               <!-- <td ><strong> Phone</strong></td><td > : <?php echo $row1['date'] ?></td><tr> -->
                                 <?php
                                 // $sql='select payment_status from payment where orderid=\''.$row["orderid"].'\'';
                                 // echo $sql;
                                 $result=mysqli_query($con,'select payment_status from payment where orderid=\''.$row["orderid"].'\'');
                                 // echo $sql;
                                 while($rowed=mysqli_fetch_array($result)){
                                   if ($rowed['payment_status']=="complete") {?>
                                     <td ><strong> Payment Method</strong></td><td > : Online Payment</td>
                                     <?php
                                   }
                                   if ($rowed['payment_status']!="complete") {?>
                                     <td ><strong> Payment Method</strong></td><td > : Cash on Delivery</td>
                                     <?php
                                   }

                                 }
                                  ?>
                          <?php }
                            ?>
                            <tr><h4  style="text-align:right;" class="text-danger" >₹ <?php echo $row['total'] ?></h4>

                      </tr>

                      </table>

                    <?php if($row['remark']=='Processing Order') {?>
                      <div style="float: right;">
                        <i class="fa fa-gift"></i>
                        <input type="submit" name="conform" class="btn btn-danger" value="Conform Order" onclick="one('<?php echo $row['name'] ?>')">
                        &nbsp;

                        </div>
<?php } $result=mysqli_query($con,'select payment_status from payment where orderid=\''.$row["orderid"].'\'');
// echo $sql;
while($rowed=mysqli_fetch_array($result)){
  if ($rowed['payment_status']!="complete") {?>
    <div style="float: right;">
      <i class="fa fa-money"></i>
      <input type="submit" name="cod" class="btn btn-primary" value="Cash received" onclick="one('<?php echo $row['orderid'] ?>')">
      &nbsp;

      </div>
    <?php }} ?>
                          <div style="float: right;">
                            <i class="fa fa-book"></i>
                            <input type="submit" name="invoice" class="btn btn-success" value="Generate Bill" onclick="one('<?php echo $row['orderid'] ?>')">
                            &nbsp;

                            </div>
                      <?php  if ($row['category']=='professional'||$row['category']=='Business'||$row['category']=='gaming'){?>
                        <br><br><br><?php }else{ echo "<br><br>"; } ?>


              				</div>

              			</div>
                  <?php
                }
              }else {?>
              <center> <h3>No new orders available</h3><br>
              <?php  }
                ?>

                </div>
            </div>

      </form>

    </div>

</body>
<?php include('../php/footer.php'); ?>
</html>
<?php } ?>
