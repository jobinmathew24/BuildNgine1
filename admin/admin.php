<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='admin') {
 header('location: ../login.php');
 }
 $loginid=$_SESSION['loginid'];
include('../database/connection.php');



//  total num of customers
$count="select * from logintable where usertype='user' and status=1";
$count_query=mysqli_query($con,$count);
$row = mysqli_num_rows($count_query);

//total num of service providers
$count_sp="select * from logintable where usertype='retailer' ";
$countsp_query=mysqli_query($con,$count_sp);
$row_sp = mysqli_num_rows($countsp_query);

// new requested service providers
$count_s="select * from logintable where usertype='retailer' and status=0";
$counts_query=mysqli_query($con,$count_s);
$row_s=$alert = mysqli_num_rows($counts_query);

$countt="select * from complaints where status=1";
$countt_query=mysqli_query($con,$countt);
$row_t= mysqli_num_rows($countt_query);
$alert=$alert+$row_t;
// total number of employee
$count_emp="select * from logintable where usertype='retailer' and status=0";
$emp_query=mysqli_query($con,$count_emp);
$row_emp = mysqli_num_rows($emp_query);


$total_sum="select sum(total) as total from ordertbl where status=1 and buy=1";
$total_query=mysqli_query($con,$total_sum);
$totals=mysqli_fetch_array($total_query);
$row_totals = $totals['total'];


// total number of Complaints
$count_comp="select * from complaints where status=1";
$comp_query=mysqli_query($con,$count_comp);
$row_comp = mysqli_num_rows($comp_query);

// total number of Orders
$count_total_order="select * from ordertbl where buy=1";
$Total_order_query=mysqli_query($con,$count_total_order);
$row_total = mysqli_num_rows($Total_order_query);

// total number of new Orders
$count_total_order="select * from ordertbl where status=1 and buy=1";
$Total_order_query=mysqli_query($con,$count_total_order);
$row_neworder = mysqli_num_rows($Total_order_query);

// total number of new prebulid sys
$count_total_order="select * from prebuilt_tbl";
$Total_order_query=mysqli_query($con,$count_total_order);
$row_pre = mysqli_num_rows($Total_order_query);

$presql="SELECT * FROM `ordertbl` WHERE category  in ('Business','professional','gaming')";
$pre_query=mysqli_query($con,$presql);
$pre_pre = mysqli_num_rows($pre_query);

$presql="SELECT * FROM `ordertbl` WHERE category not in ('Business','professional','gaming')";
$not_pre_query=mysqli_query($con,$presql);
$not_pre_pre = mysqli_num_rows($not_pre_query);
// Insert Image
$sqlcod="select sum(amount)/100 as amount from payment where payment_status ='cod'";
$cod_query=mysqli_query($con,$sqlcod);
$row_cod = mysqli_fetch_array($cod_query);
$cod=$row_cod['amount'];

$sqlcod="select sum(amount)/100 as amount from payment where payment_status ='complete'";
$cod_query=mysqli_query($con,$sqlcod);
$row_cod = mysqli_fetch_array($cod_query);
$online=$row_cod['amount'];

// if(isset($_POST['bill'])){
//   // session_start();
//   $_SESSION['orderid']=$_POST['bill'];
// }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
          <title>Admin Index</title>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	      <!--fontawesome-->
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
              <link rel="stylesheet" href="../css/admin.css">
        <script src="../js/jquery-1.10.2.min.js"></script>
        <script src="../js/jquery-ui.js"></script>
        <script src="../js/sidebar.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script type="text/javascript">
// Load google charts

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
google.charts.setOnLoadCallback(drawChart1);
google.charts.setOnLoadCallback(drawChart2);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'user'],
    ['User', <?php echo $row ?>],
    ['Retailer', <?php echo $row_sp ?>]
  ]);
  var options = {'title':'User and Retailers', 'width':400, 'height':400};
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
function drawChart1() {
  var data1 = google.visualization.arrayToDataTable([
    ['Task', 'num'],
    ['Cash on delivery', <?php echo $cod ?>],
    ['Online Payments', <?php echo $online ?>]
  ]);
  var options1 = {'title':'CoD and online Payments', 'width':400, 'height':400};
  var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
  chart.draw(data1, options1);
}

