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
$sql6="select * from user_login where loginid='$ide'  ";
// echo $sql2;
$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
$result1=mysqli_query($con,$sql2)or die("number query moonchi");
$result4=mysqli_query($con,$sql5)or die("number query moonchi");
$result5=mysqli_query($con,$sql6)or die($sql6);
$row=mysqli_fetch_array($result1);
$rowse=mysqli_fetch_array($result4);
$user=mysqli_fetch_array($result5);
$cart=$row['Count(*)'];
$save=$rowse['Count(*)'];

$state=$user['state'];
$statesql="select StateName from state where StCode=$state";
$result7=mysqli_query($con,$statesql)or die($statesql);
$state=mysqli_fetch_array($result7);
$state=$state['StateName'];




if (isset($_POST['edit'])) {
$loginid=$_POST['result'];
$_SESSION['loginid']=$loginid;
header('location:editprofile.php');
}
if (isset($_POST['change'])) {
$loginid=$_POST['result'];
$_SESSION['loginid']=$loginid;
header('location:changepass.php');
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
  // document.getElementById("forme").submit();
  }
  </script>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
        	<br />
        	<u><h2 align="center">Profile</h2></u>
        	<br />
          <form id="forme" action="" method="post">
              <input type="hidden" name="result" id="resulte">


            <div class="col-md-10">
            	<br />
                <div class="row filter_data">
                <?php
                // echo $ec;
                 ?>
                    <div class="col-sm-12 col-lg-12 col-md-12">



<br>
                      <table  >
                        <tr>
                          <td>

                          <h4 style="float: left;"><strong>Name </strong></h4>
                        </td>
                        <td>

                        <h4 style="float: left;"><strong><?php echo $user['name'] ?></strong></h4>
                      </td>
                                        </tr>

                        <tr ><td ><strong> Address</strong></td><td > : <?php echo $user['address'] ?></td>
                        <td ><strong> Gender</strong></td><td > : <?php if($user['gender']=='M'){echo "Male";}else{echo "Female";} ?></td></tr>
                        <tr><td ><strong> State</strong></td><td > : <?php echo $state; ?></td>
                        <td ><strong> District</strong></td><td > : <?php echo $user['district'] ?></td></tr>
                        <tr><td ><strong> Email</strong></td><td > : <?php echo $user['email'] ?></td>
                          <td ><strong> Phone</strong></td><td > : <?php echo $user['phone'] ?></tr>
                          <td ><strong> UserName</strong></td><td > : <?php echo $user['loginid'] ?></tr>



                      </table>
                      <br>
                      <br>
                      <input type="submit" name="edit" class="btn btn-primary" onclick="one('<?php echo $user['loginid'] ?>')" value="Edit Profile">
                      <input type="submit" name="change" class="btn btn-warning" onclick="one('<?php echo $user['loginid'] ?>')" value="Change Password">
<br>
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
