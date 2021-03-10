<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='user') {
  header('location: ../login.php');
}
include('../database/database_connection.php');

$ide=$_SESSION['loginid'];
$mother=$_SESSION['mbname'];
$cpu=$_SESSION['cpuname'];
$ram=$_SESSION['ramname'];
$gpu=$_SESSION['gpuname'];
$hdd=$_SESSION['memname'];

$sql2="select Count(*) from ordertbl where loginid='$ide' and status=1 and save=0 and buy=0";
// echo $sql2;
$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
$result1=mysqli_query($con,$sql2)or die("number query moonchi");
$row=mysqli_fetch_array($result1);
$cart=$row['Count(*)'];

$sql3="select MIN(price) as min, MAX(price) as max from memory_tbl where verified=1 and status=1 and form_factor='M.2'";
$result2=mysqli_query($con,$sql3)or die("price query moonchi");
$row=mysqli_fetch_array($result2);
$min=$row['min'];
$max=$row['max'];

$sql2="select sum(price) as total from ordertbl where loginid='$ide' and status=1 and save=0 and bulid=1";
$result2=mysqli_query($con,$sql2)or die("price query moonchi");
$row=mysqli_fetch_array($result2);
$summary=$row['total'];

if (isset($_POST['change'])) {
  $sql3="delete from ordertbl where loginid='$ide'and name='$hdd' and bulid = 1 and status=1 and save=0 ";
  $result2=mysqli_query($con,$sql3)or die("number query moonchi");
  unset($_SESSION['memname']);
  header('location:buliding.php');
}

if (isset($_POST['submit'])) {

$name=$_POST['result'];
$qty=$_POST['points'];
// echo "$name";
$sql="select price from memory_tbl where name='$name'";
// echo "$sql";


$result=mysqli_query($con,$sql)or die("query moonchi");
while ($rows=mysqli_fetch_array($result)) {
  $price=$rows['price'];
}
$sql="insert into ordertbl (loginid, name, category, price, qty, total,bulid,date,pic) VALUES ('$ide','$name','MEMORY', $price,$qty,$price*$qty,1,'$date','$name')";
// echo $sql;
$_SESSION['m2_mem']=$name;
$result=mysqli_query($con,$sql)or die("query moonchi");
header('location:buliding.php');
}
else {


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>M.2 Memory</title>

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
        	<h2 align="center">Select the M.2 Memory</h2>
        	<h4 align="center">M.2 is a form factor for SSDs (solid-state drives) that's shaped like a stick of gum.
            These SSDs are generally faster but more expensive than traditional, 2.5-inch SSDs.
            Thin laptops are increasingly using <strong>M. 2 SSDs</strong> because they take up less room than 2.5-inch SSDs or
            hard drives.</h4>
        	<br />
          <form id="forme" action="" method="post">
              <input type="hidden" name="result" id="resulte">

            <div class="col-md-2">
              <div class="list-group">
      					<h3>Price</h3>
      					<input type="hidden" id="hidden_minimum_price" value="<?php echo( $min) ?>" />
                          <input type="hidden" id="hidden_maximum_price" value="<?php echo( $max) ?>" />


                          <p id="price_show"><?php echo( $min) ?> - <?php echo( $max) ?></p>
                          <div id="price_range"></div>
                      </div>
                <div class="list-group">
					<h3>Brand</h3>
					<?php

                    $query = "select distinct(`company`) from `memory_tbl` where verified=1 and form_factor='M.2' order by `company` desc";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector company" value="<?php echo $row['company']; ?>"  > <?php echo $row['company']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                </div>
                <div class="list-group">
          <h3>Memory Size</h3>
          <?php

                    $query = "select distinct(`size`) from `memory_tbl`  where verified=1 and form_factor='M.2' order by `size` desc";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector size" value="<?php echo $row['size']; ?>"  > <?php echo $row['size']; ?> GB</label>
                    </div>
                    <?php
                    }

                    ?>
                </div>





            </div>

            <div class="col-md-6">
            	<br />
                <div class="row filter_data">

                </div>
            </div>

            <div class="col-md-3">

              <div class="col-sm-12 col-lg-12 col-md-12">
                <br>
                <div style="border:1px solid #ccc; border-radius:5px; padding:16px; width:350px; margin-bottom:16px; height:auto;">
                  <table>
                    <tr>
                      <th style="text-align:center;" colspan="3" > <h4> <strong>Configuration Summary</strong> </h4></th>
                    </tr>
                    <tr>
                      <td> <h5> <strong>Motherboard</strong> </h5></td>

                      <td > <h5> <strong><?php echo $mother; ?></strong> </h5></td>


                    </tr>
                    <tr>
                      <td> <h5> <strong>CPU</strong> </h5></td>

                      <td > <h5> <strong><?php echo $cpu; ?></strong> </h5></td>

                  </tr>
                  <tr>
                    <td> <h5> <strong>RAM</strong> </h5></td>

                    <td > <h5> <strong><?php echo $ram; ?></strong> </h5></td>

                </tr>
                <tr>
                  <td> <h5> <strong>GPU</strong> </h5></td>

                  <td > <h5> <strong><?php echo $gpu; ?></strong> </h5></td>

              </tr>
              <tr>
                <td> <h5> <strong>HDD</strong> </h5></td>

                <td > <h5> <strong><?php echo $hdd; ?></strong> </h5></td>
              <td>&nbsp; <input type="submit" class="btn btn-danger" name="change" value="Change"> </td>

            </tr>
                <tr>
                <td> &nbsp;</td>
                </tr>
                    <tr>
                    <td > <h5> <strong>Total : ₹ <?php echo $summary; ?></strong> </h5></td>
                    </tr>
                  </table>
                  <br>

                    </div>
              </div>
              </div>

        </div>

    </div>
<style>
#loading
{
	text-align:center;
	background: url('loader1.gif') no-repeat center;
	height: 150px;
}
</style>

<script type="text/javascript">



$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var company = get_filter('company');
        var size = get_filter('size');
        var type = get_filter('type');

        $.ajax({
            url:"fetch_data_mem_m2.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, company:company, size:size },
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:<?php echo( $min) ?>,
        max:<?php echo( $max) ?>,
        values:[<?php echo( $min) ?>, <?php echo( $max) ?>],
        step:50,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>
<?php
include('../php/footer.php');
 ?>
</body>

</html>
<?php } ?>