function drawChart2() {
var data2 = google.visualization.arrayToDataTable([
['Task', 'Number'],
['Prebuilt systems', <?php echo $pre_pre ?>],
['Other Products', <?php echo $not_pre_pre ?>]
]);
  // Optional; add a title and set the width and height of the chart
  var options2 = {'title':'Prebuilt systems and orders', 'width':400, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
chart.draw(data2, options2);
}
</script>
        <script type="text/javascript">
          $(document).ready(function(){
          $("#searche").on("keyup",function(){
            // console.log("asd");
            var search=$(this).val();
            console.log(search);
            $.ajax({
              url:"live_search.php",
              type:"POST",
              data:{search:search},
              success: function(data){
                $("#search_result").html(data);
              }
            })
          });
          });
        </script>
  </head>


  <body>

        <!-- Sidebar wrapper -->
  <div id="wrapper">
    <div class="overlay"></div>

        <!-- Sidebar -->
        <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation" >
       <div class="simplebar-content" style="padding: 0px;">
				<a class="sidebar-brand" href="admin.php">
          <img src="../images/logos/logo_w.png" width="200px" alt="">  </a>
				 <ul class="navbar-nav align-self-stretch">

        <li class="sidebar-header">Admin Control</li>
	       <li class=""><a class="nav-link text-left active" href="#stats"  onclick="adminhome()">Home
       <i class="flaticon-bar-chart-1"></i>
         </a>
          </li>
          <li class="has-sub">
		  <a class="nav-link collapsed text-left active" id="dropdown-toggle" href="#collapseExample2" role="button" data-toggle="collapse">
        <i class="flaticon-user"></i>  Admin Location Control
         </a>
		  <div class="collapse menu mega-dropdown" id="collapseExample2">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box">
										<ul class="list-unstyled m-0" id="dropdown-menu">
											<li><a href="#delete_state" onclick="del_state()">Update State</a></li>
											<!-- <li><a href="#delete_district" onclick="del_district()">Delete district</a></li> -->
										</ul>
									</div>
								</div>

							</div>
						</div>
		     </div>
		  </div>
		  </li>

<!-- <form class="" id="myForm"action="" method="post">
  <input type="hidden" name="bill" id="bill" value="">
</form> -->
          <!-- <li class="">
            <a class="nav-link text-left active" href="#retailer_att" onclick="retailer_att()"> Admin</a>
            </li> -->

            <li class="">
                <a class="nav-link text-left active" href="#retailer" onclick="retailer()"> Retailers </a>
                </li>

                  <li class="">
                      <a class="nav-link text-left active" href="#retailer_att" onclick="retailer_att()"> Retailers Needs Attention </a>
                      </li>
                      <li class="">
            <a class="nav-link text-left active" href="#customer" onclick="cust()">  Customers  </a>
            </li>
            <li class="">
              <a class="nav-link text-left active" href="#order" onclick="order()"> Orders </a>
              </li>
              <li class="">
                <a class="nav-link text-left active" href="#complaints" onclick="complaints()"> Complaints </a>
                </li>
                <li class="">
                  <a class="nav-link text-left active" href="#prebulit" onclick="prebulit()"> Prebulit Systems </a>
                  </li>

                  <li class="">
                    <a class="nav-link text-left active" href="logout.php"> Logout </a>
                    </li>

          </ul>
          </div>

    </nav>
  </div>
        <!-- /#sidebar-wrapper -->


        <!-- Page Content -->
        <div id="page-content-wrapper">


			<div id="content">

       <div class="container-fluid p-0 px-lg-0 px-md-0">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light my-navbar">

          <!-- Sidebar Toggle (Topbar) -->
            <div type="button"  id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
               <span></span>
			    <span></span>
				 <span></span>
            </div>


          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline navbar-search" action="" method="post">

            <div class="input-group">
            <input type="text" class="form-control bg-light" name="search_text" id="searche" placeholder="Search.." value="">
          </div>
          </form>



          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown  d-sm-none">

              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
				            	placeholder="Search for..." >
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->

           <li class="nav-item dropdown">
							<a class="nav-icon dropdown" href="" id="alertsDropdown" data-toggle="dropdown" aria-expanded="false">
								<div class="position-relative">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell align-middle"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
									<span class="indicator">
                    <?php
                  echo $alert;
                  ?>
                </span>
                </div>
              </a>
              <?php if ($alert>0){ ?>


              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
                  <?php echo $alert;

                  ?> new notifications
								</div>
								<div class="list-group">
									<a href="#retailer_att" onclick="retailer_att()" class="list-group-item">
										<div class="row no-gutters align-items-center">

											<div class="col-12">
                        <div class="text-dark"><table><?php


                        while($d=mysqli_fetch_array($counts_query))
                        {

                           $n=$d['loginid'];

                          ?><tr><strong><?php
                          echo $n." </strong>sends you an aproval Request<br>";
                          ?></tr>
                        <?php
                      }
                      ?>

                         </table></div>
												<!-- <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div> -->
											</div>
										</div>
									</a>

                  <?php if ($row_t) {?>


                  <a href="#complaints"  onclick="complaints()"class="list-group-item">
                    <div class="row no-gutters align-items-center">

                      <div class="col-12">
                        <div class="text-dark"><table>
                          <?php


                          while($d=mysqli_fetch_array($countt_query))
                          {

                             $n=$d['loginid'];

                            ?><tr><strong><?php
                            echo $n." </strong>sends you a Complaint <br>";
                            ?></tr>
                          <?php
                        }
                        ?>
                         </table></div>
                        <!-- <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                        <div class="text-muted small mt-1">30m ago</div> -->
                      </div>
                    </div>
                  </a>
                <?php }?>
                </div>
								<!-- <div class="dropdown-menu-footer">
									<a href="#servicepro" class="text-muted">Show all notifications</a>
								</div> -->
							</div>

<?php } ?>



						</li>


            <!-- Nav Item - User Information -->
            <li>
              <a  href="profile.php"  role="button" >
                <label ><b style="font-famiy: Times New Roman, Times, serif;">Welcome <?php echo $loginid ?></b></label>
              </a>
            </li>
            <li>

              <a  href="logout.php" id="userDropdown" role="button" >
                <label ><b style="font-famiy: Times New Roman, Times, serif;">Signout</b></label>
              </a>
            </li>


          </ul>

        </nav>


<!-- <span id="sucess-msg"></span> -->
        <!-- End of Topbar -->
        <div id="rowr" style="padding-top:50px;">

        </div>

        <center>
          <div class="col-md-12" id="search_result">

          </div>
        </center>
<div id="stats" style="display:inline ;">

  <div class="container-fluid px-lg-4">
  <div class="row">
  <div class="col-md-12 mt-lg-4 mt-4">
          <!-- Page Heading -->
          <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>
			Generate Report</a>
          </div> -->
    </div>

  <div class="col-md-12" style="padding-top: 55px;">
       <div class="row">
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Retailers</h5>
												<h1 class="display-5 mt-1 mb-3">
                        <?php
                            echo $row_sp;
                          ?>
                        </h1>

											</div>
										</div>

									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Customers</h5>
												<h1 class="display-5 mt-1 mb-3">
                          <?php
                            echo $row;
                          ?>
                        </h1>

											</div>
										</div>

									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Retailer need Attention</h5>
												<h1 class="display-5 mt-1 mb-3"><?php echo $row_emp;?></h1>

											</div>
										</div>

									</div>
                  <div class="col-sm-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title mb-4">Total Orders</h5>
                        <h1 class="display-5 mt-1 mb-3"><?php echo $row_total;?></h1>

                      </div>
                    </div>

                  </div>
                  <div class="col-sm-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title mb-4">New Orders</h5>
                        <h1 class="display-5 mt-1 mb-3"><?php echo $row_neworder;?></h1>

                      </div>
                    </div>

                  </div>
                  <div class="col-sm-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title mb-4">Total Transaction Amount</h5>
                        <h1 class="display-5 mt-1 mb-3">₹ <?php echo $row_totals;?></h1>

                      </div>
                    </div>

                  </div>
                  <div class="col-sm-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title mb-4">Complaints</h5>
                        <h1 class="display-5 mt-1 mb-3"><?php echo $row_comp;?></h1>

                      </div>
                    </div>

                  </div>
                  <div class="col-sm-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title mb-4">Prebluid systems</h5>
                        <h1 class="display-5 mt-1 mb-3"><?php echo $row_pre;?></h1>

                      </div>
                    </div>
                  </div>


                    </div>

        </div>

        </div>
        <!-- /.container-fluid -->
          <div class="col-md-12" style="style=float:left; padding:55px">
            <div class="row">

        <div id="piechart" style="float:left;"></div>
        <div id="piechart1" style="float:left;"></div>
        <div id="piechart2" style="float:left;"></div>
      </div>
      </div>

      <br>
		<!-- Service providers and emplyee details -->
    </div>
  </div>

    <!-- /#wrapper -->


    <!-- Admin District control -->
    <span id="error-msg"></span>
 <div id="adminlocation">
   <div id="delete_state" style="display:none;">
    <div class="container">
  <!-- <div style="float: left;"> -->
  <!-- <button class="btn btn-primary" data-target="#demo-lg-modalSMSAll" data-toggle="modal" id="add-new-dis">Add New</button> -->
  <!-- </div> -->
    <div class="row">
      <div class="col-12">
    <br>
    <h4>
      <center>
        Approved States
      </center>

    </h4>
      <table class="table table-bordered" id="add-district" style="width: 800px; margin-left :40px;">
        <thead>
          <tr>
            <th scope="col">State</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php
                $sql="select * from state where status=1";
                $sql_query=mysqli_query($con,$sql);
                while($data=mysqli_fetch_array($sql_query))
                {
                  $dis_id=$data['StCode'];
              ?>
          <tr>
            <th scope="row">
             <?php

               echo $data['StateName'];
             ?>
            </th>
            <td >
                        <button class="btn btn-sm btn-danger btn-inline del" title="Delete"><i class="fa fa-times" aria-hidden="true"></i></button>
            </td>
          </tr>
         <?php
             }
         ?>

        </tbody>
      </table>
      <br>
      <h4>
        <center>
          States are not Verified
        </center>

      </h4>
      <table class="table table-bordered" id="delete-district" style="width: 800px; margin-left :40px;">
        <thead>
          <tr>
            <th scope="col">State</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php
                $sql="select * from state where status=0";
                $sql_query=mysqli_query($con,$sql);
                while($data=mysqli_fetch_array($sql_query))
                {
                  $dis_id=$data['StCode'];
              ?>
          <tr>
            <th scope="row">
             <?php

               echo $data['StateName'];
             ?>
            </th>
            <td style="border-top:0px;">
                        <button class="btn btn-sm btn-success btn-inline edit"><i class="fa fa-check"></i></button>
                        </td>
          </tr>
         <?php
             }
         ?>

        </tbody>
      </table>
    </div>
  </div>



       </div>
    </div>
    </div>
<br>
            <!-- Location Management -->


<!-- #admin location control -->

<!--  admin service category management-->



<div id="admin_sc_management">
<div class="container col-sm-12" style="display: none;" id="retailer">

    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">

            </div>
            <h4>
              <center>
                Approved Retailers
              </center>

            </h4>
            <br>
            <table class="table table-bordered" id="add-retailer">
                <thead>
                    <tr>
                        <!-- <th>slno</th> -->
                        <th>Retailer Shop</th>
                        <th>Retailer Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Picture</th>
                        <th>Reject</th>

                    </tr>
                </thead>
                <tbody>
                <?php
                            $services="select loginid from logintable where usertype='retailer' and status=1";
                            $ser_query=mysqli_query($con,$services);
                            while($row=mysqli_fetch_array($ser_query))
                            {?>
                    <tr>
                        <!-- <td>John Doe</td> -->
                        <th>
                          <?php
                              echo $row['loginid'];
                            $loginid=$row['loginid'];
                            $services1="select name,email,phone,pic from user_login where loginid='$loginid'";
                            $ser_query1=mysqli_query($con,$services1);
                            while($rows=mysqli_fetch_array($ser_query1)){

                              $name=$rows['name'];
                              $email=$rows['email'];
                              $phone=$rows['phone'];
                              $pic=$rows['pic'];


                          ?>
                        </th>
                        <th>
                          <?php
                            echo $name;
                          ?>
                        </th>
                        <th>
                          <?php
                            echo $email;
                          ?>
                        </th>
                        <th>
                          <?php
                            echo $phone;
                          ?>
                        </th>
                        <th>
                          <img src="../images/users/<?php echo $pic;?>" width="60px" height="50px"/>

                        </th>
                        <td style="border-top:0px;text-align:center;">
                        <!-- <button class="btn btn-sm btn-success btn-inline sc_edit" data-target="#demo-lg-modal1" onclick="" data-toggle="modal" title="Edit"><i class="fa fa-pen"></i></button><a> -->
                        <button class="btn btn-sm btn-danger btn-inline sc_del" onclick=""  title="Delete"><i class="fa fa-times" aria-hidden="true"></i></button></a><a>
                        <!-- <button class="btn btn-sm btn-primary btn-inline" style="padding-top: 3px;" onclick="" title="Upload/View data"><i class="fa fa-upload"></i></button> -->
                        </a></td>
                    </tr>
                    <?php
                  }
                        }
                    ?>
                </tbody>
            </table>

        </div>



 <!-- Add new category -->



            </div>
      </div>
</div>

<!-- Admin sc management -->

<!-- SP Details -->
<span id="Notification_msg"></span>

<div id="retailer_att" style="display:none">
  <h4>
    <center>
      Retailers Need Attention
    </center>
  </h4>
  <br>
<table class="table table-bordered" id="del-retailer">
<thead>
  <tr>
    <th>Retailer Shop</th>
    <th>Retailer Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Picture</th>
    <th>Actions</th>
</tr>
</thead>
<tbody>
<?php
  if($row_s>0)

  {
    $count_s="select loginid from logintable where usertype='retailer' and status=0";
    $counts_query=mysqli_query($con,$count_s);
    $row_s = mysqli_num_rows($counts_query);
    while($data=mysqli_fetch_array($counts_query))
 {

    $lid=$data['loginid'];
    $_SESSION['lid']=$lid;
    $sp_name="select * from user_login where loginid='$lid'";
    $serv_query=mysqli_query($con,$sp_name);
   while($dta=mysqli_fetch_array($serv_query))
   {
    $name=$dta['name'];
    $email=$dta['email'];
    $phone=$dta['phone'];
    $pic=$dta['pic'];
   }
 ?>
<tr>
<th><?php echo $lid; ?></th>
<th><?php

            echo $name;


          ?> </th>
<th><?php echo $email; ?></th>
<th><?php echo $phone; ?></th>
<th>
  <img src="../images/users/<?php echo $pic;?>" width="60px" height="50px"/>

</th>
<td>
  <button class="btn btn-sm btn-success btn-inline retailer_approve" data-target="#demo-lg-modal1" onclick="" data-toggle="modal" title="Approve">Approve</button><a>
  <button class="btn btn-sm btn-danger btn-inline retailer_reject" onclick=""  title="Delete">Reject</button></a><a>
</td>
</tr>
<?php
   }
 }
?>
</tbody>
</table>
<br>
<br>
<br>
</div>
<!-- prebulit details -->
<div id="prebulit" style="display:none;">
  <h4>
    <center>
      Prebuilt Systems
    </center>
  </h4>
<table class="table table-bordered">
<thead>

<tr>
<th>Product Name</th>
<th>Created By</th>
<th>Motherboard</th>
<th>CPU</th>
<th>RAM</th>
<th>MEMORY</th>
<!-- <th>GPU</th> -->
<!-- <th>SMPS</th> -->
<th>Category</th>
<th>Price</th>
<th>Image</th>
<!-- <th>Actions</th> -->
</tr>
</thead>
<tbody>
<?php
  $employe="select * FROM prebuilt_tbl where status=1";
  $employee_query=mysqli_query($con,$employe);
  while($row=mysqli_fetch_array($employee_query))
  {
    $name=$row['name'];
    $username=$row['loginid'];
    $motherboard=$row['motherboard'];
    $cpu=$row['cpu'];
    $ram=$row['ram'];
    $ram_size=$row['ram_size'];
    $mem=$row['mem'];
    $hdd_size=$row['hdd_size'];
    $gpu=$row['gpu'];
    $grap_size=$row['grap_size'];
    $smps=$row['smps'];
    $category=$row['category'];
    $price=$row['price'];
    $img=$row['pic'];

  ?>
<tr>
  <th><?php echo $name;?></th>
  <th><?php echo $username;?></th>
<th><?php echo $motherboard; ?></th>
<th><?php echo $cpu; ?></th>
<th><?php echo $ram_size; echo "Gb"; echo " | "; echo $ram;?></th>
<th><?php echo $hdd_size; echo "Gb"; echo " | ";  echo $mem; ?></th>
<!-- <th><?php echo $grap_size; echo "Gb"; echo " | "; echo $gpu; ?></th> -->
<!-- <th><?php echo $smps; ?></th> -->
<th><?php echo $category;?></th>
<th>₹ <?php echo $price;?></th>
<td>
  <?php if ($row['category']=='professional'||$row['category']=='Business'||$row['category']=='gaming'){?>
    <img  style="float:left; padding:5px;"src="../project/cabinet/<?php echo $row['pic']  ?> " width="50px" height="50px"  >

  <?php  } ?>

</td>
<!-- <td>
  <button class="btn btn-sm btn-success btn-inline sc_edit" data-target="#demo-lg-modal1" onclick="" data-toggle="modal" title="Edit"><i class="fa fa-pen"></i></button><a>
  <button class="btn btn-sm btn-danger btn-inline scs_del" onclick=""  title="Delete"><i class="fa fa-times" aria-hidden="true"></i></button></a><a>
</td> -->
</tr>
<?php
  }
?>
</tbody>
</table>
</div>


<div id="complaints" style="display:none;">
  <h4>
    <center>
      Complaints
    </center>
  </h4>
<table class="table table-bordered">
<thead>

<tr>
<th>Complaint ID</th>
<th>Created By</th>
<th>Issue/Problem</th>
<th>Action</th>

<!-- <th>Actions</th> -->
</tr>
</thead>
<tbody>
<?php
  $employe="select * FROM complaints where status=1";
  $employee_query=mysqli_query($con,$employe);
  while($row=mysqli_fetch_array($employee_query))
  {
    $id=$row['id'];
    $username=$row['loginid'];
    $matter=$row['matter'];


  ?>
<tr>
  <th><?php echo $id;?></th>
  <th><?php echo $username;?></th>
<th><?php echo $matter; ?></th>

<td>
  <button class="btn btn-sm btn-success btn-inline solved" data-target="#demo-lg-modal1" onclick="" data-toggle="modal" title="Edit">Solved</button><a>
  <!-- <button class="btn btn-sm btn-danger btn-inline scs_del" onclick=""  title="Delete"><i class="fa fa-times" aria-hidden="true"></i></button></a><a> -->
</td>
</tr>
<?php
  }
?>
</tbody>
</table>
</div>



<!-- Employee Details -->
<div id="orders" style="display:none;">
  <h4>
    <center>
      Ongoing Orders
    </center>
  </h4>
<table class="table table-bordered">
<thead>

<tr>
<th>Order ID</th>
<th>Product Name</th>
<th>User Name</th>
<th>Category</th>
<th>Sold By</th>
<th>Price</th>
<th>Image</th>
<th>Bill Print</th>
<!-- <th>Actions</th> -->
</tr>
</thead>
<tbody>
<?php
  $employe="select * FROM ordertbl where status=1 and buy=1";
  $employee_query=mysqli_query($con,$employe);
  while($row=mysqli_fetch_array($employee_query))
  {
    $username=$row['loginid'];
    $orderid=$row['orderid'];
    $name=$row['name'];
    $sold_by=$row['sold_by'];
    $category=$row['category'];
    $price=$row['total'];
    $img=$row['pic'];

  ?>
<tr>
<th><?php echo $orderid; ?></th>
<th><?php echo $name;?></th>
<th><?php echo $username;?></th>
<th><?php echo $category;?></th>
<th><?php echo $sold_by;?></th>
<th><?php echo $price;?></th>
<td>
  <?php if ($row['category']=='professional'||$row['category']=='Business'||$row['category']=='gaming'){?>
    <img  style="float:left; padding:5px;"src="../project/cabinet/<?php echo $row['pic']  ?>.jpg " width="50px" height="50px"  >

  <?php  } elseif ($row['category']=='CPU') {?>
  <img  style="float:left; padding:5px;"src="../project/cpu/<?php echo $row['name']  ?>.jpg " width="50px" height="50px"  >

  <?php  }elseif ($row['category']=='GPU') {?>
  <img  style="float:left; padding:5px;"src="../project/gpu/<?php echo $row['name']  ?>.jpg " width="50px" height="50px"  >

  <?php  }elseif ($row['category']=='MEMORY') {?>
  <img  style="float:left; padding:5px;"src="../project/mem/<?php echo $row['name']  ?>.jpg " width="50px" height="50px"  >

  <?php  }elseif ($row['category']=='RAM') {?>
  <img  style="float:left; padding:5px;"src="../project/ram/<?php echo $row['name']  ?>.jpg " width="50px" height="50px"  >

  <?php  }elseif ($row['category']=='Motherboard') {?>
  <img  style="float:left; padding:5px;"src="../project/mother/<?php echo $row['name']  ?>.jpg " width="50px" height="50px"  >

  <?php  }elseif ($row['category']=='SMPS') {?>
  <img  style="float:left; padding:5px;"src="../project/smps/<?php echo $row['name']  ?>.jpg " width="50px" height="50px" >

  <?php  }elseif ($row['category']=='CPU FAN') {?>
  <img  style="float:left; padding:5px;"src="../project/fan/<?php echo $row['name']  ?>.jpg " width="50px" height="50px"  >

  <?php  }elseif ($row['category']=='cabinet') {?>
  <img  style="float:left; padding:5px;"src="../project/cabinet/<?php echo $row['name']  ?>.jpg " width="50px" height="50px"  >

  <?php  }?>

</td>
<td>
<!-- <td>
<button class="btn btn-sm btn-success btn-inline sc_edit" data-target="#demo-lg-modal1" onclick="" data-toggle="modal" title="Edit"><i class="fa fa-pen"></i></button><a> -->
  <a href="generate.php?orderid=<?php echo $row['orderid'] ?>">
<button class="btn btn-sm btn-success btn-inline " onclick="" title=""><i class="fa fa-print" aria-hidden="true"></i></button></a>
</td>
</tr>
<?php
  }
?>
</tbody>
</table>
</div>

<!-- Employee Details -->

<!-- customer Details -->
<div id="customer" style="display:none;">
  <h4>
    <center>
      Approved Users
    </center>
  </h4>
<table class="table table-bordered" id="add-user">
<thead>
<tr>
<th>User Name</th>
<th>Customer Name</th>
<th>Email</th>
<th>Phone</th>
<th>Picture</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php
  $employe="select loginid from logintable where usertype='user' and status=1";
  $employee_query=mysqli_query($con,$employe);
  while($r=mysqli_fetch_array($employee_query))
  {
    $name=$r['loginid'];

  ?>
<tr>
<th><?php echo $name; ?></th>
<th><?php
$service_providers="select name,email,phone,pic from user_login where loginid='$name'";
$sp_query=mysqli_query($con,$service_providers);
while($row=mysqli_fetch_array($sp_query))
{
  echo $row['name'];
  $email=$row['email'];
  $phone=$row['phone'];
  $pic=$row['pic'];

}
?></th>
<th>
<?php echo  $email;?>
</th>
<th>
<?php echo  $phone;?>
</th>
<th>
<img src="../images/users/<?php echo  $pic;?>" width="60px" height="50px">
</th>
<td>
  <!-- <button class="btn btn-sm btn-success btn-inline sc_edit" data-target="#demo-lg-modal1" onclick="" data-toggle="modal" title="Edit"><i class="fa fa-pen"></i></button><a> -->
  <button class="btn btn-sm btn-danger btn-inline user_del" onclick=""  title="Delete"><i class="fa fa-times" aria-hidden="true"></i></button></a><a>
</td>
</tr>
<?php
  }
?>

</table>
<br>
<h4>
  <center>
    Not Approved Users
  </center>
</h4>
<table class="table table-bordered" id="del-user">
<thead>
<tr>
<th>User Name</th>
<th>Customer Name</th>
<th>Email</th>
<th>Phone</th>
<th>Picture</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php
  $employe="select loginid from logintable where usertype='user' and status=0";
  $employee_query=mysqli_query($con,$employe);
  while($r=mysqli_fetch_array($employee_query))
  {
    $name=$r['loginid'];

  ?>
<tr>
<th><?php echo $name; ?></th>
<th><?php
$service_providers="select name,email,phone,pic from user_login where loginid='$name'";
$sp_query=mysqli_query($con,$service_providers);
while($row=mysqli_fetch_array($sp_query))
{
  echo $row['name'];
  $email=$row['email'];
  $phone=$row['phone'];
  $pic=$row['pic'];

}
?></th>
<th>
<?php echo  $email;?>
</th>
<th>
<?php echo  $phone;?>
</th>
<th>
<img src="../images/users/<?php echo  $pic;?>" width="60px" height="50px">
</th>
<td>
  <!-- <button class="btn btn-sm btn-success btn-inline sc_edit" data-target="#demo-lg-modal1" onclick="" data-toggle="modal" title="Edit"><i class="fa fa-pen"></i></button><a> -->
  <button class="btn btn-sm btn-success btn-inline user_approve" onclick=""  title="Delete"><i class="fa fa-check" aria-hidden="true"></i></button></a><a>
</td>
</tr>
<?php
  }
?>

</table>




</div>
<footer class="footer">
  <div class="container-fluid">
    <div class="row text-muted">
      <div class="col-6 text-left">
        <p class="mb-0">
          <a href="#" class="text-muted"><strong>BulidNgine Pvt. Ltd.</strong></a> &copy
        </p>
      </div>
      <div class="col-6 text-right">
        <ul class="list-inline">


          <li class="footer-item">
            <a class="text-muted" href="#">Help Center</a>
          </li>
          <li class="footer-item">
            <a class="text-muted" href="#">Privacy</a>
          </li>
          <li class="footer-item">
            <a class="text-muted" href="#">Terms</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!-- customer Details -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-1.10.2.min.js"></script>

    <!-- <script src="js/wow.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
// add edit and delete service category
// $(document).ready(function(){
//   $("#add-new").on('click',function(){
//       $("#new-sc").css("display","inline");
//       $("#sc3").on('click',function(){
//           // $("#pre-sc").append("<tr><td>"+$("#c1").val()+"</td><td>"+$("#c2").val()+"</td><td style='border-top:0px;text-align:center'><button class='btn btn-sm btn-success' data-target='#demo-lg-modal1' data-toggle='modal' title='Edit' id='sc1'><i class='fa fa-pencil'></i></button><a><button class='btn btn-sm btn-danger del' title='Delete' id='sc2'><i class='fa fa-times' aria-hidden='true'></i></button></a></td>");
//           var sc = $("#c1").val();
//           var amt=$("#c2").val();
//           var fileInput = document.getElementById('img');
//           var filename = fileInput.files[0].name;
//           $.ajax({
//                 url: "admin_uploaddata.php",
//                 method:"POST",
//                 data :{
//
//                   service_catagory :sc,
//                   amount:amt,
//                   file:filename
//
//                   },
//                 success: function(result){
//                   // console.log('RESULT : ' + this);
//                   $('#pre-sc').append(result);
//                   $("#c1").val(" ");
//                   $("#c2").val(" ");
//
//                 }
//
//            });
//         });
//
//   });
// });
//   // district and location add
//   $(document).ready(function(){
//   $("#add-new-loc").on('click',function(){
//     $("#new-loc").css("display","inline");
//     $("#upload-data").on('click',function(){
//     // $("#add-location").append("<tr><th scope='row'>"+$("#loc-name").val()+"</th><th scope='row' id='dname'>"+$("#dis-name").val()+"</th><td style='border-top:0px;text-align:right'><button class='btn btn-sm btn-success' data-target='#demo-lg-modal1' data-toggle='modal' title='Edit' id='sc1'><i class='fa fa-pencil'></i></button><a><button class='btn btn-sm btn-danger del' title='Delete' id='sc2'><i class='fa fa-times' aria-hidden='true'></i></button></a></td>");
//     var loc = $("#loc-name").val();
//     var dis=$("#dis-name").val();
//     $.ajax({
//         url: "admin_uploaddata.php",
//         method:"POST",
//         data :{
//         location:loc,
//         district :dis,
//         },
//         success: function(result){
//         $('#add-location').append(result);
//         $("#loc-name").val(" ");
//
//         // $('#error_uname').text(response);
//         }
//       });
//   });
//   });
//   $("#add-new-dis").on('click',function(){
//     $("#new-dis").css("display","inline");
//     $("#upload").on('click',function(){
//     // $("#add-district").append("<tr><th scope='row'>"+$("#dis").val()+"</th><td style='border-top:0px;text-align:right'><button class='btn btn-sm btn-success' data-target='#demo-lg-modal1' data-toggle='modal' title='Edit' id='sc1'><i class='fa fa-pencil'></i></button><a><button class='btn btn-sm btn-danger del' title='Delete' id='sc2'><i class='fa fa-times' aria-hidden='true'></i></button></a></td>");
//     var district = $("#dis").val();
//           $.ajax({
//                 url: "admin_uploaddata.php",
//                 method:"POST",
//                 data :{
//                   dis :district},
//                 success: function(result){
//                   $("#add-district").append(result);
//                   $("#dis").val(" ");
//                   // $("#c2").reset();
//                 }
//               });
//   });
// });
//
// });
// delete state from db

$(document).on('click','.del',function()
{

  var dist= $(this).closest('tr').find('th:nth-child(1)').text();
  var diste=dist.trim();
  //  var dist= $(this).val();
  //  console.log(dist);
  $(this).closest("tr").remove();
  console.log(diste);
  $.ajax({
    url: "admin_uploaddata.php",
    method:"POST",
    data :{
    diste :diste},
    success: function(result){
      $("#delete-district").append(result);
      // location.reload();
      window.alert(diste+"is now NOT Verified");

    }
  });

});
// add state values
$(document).on('click','.edit',function()
{

  var dist= $(this).closest('tr').find('th:nth-child(1)').text();
  var diste=dist.trim();
  //  var dist= $(this).val();
  //  console.log(dist);
  $(this).closest("tr").remove();
  console.log(diste);
  $.ajax({
    url: "admin_uploaddata.php",
    method:"POST",
    data :{
    loce :diste},
    success: function(result){
      $("#add-district").append(result);
      // location.reload();
      window.alert(diste+"is now  Verified");
                  // $("#dis").val(" ");
    }
  });

});

// delete location


// $(document).on('click','.loc_del',function()
// {
//   var loca= $(this).closest('tr').find('th:nth-child(1)').text();
//   var loce=loca.trim();
//   $(this).closest("tr").remove();
//
//   console.log(loce);
//   $.ajax({
//     url: "admin_uploaddata.php",
//     method:"POST",
//     data :{
//       loce :loce},
//     success: function(result){
//       $("#add-location").append(result);
//                   $("#loc-name").val(" ");
//     }
//   });
//
// });

// Edit Location

// $(document).on('click','.loc_edit',function()
// {
//   $("#new-loc").css("display","inline");
//   var loc= $(this).closest('tr').find('th:nth-child(1)').text();
//   var loca=loc.trim();
//   $("#loc-name").val(loca);
//   $(this).closest("tr").remove();
//   $("#upload-data").on('click',function(){
//     var loc_new=$("#loc-name").val();
//     var dis=$("#dis-name").val();
//     console.log(loc_new);
//
//   $.ajax({
//     url: "admin_uploaddata.php",
//     method:"POST",
//     data :{
//     loc_edit :loc_new,
//     locat:loca,
//     new_dis :dis
//   },
//     success: function(result){
//       $("#add-location").append(result);
//       $("#loc-name").val(" ");
//     }
//   });
//   });
// });
// delete sc

$(document).on('click','.sc_del',function()
{
  var sc= $(this).closest('tr').find('th:nth-child(1)').text();
  var retailer=sc.trim();
  $(this).closest("tr").remove();

  console.log(retailer);
  $.ajax({
    url: "admin_uploaddata.php",
    method:"POST",
    data :{
      retailer :retailer},
    success: function(result){
      $("#del-retailer").append(result);
      // location.reload();
        window.alert(retailer+"is now NOT Verified");
                  // $("#loc-name").val(" ");
    }
  });

});

// Edit SC

// $(document).on('click','.sc_edit',function()
// {
//   $("#new-sc").css("display","inline");
//   var ser_cat= $(this).closest('tr').find('th:nth-child(1)').text();
//   var sc=ser_cat.trim();
//   $("#c1").val(sc);
//   // $(this).closest("tr").remove();
//   $("#sc3").on('click',function(){
//     var sc_new=$("#c1").val();
//     var amt_new=$("#c2").val();
//     console.log(sc_new);
//
//   $.ajax({
//     url: "admin_uploaddata.php",
//     method:"POST",
//     data :{
//     ser :sc_new,
//     old_sc :sc,
//     new_amt:amt_new
//   },
//     success: function(result){
//       $('#pre-sc').append(result);
//       $("#c1").val(" ");
//       $("#c2").val(" ");
//     }
//   });
//   });
// });

// Approve service Providers

$(document).on('click','.retailer_approve',function()
{
  var serPro_name= $(this).closest('tr').find('th:nth-child(1)').text();
  var sc_name=serPro_name.trim();
  $(this).closest("tr").remove();
    console.log(sc_name);

  $.ajax({
    url: "admin_uploaddata.php",
    method:"POST",
    data :{
    retailer_approve :sc_name,

  },
    success: function(response){
      $("#add-retailer").append(response);
      // location.reload();
          window.alert(serPro_name+" is now Verified");

      // $("#c1").val(" ");
      // $("#c2").val(" ");
    }
  });

});


$(document).on('click','.user_del',function()
{
  var serPro_name= $(this).closest('tr').find('th:nth-child(1)').text();
  var sc_name=serPro_name.trim();
  $(this).closest("tr").remove();
    console.log(sc_name);

  $.ajax({
    url: "admin_uploaddata.php",
    method:"POST",
    data :{
    user_del :sc_name,

  },
    success: function(response){
      $("#del-user").append(response);
      // location.reload();
          window.alert(sc_name+" is now no longer can Access");

      // $("#c1").val(" ");
      // $("#c2").val(" ");
    }
  });

});

$(document).on('click','.solved',function()
{
  var serPro_name= $(this).closest('tr').find('th:nth-child(1)').text();
  var sc_name=serPro_name.trim();
  $(this).closest("tr").remove();
    console.log(sc_name);

  $.ajax({
    url: "admin_uploaddata.php",
    method:"POST",
    data :{
    solve :sc_name,

  },
    success: function(response){
      // $("#del-user").append(response);
      // location.reload();
          window.alert("the issuse is now Solved");

      // $("#c1").val(" ");
      // $("#c2").val(" ");
    }
  });

});

$(document).on('click','.user_approve',function()
{
  var serPro_name= $(this).closest('tr').find('th:nth-child(1)').text();
  var sc_name=serPro_name.trim();
  $(this).closest("tr").remove();
    console.log(sc_name);

  $.ajax({
    url: "admin_uploaddata.php",
    method:"POST",
    data :{
    user_approve :sc_name,

  },
    success: function(response){
      // $('#sucess-msg').text(response);
            $("#add-user").append(response);
      // location.reload();
          window.alert(sc_name+" is now have privilage of User Access");

      // $("#c1").val(" ");
      // $("#c2").val(" ");
    }
  });

});
// reject sp sc_reject

$(document).on('click','.retailer_reject',function()
{
  var rej_name= $(this).closest('tr').find('th:nth-child(1)').text();
  var rj_name=rej_name.trim();
  $(this).closest("tr").remove();

    console.log(rj_name);

  $.ajax({
    url: "admin_uploaddata.php",
    method:"POST",
    data :{
    retailer_reject :rj_name,

  },
    success: function(response){
      $("#del-user").append(response);
      // location.reload();
      window.alert(rj_name+" is no Longer Retailer,Now demoted to User");
      // $('#sucess-msg').text(response);

      // $("#c1").val(" ");
      // $("#c2").val(" ");
    }
  });

});

$('#bar').click(function(){
	$(this).toggleClass('open');
  $('#page-content-wrapper ,#sidebar-wrapper,#adminlocation,#admin_sc_management,#retailer_att').toggleClass('toggled');

});


  </script>
  </body>
</html>
