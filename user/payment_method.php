<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='user') {
  header('location: ../login.php');
}
//require('stripe_config.php');
include('../database/connection.php');
$ide=$_SESSION['loginid'];
$orderid=$_SESSION['orderid'];
$email_query="select email from user_login where loginid='$ide'";
$sql2="select Count(*) from ordertbl where loginid='$ide' and status=1 and orderid= $orderid and save=0 and buy=0";
$sql5="select Count(*) from ordertbl where loginid='$ide' and status=1 and save=1 and buy=0";
$sql4="select sum(price) as total from ordertbl where loginid='$ide' and status=1 and orderid= $orderid and save=0 and buy=0";
// // echo $sql2;

$result1=mysqli_query($con,$sql2)or die("number query moonchi");
$mail=mysqli_query($con,$email_query)or die("email query moonchi");
$result3=mysqli_query($con,$sql4)or die("number query moonchi");
$result4=mysqli_query($con,$sql5)or die("number query moonchi");
$row=mysqli_fetch_array($result1);
$email=mysqli_fetch_array($mail);
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
$details="select * from ordertbl where orderid=$orderid";
$data=mysqli_query($con,$details)or die("number query moonchi");
$pays=mysqli_fetch_array($data);
$val=$pays['total']*100;
$name=$pays['name'];
$_SESSION['orderid']=$orderid;
$_SESSION['name']=$name;
$_SESSION['val']=$val;
$amt=$pays['total'];
$added_on=date('Y-m-d h:i:s');

?>
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

<center>
	<br>
	<br>
	<br>
	<br>
<h3>Step 2: Payment Methods</h3>
<hr style="Width:50%;">
<br>
<div class="col-sm-12 col-lg-12 col-md-12">
	<div style="border:1.5px solid #ccc; border-radius:5px; width: 500px; padding:16px; margin-bottom:16px; height:auto;">
<h4 style="float:left"> Cash on Delivery</h4>
<form action="stripe_payment.php" method="post">
  <input type="hidden" name="orderid" value="<?php echo $orderid; ?>" >
  <input type="button" name="cod_btn"  class="btn btn-primary" value="Pay by CoD" onclick="pay_later()"/>
	<!-- <script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="<?php echo $val; ?>"
		data-name="<?php echo $pays['name']; ?>"
		data-description="<?php echo $pays['category']; ?>"
    data-image="../images/logos/logo_computer.png "
		data-currency="inr"
		data-email="<?php echo $email; ?>"
	>
	</script> -->
  <input type="hidden" name="name1" id="orderid" value="<?php echo $orderid ?>"/>
</form>
</div>
</div>
<br>
<div class="col-sm-12 col-lg-12 col-md-12">
	<div style="border:1.5px solid #ccc; border-radius:5px; width: 500px; padding:16px; margin-bottom:16px; height:auto;">
<h4 style="float:left"> Online Payments</h4>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
	<form>
	    <input type="hidden" name="name" id="name" value="<?php echo $name ?>"/>
	    <input type="hidden" name="amt" id="amt" value="<?php echo $val ?>"/>
	    <input type="button" name="btn" id="btn" class="btn btn-primary"value="Pay by Online Methods" onclick="pay_now()"/>
	</form>
</div>
</div>
<br>
<!-- <div class="col-sm-12 col-lg-12 col-md-12">
	<div style="border:1.5px solid #ccc; border-radius:5px; width: 500px; padding:16px; margin-bottom:16px; height:auto;">
<h4 style="float:left"> Cash on Delivery(CoD)</h4>
	<form action="cod_complete.php" method="post">
	    <input type="hidden" name="orderid" value="<?php echo $orderid; ?>" >
	    <input type="button" name="cod_btn"  class="btn btn-primary" value="Pay by CoD" />
	</form>
</div>
</div> -->

</center>
	<script>
	    function pay_now(){
	        var name=jQuery('#name').val();
	        var amt=jQuery('#amt').val();

	         jQuery.ajax({
	               type:'post',
	               url:'payment_process.php',
	               data:"amt="+amt+"&name="+name,
	               success:function(result){
	                   var options = {
	                        "key": "rzp_test_gpOeSEIrbu39fa",
	                        "amount": amt,
	                        "currency": "INR",
	                        "name": "<?php echo $name ?>",
	                        "description": "<?php echo $pays['category']; ?>",
	                        "image": "../images/logos/logo_computer.png",
	                        "handler": function (response){
	                           jQuery.ajax({
	                               type:'post',
	                               url:'payment_process.php',
	                               data:"payment_id="+response.razorpay_payment_id,
	                               success:function(result){
	                                   window.location.href="thank_you.php";
	                               }
	                           });
	                        }
	                    };
	                    var rzp1 = new Razorpay(options);
	                    rzp1.open();
	               }
	           });


	    }
      function pay_later(){
         var name=jQuery('#name').val();
         var amt=jQuery('#amt').val();

          jQuery.ajax({
                type:'post',
                url:'cod_process.php',
                data:"amt="+amt+"&name="+name,
                success:function(result){

                                    window.location.href="thank_you.php";
                                }
                            });
                         }

	</script>
