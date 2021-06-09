<?php
session_start();
include('../database/connection.php');
$name=$_SESSION['name'];
$val=$_SESSION['val'];
$orderid=$_SESSION['orderid'];
require('stripe_config.php');
$vals=$val/100;
$added_on=date('Y-m-d h:i:s');
$sql="insert into payment (orderid,name,amount,payment_status,payment_id,added_on)
values($orderid,'$name',$vals,'completed','stripe','$added_on')";
mysqli_query($con,$sql)or die($sql);
$sql="update ordertbl set buy=1 where orderid=$orderid";
mysqli_query($con,$sql)or die($sql);
$sql;
if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token=$_POST['stripeToken'];

	$data=\Stripe\Charge::create(array(
		"amount"=>$val,
		"currency"=>"inr",
		"description"=>"$name",
		"source"=>$token,
	));

header('location:thank_you.php');
}
?>
