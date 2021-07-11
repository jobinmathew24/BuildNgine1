<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='user') {
  header('location: ../login.php');
}
include('../database/connection.php');
$ec="";
$ide=$_SESSION['loginid'];
$orderid=$_SESSION['orderid'];

$sql2="select Count(*) from ordertbl where loginid='$ide' and status=1 and orderid= $orderid and save=0 and buy=0";
$sql5="select Count(*) from ordertbl where loginid='$ide' and status=1 and save=1 and buy=0";
$sql4="select sum(price) as total from ordertbl where loginid='$ide' and status=1 and orderid= $orderid and save=0 and buy=0";
// // echo $sql2;

$result1=mysqli_query($con,$sql2)or die("number query moonchi");
$result3=mysqli_query($con,$sql4)or die("number query moonchi");
$result4=mysqli_query($con,$sql5)or die("number query moonchi");
$row=mysqli_fetch_array($result1);
$rows=mysqli_fetch_array($result3);
$rowse=mysqli_fetch_array($result4);
$cart=$row['Count(*)'];
$save=$rowse['Count(*)'];
$total=$rows['total'];
$sql3="select * from ordertbl where loginid='$ide' and status=1 and save=0 and buy=0 and orderid=$orderid";
$result2=mysqli_query($con,$sql3)or die("number query moonchi");

$sql4="select count(*) from shipping_add where loginid='$ide'";
$result3=mysqli_query($con,$sql4)or die("number query moonchi");
$row=mysqli_fetch_array($result3);

$add_count=$row['count(*)'];

// if($add_count>0){
//   $sql4="select count(*) from shipping_add where loginid='$ide'";
//   $result3=mysqli_query($con,$sql4)or die("number query moonchi");
//   $row=mysqli_fetch_array($result3);
// }

// if (isset($_POST['submite'])) {
// $date=date("j / m / Y");
// // $name=$_POST['resulte'];
//
// $sql3="update ordertbl set buy=1,date='$date' where loginid='$ide' ";
// $result2=mysqli_query($con,$sql3)or die("number query moonchi");
// header('location:cart.php');
// }

// if (isset($_POST['save'])) {
// $name=$_POST['result'];
// $sql3="update ordertbl set save=1 where loginid='$ide'and name='$name' and orderid=(select orderid FROM ordertbl where loginid='$ide' and status=1 and save=0 and name='$name' LIMIT 1) ";
// echo "$sql3";
// $result2=mysqli_query($con,$sql3)or die("number query moonchi");
// header('location:cart.php');
// }

if (isset($_POST['deloddadds'])) {
$ship_id=$_POST['result'];
$sql="update ordertbl set ship_id =$ship_id where orderid=$orderid";
mysqli_query($con,$sql)or die($sql);
header('location:payment_method.php');

}

