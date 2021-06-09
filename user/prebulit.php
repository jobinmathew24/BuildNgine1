<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='user') {
  header('location: ../login.php');
}
include('../database/connection.php');

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
$sql3="select MIN(price) as min, MAX(price) as max from prebuilt_tbl where  status=1 ";
// echo $sql3;
$result2=mysqli_query($con,$sql3)or die("price query moonchi");
$row=mysqli_fetch_array($result2);
$min=$row['min'];
$max=$row['max']+50;

$sql3="select * FROM `prebuilt_tbl` WHERE status=1 order by price asc";
$result2=mysqli_query($con,$sql3)or die("number query moonchi");

if (isset($_POST['submite'])) {
$sql3="update ordertbl set status=0 where loginid='$ide' ";
$result2=mysqli_query($con,$sql3)or die("number query moonchi");
header('location:users.php');
}

if (isset($_POST['save'])) {
$name=$_POST['result'];
$sql3="update ordertbl set save=1 where loginid='$ide'and name='$name' and orderid=(select orderid FROM ordertbl where loginid='$ide' and status=1 and save=0 and name='$name' LIMIT 1) ";
echo "$sql3";
$result2=mysqli_query($con,$sql3)or die("number query moonchi");
header('location:cart.php');
}

if (isset($_POST['delete'])) {
$name=$_POST['result'];
$sql3="delete from ordertbl where loginid='$ide'and name='$name' and orderid=(select orderid FROM ordertbl where loginid='$ide' and status=1 and save=0 and name='$name' LIMIT 1) ";
$result2=mysqli_query($con,$sql3)or die("number query moonchi");
header('location:cart.php');

}

if (isset($_POST['submit'])) {

$name=$_POST['result'];
// echo "$name";
  $sql="update ordertbl set status=0 where loginid='$ide' and name='$name' and orderid=(select orderid FROM ordertbl where loginid='$ide' and status=1 and save=0 and name='$name' LIMIT 1)";
// echo "$sql";

echo "$sql";
$result=mysqli_query($con,$sql)or die("query moonchi");

// while ($rows=mysqli_fetch_array($result)) {
//   $price=$rows['price'];
// }
// $sql="insert into ordertbl (loginid, name, category, price, qty, total) VALUES ('$ide','$name','CPU FAN', $price,1,$price*1)";
// // echo $sql;
// $result=mysqli_query($con,$sql)or die("query moonchi");
header('location:cart.php');
}
else {


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Prebulit</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="../css/navbar.css"> -->
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
  // alert(a);
  // document.getElementById("forme").submit();
  }
  </script>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
        	<br />
        	<h2 align="center">Prebulid System</h2>
        	<br />
          <form id="forme" action="" method="post">
              <input type="hidden" name="result" id="resulte">

              <div class="col-md-3">
                <div class="list-group">
                  <h3>Price</h3>
                  <input type="hidden" id="hidden_minimum_price" value="<?php echo( $min) ?>" />
                            <input type="hidden" id="hidden_maximum_price" value="<?php echo( $max) ?>" />


                            <p id="price_show"><?php echo( $min) ?> - <?php echo( $max) ?></p>
                            <div id="price_range"></div>
                        </div>
                  <div class="list-group">
            <h3>Ram Size</h3>
            <?php

                      $query = "select distinct(`ram_size`) from `prebuilt_tbl` where status =1  order by `ram_size` desc";
                      $statement = $connect->prepare($query);
                      $statement->execute();
                      $result = $statement->fetchAll();
                      foreach($result as $row)
                      {
                      ?>
                      <div class="list-group-item checkbox">
                          <label><input type="checkbox" class="common_selector ram_size" value="<?php echo $row['ram_size']; ?>"  > <?php echo $row['ram_size']; ?> Gb</label>
                      </div>
                      <?php
                      }

                      ?>
                  </div>
                  <div class="list-group">
            <h3>Purpose</h3>
            <?php

                      $query = "select distinct(`category`) from `prebuilt_tbl` where status =1  order by `category` desc";
                      $statement = $connect->prepare($query);
                      $statement->execute();
                      $result = $statement->fetchAll();
                      foreach($result as $row)
                      {
                      ?>
                      <div class="list-group-item checkbox">
                          <label><input type="checkbox" class="common_selector category" value="<?php echo $row['category']; ?>"  > <?php echo $row['category']; ?> </label>
                      </div>
                      <?php
                      }

                      ?>
                  </div>
                  <div class="list-group">
            <h3>Ram Type</h3>
            <?php

                      $query = "select distinct(`ram_type`) from `prebuilt_tbl` where status =1  order by `ram_type` desc";
                      $statement = $connect->prepare($query);
                      $statement->execute();
                      $result = $statement->fetchAll();
                      foreach($result as $row)
                      {
                      ?>
                      <div class="list-group-item checkbox">
                          <label><input type="checkbox" class="common_selector ram_type" value="<?php echo $row['ram_type']; ?>"  > <?php echo $row['ram_type']; ?> </label>
                      </div>
                      <?php
                      }

                      ?>
                  </div>




              </div>
            <div class="col-md-8">
            	<br />
                <div class="row filter_data">



              <center> <h3>Your Cart is empty</h3><br>
              <input type="submit" class="btn btn-primary"  name="sumbite" value="Add Products">  </center>


                </div>
            </div>

      </form>

    </div>
    </div>
    <style>
    /* #loading
    {
    	text-align:center;
    	background: url('loader1.gif') no-repeat center;
    	height: 150px;
    } */
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
            var ram_size = get_filter('ram_size');
            var ram_type = get_filter('ram_type');
            var category = get_filter('category');

            $.ajax({
                url:"fetch_data_prebulit.php",
                method:"POST",
                data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, ram_size:ram_size,ram_type:ram_type, category:category},
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
