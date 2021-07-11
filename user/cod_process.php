<?php
session_start();
include('../database/connection.php');
$orderid=$_SESSION['orderid'];
if(isset($_POST['amt']) && isset($_POST['name'])){
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $payment_status="CoD";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($con,"insert into payment(orderid,name,amount,payment_status,added_on) values($orderid,'$name','$amt','$payment_status','$added_on')");
    mysqli_query($con,"update ordertbl set buy=1,remark='Processing Order',date='$date' where orderid=$orderid");

}



?>
