<!DOCTYPE html>
<?php
session_start();
 if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='retailer') {
  header('location: ../../login.php');
  }
  include('../../database/database_connection.php');


  $sql2="select Count(*) from ordertbl where status=1 and save=0";
  // echo $sql2;
  $con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
  $result1=mysqli_query($con,$sql2)or die("number query moonchi");
  $row=mysqli_fetch_array($result1);

  $cart=$row['Count(*)'];

  $sql3="select MIN(price) as min, MAX(price) as max from gpu_tbl where status=1 and verified=1";
  $result2=mysqli_query($con,$sql3)or die("price query moonchi");
  $row=mysqli_fetch_array($result2);
  $min=$row['min'];
  $max=$row['max'];

  $sql3="select * from gpu_tbl where status=1 and verified=0";
  $result2=mysqli_query($con,$sql3)or die("number query moonchi");

  $sql3="select Count(*) from gpu_tbl where status=1 and verified=0";
  $result4=mysqli_query($con,$sql3)or die("number query moonchi");
  $roww=mysqli_fetch_array($result4);
    $carte=$roww['Count(*)'];

    if (isset($_POST['delete'])) {
    $name=$_POST['result'];
    $sql3="delete from gpu_tbl where name='$name'";
    $result2=mysqli_query($con,$sql3)or die("number query moonchi");
    header('location:gpu_one.php');

    }

    if (isset($_POST['verify'])) {
    $name=$_POST['result'];
    $sql3="update gpu_tbl set verified=1 where name='$name'";
    // echo $sql3;
    $result2=mysqli_query($con,$sql3)or die("number query moonchi");
    header('location:gpu_one.php');

    }
    if (isset($_POST['add'])) {
    $name=$_POST['result'];
    $sql3="update gpu_tbl set verified=0 where name='$name'";
    // echo $sql3;
    $result2=mysqli_query($con,$sql3)or die("number query moonchi");
    header('location:gpu_one.php');

    }


