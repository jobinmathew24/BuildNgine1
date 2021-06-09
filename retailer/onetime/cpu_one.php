<?php
session_start();
 if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='retailer') {
  header('location: ../../login.php');
  }
  include('../../database/connection.php');
  $id=$_SESSION['loginid'];


  $sql2="select Count(*) from ordertbl where status=1 and save=0 and buy =1 and remark!='Order in Transit'";
  // echo $sql2;

  $result1=mysqli_query($con,$sql2)or die("number query moonchi");
  $row=mysqli_fetch_array($result1);

  $cart=$row['Count(*)'];

  $sql3="select MIN(price) as min, MAX(price) as max from cpu_tbl where status=1 and verified=1";
  $result2=mysqli_query($con,$sql3)or die("price query moonchi");
  $row=mysqli_fetch_array($result2);
  $min=$row['min'];
  $max=$row['max'];

  $sql3="select * from cpu_tbl where status=1 and verified=0 and sold_by='$id'";
  $result2=mysqli_query($con,$sql3)or die("number query moonchi");

  $sql3="select Count(*) from cpu_tbl where status=1 and verified=0 and sold_by='$id'";
  $result4=mysqli_query($con,$sql3)or die("number query moonchi");
  $roww=mysqli_fetch_array($result4);
    $carte=$roww['Count(*)'];

    if (isset($_POST['delete'])) {
    $name=$_POST['result'];
    $sql3="delete from cpu_tbl where name='$name'";
    $result2=mysqli_query($con,$sql3)or die("number query moonchi");
    header('location:cpu_one.php');

    }
    if (isset($_POST['edit'])) {
    $name=$_POST['result'];
    $_SESSION['cpu_edit']=$name;
    header('location:edit/cpu_edit.php');

    }
    if (isset($_POST['verify'])) {
    $name=$_POST['result'];
    $sql3="update cpu_tbl set verified=1 where name='$name'";
    // echo $sql3;
    $result2=mysqli_query($con,$sql3)or die("number query moonchi");
    header('location:cpu_one.php');

    }
    if (isset($_POST['add'])) {
    $name=$_POST['result'];
    $sql3="update cpu_tbl set verified=0 where name='$name'";
    // echo $sql3;
    $result2=mysqli_query($con,$sql3)or die("number query moonchi");
    header('location:cpu_one.php');

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

  <?php
  include('../../php/retailer_one_header.php');
   ?>
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
                  <h3>Not Verified CPUs</h3>
                </center>
                <?php
               foreach($result2 as $row)
                  {?>

                  <div class="col-sm-12 col-lg-12 col-md-12">

                    <div style="border:1px solid #ccc; border-radius:5px; padding:16px; padding-bottom: 25px; margin-bottom:16px; height:auto;">
                      <img  style="float:left; padding:5px;" src="../../project/cpu/<?php echo $row['pic']  ?>" width="150px" height="150px" >


                        <h4><strong><?php echo $row['name'] ?> <div style="color:red; float:right;">
                          ₹ <?php echo $row['price'] ?>
                        </div></strong></h4>

                        <strong> Company</strong> : <?php echo $row['company'] ?>&nbsp;&nbsp;
                        <strong> Socket</strong> : <?php echo $row['socket'] ?>&nbsp;&nbsp;
                        <strong> Core Count </strong> : <?php echo $row['core_count'] ?> Nos&nbsp;&nbsp;
                        <strong> Thread Count</strong> : <?php echo $row['thread_count'] ?> Nos &nbsp;&nbsp;
                        <strong> Max Frequency</strong> : <?php echo $row['frequency'] ?> Mhz&nbsp;&nbsp;
                        <br><br>

                        <strong> Turbo boost</strong> : <?php echo $row['turboboost'] ?>&nbsp;&nbsp;
                        <strong> GPU</strong> : <?php echo $row['igpu'] ?> &nbsp;&nbsp;
                        <strong> Cache</strong> : <?php echo $row['cache'] ?> &nbsp;&nbsp;
                        <strong> Lithography </strong> : <?php echo $row['lithography'] ?> &nbsp;&nbsp;
                        <strong> Max Temp </strong> : <?php echo $row['max_temp'] ?> °C&nbsp;&nbsp;
                        <br><br>


                        <strong> Purpose </strong> : <?php echo $row['purpose'] ?> &nbsp;&nbsp;
                        <strong> Sold By </strong> : <?php echo $row['sold_by'] ?> &nbsp;&nbsp;

                    <div style="float: right;">
                      <i class="fa fa-trash"></i>
                      <input type="submit" name="delete" class="btn btn-danger" value="Delete" onclick="one('<?php echo $row['name'] ?>')">
                      &nbsp;
                      <i class="fa fa-pencil"></i>
                      <input type="submit" name="edit" class="btn btn-warning" value="Edit the Product" onclick="one('<?php echo $row['name'] ?>')">
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

                $query = "select distinct(`company`) from `cpu_tbl` where verified =1  order by `company` desc";
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
        <h3>Purpose</h3>
        <?php

                $query = "select distinct(`purpose`) from `cpu_tbl` where verified =1  order by `purpose` desc";
                $statement = $connect->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                foreach($result as $row)
                {
                ?>
                <div class="list-group-item checkbox">
                    <label><input type="checkbox" class="common_selector purpose" value="<?php echo $row['purpose']; ?>"  > <?php echo $row['purpose']; ?></label>
                </div>
                <?php
                }

                ?>
            </div>
            <div class="list-group">
              <h3>Socket</h3>
                        <?php

                        $query = "select distinct(`socket`) from `cpu_tbl` where verified =1 order by `socket` desc";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach($result as $row)
                        {
                        ?>
                        <div class="list-group-item checkbox">
                            <label><input type="checkbox" class="common_selector socket" value="<?php echo $row['socket']; ?>" > <?php echo $row['socket']; ?></label>
                        </div>

                        <?php
                        }

                        ?>
                      </div>
        <div class="list-group">
        <h3>Core Count</h3>
                <?php

                $query = "select distinct(`core_count`) from `cpu_tbl` where verified =1  order by `core_count` desc";
                $statement = $connect->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                foreach($result as $row)
                {
                ?>
                <div class="list-group-item checkbox">
                    <label><input type="checkbox" class="common_selector core" value="<?php echo $row['core_count']; ?>" > <?php echo $row['core_count']; ?> Nos</label>
                </div>
                <?php
                }

                ?>
            </div>

                    <div class="list-group">
                      <h3>GPU</h3>
                                <?php

                                $query = "select distinct(`igpu`) from `cpu_tbl` where verified =1 order by `igpu` desc";
                                $statement = $connect->prepare($query);
                                $statement->execute();
                                $result = $statement->fetchAll();
                                foreach($result as $row)
                                {
                                ?>
                                <div class="list-group-item checkbox">
                                    <label><input type="checkbox" class="common_selector igpu" value="<?php echo $row['igpu']; ?>" > <?php echo $row['igpu']; ?> </label>
                                </div>
                                <?php
                                }

                                ?>
                            </div>

        </div>

          <div class="col-md-9">
            <center>
              <h3>Verified CPUs</h3>
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
            var core = get_filter('core');
            var cache = get_filter('cache');
            var igpu = get_filter('igpu');
            // var m2_count = get_filter('m2_count');
            $.ajax({
                url:"fetch_data_cpu_one.php",
                method:"POST",
                data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, company:company, purpose:purpose, socket:socket, core:core, cache:cache, igpu:igpu },
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
<?php
include('../../php/footer.php'); ?>

</html>