// if (isset($_POST['submit'])) {
//
// // $name=$_POST['result'];
// // echo "$name";
//
// // $date=date("j / m / Y");
//   // $sql="update ordertbl set buy =1,remark ='Processing Order',date='$date'  where loginid='$ide' and name='$name' and orderid=(select orderid FROM ordertbl where loginid='$ide' and status=1 and save=0 and name='$name' LIMIT 1)";
// // echo "$sql";
// $sql="select orderid FROM ordertbl where loginid='$ide' and status=1 and buy=0 and save=0 and name='$name' LIMIT 1";
// // echo "$sql";
// $result=mysqli_query($con,$sql)or die("query moonchi");
//
// // while ($rows=mysqli_fetch_array($result)) {
// //   $orderid=$rows['orderid'];
// //   $_SESSION['orderid']=$orderid;
// // }
// // $sql="insert into ordertbl (loginid, name, category, price, qty, total) VALUES ('$ide','$name','CPU FAN', $price,1,$price*1)";
// // // echo $sql;
// // $result=mysqli_query($con,$sql)or die("query moonchi");
// header('location:shippingadd.php');
// }
// else {

 if (isset($_POST['addnewadds'])) {

   $name=$_POST['name'];
   $address=$_POST['address'];
   $address1=$_POST['address2'];
   $city=$_POST['city'];
   $state=$_POST['state'];
   $district=$_POST['district'];
   $pin=$_POST['pincode'];
   $phone=$_POST['phone'];

     $sql="insert into shipping_add(`loginid`,`name`,`address_line1`,`address_line2`,`city`,`state`,`district`,`pincode`,`phone`)VALUES
     ('$ide','$name','$address','$address1','$city',$state,'$district',$pin,$phone)";
     $result=mysqli_query($con,$sql)or die($sql);
     $ship_id =  mysqli_insert_id($con);
     $sql="update ordertbl set ship_id =$ship_id where orderid=$orderid";
     mysqli_query($con,$sql)or die($sql);
header('location:payment_method.php');
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Shipping address</title>
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

  function getdistrict(val) {
    $.ajax({
    method: "POST",
    url: "get_district.php",
    data:'state_id='+val,
    success: function(data){
      $("#district-list").html(data);
    }
    });
  }
  function phones()
  {
    var phone = document.forms["regform"]["phone"];
    var phn = /^\(?([6-9]{1})\)?([0-9]{9})$/;

    if(phone.value == "")
    {
      document.getElementById('phn').innerHTML="<span class='error'>Please enter a valid phone</span>";
      phone.focus();
      return false;
    }

    if(phone.value.match(phn))
    {
        document.getElementById('phn').innerHTML="<span></span>";
      document.regform.user1.focus();
      return true;
    }

    else
    {
        document.getElementById('phn').innerHTML="<span class='error'>Please enter a valid phone number</span>";
      phone.focus();
      return false;

    }
  }

  function pins()
  {
    var PinCode = document.forms["regform"]["pincode"];
    var pin = /^[1-9]{1}[0-9]{5}?$/;

    if(PinCode.value == "")
    {
      document.getElementById('pine').innerHTML="<span class='error'>Please enter a valid PinCode</span>";
      PinCode.focus();
      return false;
    }

    if(PinCode.value.match(pin))
    {
        document.getElementById('pine').innerHTML="<span></span>";
      return true;
    }

    else
    {
        document.getElementById('pine').innerHTML="<span class='error'>Please enter a valid PinCode</span>";
      PinCode.focus();
      return false;

    }
  }

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
        	<h2 align="center">Step 1 : Shipping address</h2>
        	<br />
          <form id="form" name="regfor" action="" method="post">
              <input type="hidden" name="result" id="resulte">


            <div class="col-md-8">
            	<br />
                <div class="row filter_data">
                  <?php if ($cart>0) {
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

                          <tr ><td ><strong>&nbsp;&nbsp; Category</strong></td><td > : <?php echo $row['category'] ?></td></tr>
                          <tr ><td ><strong>&nbsp;&nbsp; Price</strong></td><td > : ₹ <?php echo $row['price'] ?></td></tr>
                          <tr><td ><strong>&nbsp;&nbsp; Quantity</strong></td><td > : <?php echo $row['qty'] ?></td></tr>
                        <tr>
                          <h4  style="text-align:right;" class="text-danger" >₹ <?php echo $row['total'] ?></h4>

                        </tr>
<br>
                        </table>

                				</div>

                			</div>
                    <?php
                  }
                }?>

                <?php
                if($add_count>0){
                  $sql4="select * from shipping_add where loginid='$ide'";
                  $result3=mysqli_query($con,$sql4)or die("number query moonchi");
                  // $row=mysqli_fetch_array($result3);
                  foreach($result3 as $row)
                 		{?>
                     <div class="col-sm-12 col-lg-12 col-md-12">
               				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:auto;">

                        <!-- <input type="radio" name="<?php $row['ship_id']?>" value=""> -->

                        <table  >
                          <tr ><td ><strong> Name</strong></td><td > : <?php echo $row['name'] ?></td></tr>
                          <tr ><td ><strong> Address</strong></td><td > :  <?php echo $row['address_line1'] ?> &nbsp;&nbsp;</td>&nbsp;&nbsp;<td ><strong> Landmark</strong></td><td > : <?php echo $row['address_line2'] ?></td></tr>
                          <tr><td ><strong> City</strong></td><td > : <?php echo $row['city'] ?>&nbsp;&nbsp;</td><td ><strong> District</strong></td><td > : <?php echo $row['district'] ?></td></tr>
                          <tr><td ><strong> State</strong></td><td > : <?php echo $row['state'] ?>&nbsp;&nbsp;</td><td ><strong> Pincode</strong></td><td > : <?php echo $row['pincode'] ?></td></tr>
                          <tr ><td ><strong> Phone</strong></td><td > : <?php echo $row['phone'] ?></td></tr>
                          <input type="submit" style="float:right;" name="deloddadds" class="btn btn-primary" value="Deliver to this Address" onclick="one('<?php echo $row['ship_id'] ?>')">
                        </form>
                        </table>
                      </div>
                      </div>
                      <?php
                    }
                }
                else {?>
                  <div class="col-sm-12 col-lg-12 col-md-12">
                   <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:auto;">
                     No pervious data found.
                   </div>
                   </div>
                   <?php
                }
                // echo $ec;
?>

                </div>
                <h4>OR</h4>
                <div class="col-sm-12 col-lg-12 col-md-12">
                 <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:auto;">
                  <h4> New Address</h4>
                  <form id="forme" name="regform" action="" method="post">
                   <input type="text" name="name" class="form-control" required placeholder="Enter name" value=""><br>
                   <input type="text" name="address" class="form-control" required placeholder="Enter Address" value=""><br>
                   <input type="text" name="address2" class="form-control" required placeholder="Enter Landmark" value=""><br>
                   <input type="text" name="city" class="form-control" required placeholder="Enter City" value=""><br>
                   <select onChange="getdistrict(this.value);"  name="state" id="state" class="form-control" >
                   <option value="">Select State Name</option>
                   <?php $query =mysqli_query($con,"SELECT * FROM state");
                   while($row=mysqli_fetch_array($query))
                   { ?>
                   <option value="<?php echo $row['StCode'];?>"><?php echo $row['StateName'];?></option>
                   <?php
                   }
                   ?>
                   </select>
                   <br>
                   <select name="district" id="district-list" class="form-control">
                   <option value="">Select</option>
                 </select><br>
                   <input type="text" name="pincode" class="form-control" onblur="pins()"  required placeholder="Enter Pincode" value=""><br>
                   <span id="pine"></span>
                   <input type="text" name="phone" class="form-control" onblur="phones()" required placeholder="Enter Phone" value=""><br>
                   <span id="phn"></span>

                   <input type="submit" style="float:right;" name="addnewadds" class="btn btn-primary" value="Use this Address" >
                   <br>
                   <br>
                 </div>
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
                      <td> <?php echo $cart ?></td>
                    </tr>
                    <tr>
                      <td> <strong>Total Price </strong></td>
                        <td> ₹ <?php echo $total ?></td>
                    </tr>
                  </table>
                  <br>
                  <!-- <div style="float: right;">
                    <i class="fa fa-shopping-cart"></i>
                    <input type="submit" name="submite" class="btn btn-primary" value="Purchase All" onclick="one(\''.$row['name'].'\')">

                    </div> -->
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
<?php
 // }
?>
