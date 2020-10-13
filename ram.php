<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='user') {
  header('location: login.php');
}
include('database_connection.php');

$ide=$_SESSION['loginid'];
$sql2="select Count(*) from ordertbl where loginid='$ide'";
// echo $sql2;
$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
$result1=mysqli_query($con,$sql2)or die("number query moonchi");
$row=mysqli_fetch_array($result1);
$cart=$row['Count(*)'];
if (isset($_POST['submit'])) {

$name=$_POST['result'];
// echo "$name";
$sql="select price from ram_tbl where name='$name'";
// echo "$sql";


$result=mysqli_query($con,$sql)or die("query moonchi");
while ($rows=mysqli_fetch_array($result)) {
  $price=$rows['price'];
}
$sql="insert into ordertbl (loginid, name, category, price, qty, total) VALUES ('$ide','$name','RAM', $price,1,$price*1)";
// echo $sql;
$result=mysqli_query($con,$sql)or die("query moonchi");

}
else {


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>RAM</title>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="hover.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <div class="topnav">

    <a href="logout.php">Logout</a>

  <a><i class="fa fa-shopping-cart"></i> CART <span class="numbe"><?php echo($cart)?></span></a>
  <a>welcome <?php echo($_SESSION['loginid'] )?></a>

        <a href="users.php">Home</a>

  </div>
  <script type="text/javascript">
  function one(a) {

  document.getElementById('resulte').value=a;
  alert(a);
  // document.getElementById("forme").submit();
  }
  </script>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
        	<br />
        	<h2 align="center">Select the RAM</h2>
        	<br />
          <form id="forme" action="" method="post">
              <input type="hidden" name="result" id="resulte">

            <div class="col-md-3">
				<div class="list-group">
					<h3>Price</h3>
					<input type="hidden" id="hidden_minimum_price" value="1100" />
                    <input type="hidden" id="hidden_maximum_price" value="7000" />


                    <p id="price_show">1100 - 7000</p>
                    <div id="price_range"></div>
                </div>
                <div class="list-group">
					<h3>Brand</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "select distinct(`company`) from `ram_tbl` order by `company` desc";
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
                </div>
                <div class="list-group">
          <h3>RAM Type</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
          <?php

                    $query = "select distinct(`ram_type`) from `ram_tbl` order by `ram_type` desc";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector ram_type" value="<?php echo $row['ram_type']; ?>"  > <?php echo $row['ram_type']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>

				<div class="list-group">
					<h3>RAM Size</h3>
                    <?php

                    $query = "select distinct(`ram_size`) from `ram_tbl` order by `ram_size` desc";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector ram_size" value="<?php echo $row['ram_size']; ?>" > <?php echo $row['ram_size']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                </div>

                        <div class="list-group">
                          <h3>Memory Frequency</h3>
                                    <?php

                                    $query = "select distinct(`mem_freq`) from `ram_tbl` order by `mem_freq` desc";
                                    $statement = $connect->prepare($query);
                                    $statement->execute();
                                    $result = $statement->fetchAll();
                                    foreach($result as $row)
                                    {
                                    ?>
                                    <div class="list-group-item checkbox">
                                        <label><input type="checkbox" class="common_selector mem_freq" value="<?php echo $row['mem_freq']; ?>" > <?php echo $row['mem_freq']; ?> GB</label>
                                    </div>
                                    <?php
                                    }

                                    ?>
                                </div>

            </div>

            <div class="col-md-9">
            	<br />
                <div class="row filter_data">

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
        var ram_type = get_filter('ram_type');
        var ram_size = get_filter('ram_size');
        var mem_freq = get_filter('mem_freq');

        $.ajax({
            url:"fetch_data_ram.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, company:company, ram_type:ram_type, ram_size:ram_size, mem_freq:mem_freq},
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
        min:1100,
        max:7000,
        values:[1100, 7000],
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

</body>

</html>
<?php } ?>