?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BulidNgine</title>
    <script src="../../js/jquery-1.10.2.min.js"></script>
    <script src="../../js/jquery-ui.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/top.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "../../css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="../../css/style.css" rel="stylesheet">
  </head>
  <script type="text/javascript">
  function one(a) {
  document.getElementById('resulte').value=a;
  }
  </script>

  <div class="navbare">
      <a href="../../logout.php">Logout</a>
      <a href="../orders.php"><i class="fa fa-shopping-cart"></i> orders <span class="numbe"><?php echo "$cart" ?></span></a>
      <a href="#">welcome <?php echo($_SESSION['loginid'] )?></a>
  <div class="dropdowne">
      <button class="dropbtn">Add a product
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdowne-content">
      <a href="../motherboard.php">Motherboard</a>
      <a href="../cpu.php">CPU</a>
      <a href="../gpu.php">GPU</a>
      <a href="../ram.php">RAM</a>
      <a href="../mem.php">Memory</a>
      <a href="../mem_m2.php">Memory M.2</a>
      <a href="../smps.php">SMPS</a>
      <a href="../cpu_fan.php">CPU Fan</a>
      <a href="../cabinet.php">Cabinet</a>
    </div>

  </div>

  <div class="dropdowne">
      <button class="dropbtn">view a product
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdowne-content">
      <a href="motherboard_one.php">Motherboard</a>
      <a href="gpu_one.php">CPU</a>
      <a href="gpu_one.php">GPU</a>
      <a href="ram_one.php">RAM</a>
      <a href="mem_one.php">Memory</a>
      <a href="mem_m2_one.php">Memory M.2</a>
      <a href="smps_one.php">SMPS</a>
      <a href="cpu_fan_one.php">CPU Fan</a>
      <a href="cabinet_one.php">Cabinet</a>
    </div>
  </div>


      <!-- <a href="Motherboard.php">Bulid a PC</a> -->
      <a href="../prebulit.php">Prebulit System</a>
      <a href="../retailer.php">Home</a>
  </div>
  <body>
    <div class="container">
      <div class="row">
        <br />
    <form id="forme" action="" method="post">
        <input type="hidden" name="result" id="resulte">
        <div class="col-md-12">
          <br />
            <div class="row filter_datae">

              <?php

              if ($carte>0) {?>
                <center>
                  <h3>Not Verified GPUs</h3>
                </center>
                <?php
               foreach($result2 as $row)
                  {?>

                  <div class="col-sm-12 col-lg-12 col-md-12">

                    <div style="border:1px solid #ccc; border-radius:5px; padding:16px; padding-bottom: 25px; margin-bottom:16px; height:auto;">
                      <img  style="float:left; padding:5px;" src="../../project/gpu/<?php echo $row['image']  ?>" width="150px" height="150px" >


                        <h4><strong><?php echo $row['name'] ?> <div style="color:red; float:right;">
                          ₹ <?php echo $row['price'] ?>
                        </div></strong></h4>



                        <strong> Company</strong> : <?php echo $row['company'] ?>&nbsp;&nbsp;
                        <strong> Processor</strong> : <?php echo $row['processor'] ?>&nbsp;&nbsp;
                        <strong>   Core Freq</strong> : <?php echo $row['core_freq'] ?>&nbsp;&nbsp;
                        <strong> Memory Freq</strong> : <?php echo $row['mem_freq'] ?> &nbsp;&nbsp;
                        <strong> Memory Type</strong> : <?php echo $row['mem_type'] ?> &nbsp;&nbsp;
                          <br><br>

                        <strong> Memory Size</strong> : <?php echo $row['mem_size'] ?>&nbsp;&nbsp;
                        <strong> Memory Width</strong> : <?php echo $row['mem_width'] ?> &nbsp;&nbsp;
                        <strong> Power Conn.</strong> : <?php echo $row['pow_con'] ?> &nbsp;&nbsp;
                        <strong> Purpose </strong> : <?php echo $row['purpose'] ?> &nbsp;&nbsp;

                        <br><br>
                        <strong> Sold By </strong> : <?php echo $row['sold_by'] ?> &nbsp;&nbsp;



                    <div style="float: right;">
                      <i class="fa fa-trash"></i>
                      <input type="submit" name="delete" class="btn btn-danger" value="Delete" onclick="one('<?php echo $row['name'] ?>')">
                      &nbsp;
                      <i class="fa fa-archive"></i>
                      <input type="submit" name="verify" class="btn btn-primary" value="Save it as Verified" onclick="one('<?php echo $row['name'] ?>')">

                      </div>

                    </div>

                  </div>
                <?php
              }
            }?>
            </div>
        </div>
        <div class="col-md-3">
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

                $query = "select distinct(`company`) from `gpu_tbl` order by `company` desc";
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
      <h3>Processor</h3>
      <?php

                $query = "select distinct(`processor`) from `gpu_tbl` order by `processor` desc";
                $statement = $connect->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                foreach($result as $row)
                {
                ?>
                <div class="list-group-item checkbox">
                    <label><input type="checkbox" class="common_selector processor" value="<?php echo $row['processor']; ?>"  > <?php echo $row['processor']; ?></label>
                </div>
                <?php
                }

                ?>
            </div>
            <div class="list-group">
      <h3>Memory Type</h3>
      <?php

                $query = "select distinct(`mem_type`) from `gpu_tbl` order by `mem_type` desc";
                $statement = $connect->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                foreach($result as $row)
                {
                ?>
                <div class="list-group-item checkbox">
                    <label><input type="checkbox" class="common_selector mem_type" value="<?php echo $row['mem_type']; ?>"  > <?php echo $row['mem_type']; ?></label>
                </div>
                <?php
                }

                ?>
            </div>

    <div class="list-group">
      <h3>Memory Size</h3>
                <?php

                $query = "select distinct(`mem_size`) from `gpu_tbl` order by `mem_size` ";
                $statement = $connect->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                foreach($result as $row)
                {
                ?>
                <div class="list-group-item checkbox">
                    <label><input type="checkbox" class="common_selector mem_size" value="<?php echo $row['mem_size']; ?>" > <?php echo $row['mem_size']; ?> </label>
                </div>
                <?php
                }

                ?>
            </div>

                    <div class="list-group">
                      <h3>Power Connectors</h3>
                                <?php

                                $query = "select distinct(`pow_con`) from `gpu_tbl` order by `pow_con` desc";
                                $statement = $connect->prepare($query);
                                $statement->execute();
                                $result = $statement->fetchAll();
                                foreach($result as $row)
                                {
                                ?>
                                <div class="list-group-item checkbox">
                                    <label><input type="checkbox" class="common_selector pow_con" value="<?php echo $row['pow_con']; ?>" > <?php echo $row['pow_con']; ?> </label>
                                </div>
                                <?php
                                }

                                ?>
                            </div>
                            <div class="list-group">
                              <h3>Purpose</h3>
                                        <?php

                                        $query = "select distinct(`purpose`) from `gpu_tbl` order by `purpose` desc";
                                        $statement = $connect->prepare($query);
                                        $statement->execute();
                                        $result = $statement->fetchAll();
                                        foreach($result as $row)
                                        {
                                        ?>
                                        <div class="list-group-item checkbox">
                                            <label><input type="checkbox" class="common_selector purpose" value="<?php echo $row['purpose']; ?>" > <?php echo $row['purpose']; ?> </label>
                                        </div>
                                        <?php
                                        }

                                        ?>
                                    </div>

        </div>


          <div class="col-md-9">
            <center>
              <h3>Verified Motherboard</h3>
            </center>
            <br />
              <div class="row filter_data">

              </div>
          </div>
        </form>
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
        var purpose = get_filter('purpose');
        var socket = get_filter('socket');
        var ram_type = get_filter('ram_type');
        var max_ram = get_filter('max_ram');
        var m2_count = get_filter('m2_count');
        $.ajax({
          url:"fetch_data_gpu_one.php",
          method:"POST",
          data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, company:company, purpose:purpose, socket:socket, ram_type:ram_type, max_ram:max_ram,m2_count:m2_count },
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

    </form>

</body>

</html>
