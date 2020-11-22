<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='retailer') {
 header('location: ../login.php');
 }
 $loginid=$_SESSION['loginid'];
$con=mysqli_connect("localhost","root","","bulid");



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
$row_s = mysqli_num_rows($counts_query);


// total number of employee
$count_emp="select * from logintable where usertype='retailer' and status=0";
$emp_query=mysqli_query($con,$count_emp);
$row_emp = mysqli_num_rows($emp_query);

// total number of Complaints
$count_comp="select * from Complaints where status=1";
$comp_query=mysqli_query($con,$count_comp);
$row_comp = mysqli_num_rows($comp_query);

// total number of Orders
$count_total_order="select * from ordertbl";
$Total_order_query=mysqli_query($con,$count_total_order);
$row_total = mysqli_num_rows($Total_order_query);

// total number of new Orders
$count_total_order="select * from ordertbl where status=1";
$Total_order_query=mysqli_query($con,$count_total_order);
$row_neworder = mysqli_num_rows($Total_order_query);

// total number of new prebulid sys
$count_total_order="select * from prebuilt_tbl";
$Total_order_query=mysqli_query($con,$count_total_order);
$row_pre = mysqli_num_rows($Total_order_query);

// Insert Image
if(isset($_POST['insert'])){
  $pic=$_FILES['myImage']['name'];
  $target_dir = "images/";
  $target_path=$target_dir.$pic;
  move_uploaded_file($_FILES['myImage']['tmp_name'],$target_path);
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
        <title>Admin Index</title>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	      <!--fontawesome-->
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="../css/admin.css">
        <script src="../js/sidebar.js"></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
        <script src='https://cdn.jsdelivr.net/jquery.cloudinary/1.0.18/jquery.cloudinary.js' type='text/javascript'></script>
        <script src="//widget.cloudinary.com/global/all.js" type="text/javascript"></script>
  </head>


  <body>

        <!-- Sidebar wrapper -->
  <div id="wrapper">
    <div class="overlay"></div>

        <!-- Sidebar -->
        <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation" >
       <div class="simplebar-content" style="padding: 0px;">
				<a class="sidebar-brand" href="admin.php">
          <i class="fas fa-cogs"></i><span class="align-middle" style="padding-left:5px;">BulidNgine</span>
        </a>

				 <ul class="navbar-nav align-self-stretch">

        <li class="sidebar-header">Admin Control</li>
	       <li class=""><a class="nav-link text-left active"  href="#stats" onclick="adminhome()">Home
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
											<li><a href="#delete_state" onclick="del_state()">Delete State</a></li>
											<li><a href="#delete_district" onclick="del_district()">Delete district</a></li>
										</ul>
									</div>
								</div>

							</div>
						</div>
		     </div>
		  </div>
		  </li>


          <li class="">
            <a class="nav-link text-left active" href="#retailer_att" onclick="retailer_att()"> Admin</a>
            </li>

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
          <form class="d-none d-sm-inline-block form-inline navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light " placeholder="Search for..." aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
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
									<span class="indicator" id="circle">
                    <?php
                  if($row_s==0)
                  {
                    echo "<script> $(#circle).css('display','none');</script>";
                  }
                  else
                  {
                    echo $row_s;


                  ?>
                </div>
                </span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
                  <?php echo $row_s;
                  }
                  ?> new notifications
								</div>
								<div class="list-group">
									<a href="#retailer_att" class="list-group-item">
										<div class="row no-gutters align-items-center">

											<div class="col-12">
                        <div class="text-dark"><table><?php


                        while($d=mysqli_fetch_array($counts_query))
                        {

                           $n=$d['loginid'];
                           // $sp_na="select * from tbl_serviceproviders where login_id=$logid";
                           // $ser_query=mysqli_query($con,$sp_na);
                           //  while($spr=mysqli_fetch_array($ser_query))
                           //  {
                           //    $n=$spr['sp_name'];
                           //  }
                          ?><tr><?php
                          echo $n." sends you an aproval Request<br>";
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

								</div>
								<!-- <div class="dropdown-menu-footer">
									<a href="#servicepro" class="text-muted">Show all notifications</a>
								</div> -->
							</div>





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


<span id="sucess-msg"></span>
        <!-- End of Topbar -->
        <div id="rowr" style="padding-top:50px;">

        </div>
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
                        <h5 class="card-title mb-4">Complaints</h5>
                        <h1 class="display-5 mt-1 mb-3"><?php echo $row_comp;?></h1>

                      </div>
                    </div>

                  </div>
                  <div class="col-sm-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title mb-4">New Prebluid systems</h5>
                        <h1 class="display-5 mt-1 mb-3"><?php echo $row_pre;?></h1>

                      </div>
                    </div>
                  </div>


                    </div>

        </div>

        </div>
        <!-- /.container-fluid -->


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
  <button class="btn btn-primary" data-target="#demo-lg-modalSMSAll" data-toggle="modal" id="add-new-dis">Add New</button>
  <!-- </div> -->
  <div class="row">
  <div class="col-12">
      <table class="table table-bordered" id="add-district" style="width: 800px; margin-left :40px;">
        <thead>
          <tr>
            <th scope="col">District</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php
                $sql="SELECT * FROM tbl_district where is_delete=1";
                $sql_query=mysqli_query($con,$sql);
                while($data=mysqli_fetch_array($sql_query))
                {
                  $dis_id=$data['district_id'];
              ?>
          <tr>
            <th scope="row">
             <?php

               echo $data['district_name'];
             ?>
            </th>
            <td style="border-top:0px;text-align:right;">
                        <button class="btn btn-sm btn-success btn-inline edit" data-target="#demo-lg-modal1" data-toggle="modal" title="Edit"><i class="fa fa-pencil"></i></button><a>
                        <button class="btn btn-sm btn-danger btn-inline del" title="Delete"><i class="fa fa-times" aria-hidden="true"></i></button></a><a>
                        </a></td>
          </tr>
         <?php
             }
         ?>

        </tbody>
      </table>
    </div>
  </div>
  <table class="table table-bordered" id="new-dis" style="display:none;margin-left :250px;">
            <thead>
                    <tr>
                        <th>District</th>
                        <th>Actions</th>
                    </tr>
                    <tbody>
                    <tr>
                        <td><input type="text" class="form-control" required="" id="dis"></input></td>
                        <!-- <td><input type="text" class="form-control" required="" id="c2"></input></td> -->
                        <td style="border-top:0px;">
                        <!-- <button class="btn btn-sm btn-success" data-target="#demo-lg-modal1" data-toggle="modal" title="Edit" id="edit"><i class="fa fa-pencil"></i></button><a>
                        <button class="btn btn-sm btn-danger del" title="Delete" id="del"><i class="fa fa-times" aria-hidden="true"></i></button></a><a> -->
                        <button class="btn btn-sm btn-primary" style="padding-top: 3px; padding" id="upload" title="Upload/View data"><i class="fa fa-upload"></i></button>
                        </a></td>

                    </tr>
                </thead>
            </table>
       </div>
    </div>
<br>
            <!-- Location Management -->
<div id="delete_district" style="display: none;">
<button class="btn btn-primary" data-target="#demo-lg-modalSMSAll" data-toggle="modal" id="add-new-loc" style="margin-left:30px;">Add New</button>
  <!-- </div> -->
  <div class="row">
  <div class="col-12">
      <table class="table table-bordered" id="add-location" style="width: 800px; margin-left :40px;">
        <thead>
          <tr>
            <th scope="col">Location</th>
            <th scope="col">District</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php
                $sql="SELECT * FROM tbl_location where is_delete=1";
                $sql_query=mysqli_query($con,$sql);
                while($data=mysqli_fetch_array($sql_query))
                {
                  $dis_id=$data['district_id'];

              ?>
          <tr>
            <th scope="row">
             <?php
               echo $data['location'];

             ?>
            </th>
           <th>
             <?php
               $district="SELECT * FROM tbl_district where district_id=$dis_id and is_delete=1";
               $dis_query=mysqli_query($con,$district);
               while($row=mysqli_fetch_array($dis_query))
               {
                 echo $row['district_name'];
               }
             ?>
           </th>
            <td style="border-top:0px;text-align:right;">
              <button class="btn btn-sm btn-success btn-inline loc_edit" data-target="#demo-lg-modal1" data-toggle="modal" title="Edit"><i class="fa fa-pencil"></i></button><a>
              <button class="btn btn-sm btn-danger btn-inline loc_del" title="Delete"><i class="fa fa-times" aria-hidden="true"></i></button></a><a>
               </a>
              </td>
          </tr>
         <?php
             }
         ?>

        </tbody>
      </table>

  <!-- add new location  text field-->
  <table class="table table-bordered" id="new-loc" style="display:none;margin-left :250px;">
            <thead>
                    <tr>
                        <th>Location</th>
                        <th>District</th>
                        <th>Actions</th>
                    </tr>
                    <tbody>
                    <tr>
                    <th><input type="text" class="form-control" required="" id="loc-name"></input></th>
                    <th><div class="dropdown">
                    <select class="btn dropdown-toggle caret-dropdown-menu" type="button" data-toggle="dropdown" name="dist" id="dis-name" required="">
                    <span class="caret-dropdown-menu"></span>
                    <option value="">-Select District-</option>
                        <?php

                            $sql="SELECT * FROM tbl_district WHERE is_delete=1";
                            $sql_result=mysqli_query($con,$sql);
                           while($data_dis=mysqli_fetch_array($sql_result))
                           {
                               echo "<option value='".$data_dis['district_id']."'>" .$data_dis['district_name'] ."</option>";
                           }

                            ?>
                        </th>

                        <td style="border-top:0px;text-align:right">
                        <!-- <button class="btn btn-sm btn-success" data-target="#demo-lg-modal1" data-toggle="modal" title="Edit" id="edit-data"><i class="fa fa-pencil"></i></button><a>
                        <button class="btn btn-sm btn-danger loc_del" title="Delete" id="del-data"><i class="fa fa-times" aria-hidden="true"></i></button></a><a> -->
                        <button class="btn btn-sm btn-primary" style="padding-top: 3px; padding" id="upload-data" title="Upload/View data"><i class="fa fa-upload"></i></button>
                        </a></td>

                    </tr>
                </thead>
            </table>
   </div>
</div>
</div>

<!-- #admin location control -->

<!--  admin service category management-->



<div id="admin_sc_management">
<div class="container col-sm-12" style="display: inline;" id="retailer">

    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">

            </div>
            <table class="table table-bordered" id="pre-sc">
                <thead>
                    <tr>
                        <!-- <th>slno</th> -->
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
                            $services="select loginid from logintable where usertype='retailer'";
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
                        <button class="btn btn-sm btn-success btn-inline sc_edit" data-target="#demo-lg-modal1" onclick="" data-toggle="modal" title="Edit"><i class="fa fa-pencil"></i></button><a>
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

 <table class="table table-bordered" id="new-sc" style="display : none;margin-left :50px;">
            <thead>
                    <tr>
                        <th>Service Category</th>
                        <th>Amount</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                    <tbody>
                    <tr>
                      <form action="#" name="upload" method="post" enctype="multipart/form-data">
                        <td><input type="text" class="form-control" required="" id="c1"></input></td>
                        <td><input type="text" class="form-control" required="" id="c2"></input></td>
                        <td><input type="file" name="myImage" id="img" accept="image/*" /></td>
                        <td style="border-top:0px;text-align:right">
                        <!-- <button class="btn btn-sm btn-success" data-target="#demo-lg-modal1" data-toggle="modal" title="Edit" id="sc1"><i class="fa fa-pencil"></i></button><a>
                        <button class="btn btn-sm btn-danger" title="Delete" id="sc2"><i class="fa fa-times" aria-hidden="true"></i></button></a><a> -->
                        <button class="btn btn-sm btn-primary" type="submit" style="padding-top: 3px; padding" id="sc3" name="insert" title="Upload/View data"><i class="fa fa-upload"></i></button>
                        </a></td>
                      </form>
                    </tr>
                </thead>
            </table>

            </div>
      </div>
</div>

<!-- Admin sc management -->

<!-- SP Details -->
<span id="Notification_msg"></span>
<div id="retailer_att" style="display:inline">
<table class="table table-bordered">
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
  if($row_s==0)
  {
    echo "<script> $('#retailer_att').css('display','none');</script>";
    echo "<script> $('#Notification_msg').text(' No new Notification');</script>";

  }
  else
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
  <button class="btn btn-sm btn-success btn-inline sc_approve" data-target="#demo-lg-modal1" onclick="" data-toggle="modal" title="Approve">Approve</button><a>
  <button class="btn btn-sm btn-danger btn-inline sc_reject" onclick=""  title="Delete">Reject</button></a><a>
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
<!-- SP details -->


<!-- Employee Details -->
<div id="orders" style="display:none;">
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
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php
  $employe="select orderid,loginid,name,sold_by,category,total,pic FROM ordertbl where status=1";
  $employee_query=mysqli_query($con,$employe);
  while($r=mysqli_fetch_array($employee_query))
  {
    $username=$r['loginid'];
    $orderid=$r['orderid'];
    $name=$r['name'];
    $sold_by=$r['sold_by'];
    $cateory=$r['category'];
    $price=$r['total'];
    $img=$r['pic'];

  ?>
<tr>
<th><?php echo $orderid; ?></th>
<th><?php echo $name;?></th>
<th><?php echo $username;?></th>
<th><?php echo $cateory;?></th>
<th><?php echo $sold_by;?></th>
<th><?php echo $price;?></th>
<th><img src="../cart/<?php echo $img;?>.jpg" alt="" width="50px" height="60px"> </th>
<td>
  <button class="btn btn-sm btn-success btn-inline sc_edit" data-target="#demo-lg-modal1" onclick="" data-toggle="modal" title="Edit"><i class="fa fa-pencil"></i></button><a>
  <button class="btn btn-sm btn-danger btn-inline sc_del" onclick=""  title="Delete"><i class="fa fa-times" aria-hidden="true"></i></button></a><a>
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
<table class="table table-bordered">
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
  <button class="btn btn-sm btn-success btn-inline sc_edit" data-target="#demo-lg-modal1" onclick="" data-toggle="modal" title="Edit"><i class="fa fa-pencil"></i></button><a>
  <button class="btn btn-sm btn-danger btn-inline sc_del" onclick=""  title="Delete"><i class="fa fa-times" aria-hidden="true"></i></button></a><a>
</td>
</tr>
<?php
  }
?>

</table>
</div>
<?php
include('../php/footer.php');
 ?>
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
$(document).ready(function(){


  $("#add-new").on('click',function(){
      $("#new-sc").css("display","inline");
      $("#sc3").on('click',function(){
          // $("#pre-sc").append("<tr><td>"+$("#c1").val()+"</td><td>"+$("#c2").val()+"</td><td style='border-top:0px;text-align:center'><button class='btn btn-sm btn-success' data-target='#demo-lg-modal1' data-toggle='modal' title='Edit' id='sc1'><i class='fa fa-pencil'></i></button><a><button class='btn btn-sm btn-danger del' title='Delete' id='sc2'><i class='fa fa-times' aria-hidden='true'></i></button></a></td>");
          var sc = $("#c1").val();
          var amt=$("#c2").val();

          var fileInput = document.getElementById('img');
          var filename = fileInput.files[0].name;

        // var fd = new FormData(this);
        // var files = $('#img')[0].files[0];
        //    fd.append('file',files);
        //    console.log(fd);

          $.ajax({
                url: "admin_uploaddata.php",
                method:"POST",
                data :{

                  service_catagory :sc,
                  amount:amt,
                  file:filename

                  },
                success: function(result){
                  // console.log('RESULT : ' + this);
                  $('#pre-sc').append(result);
                  $("#c1").val(" ");
                  $("#c2").val(" ");

                }

           });
        });

  });
});
  // district and location add
  $(document).ready(function(){
  $("#add-new-loc").on('click',function(){
    $("#new-loc").css("display","inline");
    $("#upload-data").on('click',function(){
    // $("#add-location").append("<tr><th scope='row'>"+$("#loc-name").val()+"</th><th scope='row' id='dname'>"+$("#dis-name").val()+"</th><td style='border-top:0px;text-align:right'><button class='btn btn-sm btn-success' data-target='#demo-lg-modal1' data-toggle='modal' title='Edit' id='sc1'><i class='fa fa-pencil'></i></button><a><button class='btn btn-sm btn-danger del' title='Delete' id='sc2'><i class='fa fa-times' aria-hidden='true'></i></button></a></td>");
    var loc = $("#loc-name").val();
    var dis=$("#dis-name").val();
    $.ajax({
        url: "admin_uploaddata.php",
        method:"POST",
        data :{
        location:loc,
        district :dis,
        },
        success: function(result){
        $('#add-location').append(result);
        $("#loc-name").val(" ");

        // $('#error_uname').text(response);
        }
      });
  });
  });
  $("#add-new-dis").on('click',function(){
    $("#new-dis").css("display","inline");
    $("#upload").on('click',function(){
    // $("#add-district").append("<tr><th scope='row'>"+$("#dis").val()+"</th><td style='border-top:0px;text-align:right'><button class='btn btn-sm btn-success' data-target='#demo-lg-modal1' data-toggle='modal' title='Edit' id='sc1'><i class='fa fa-pencil'></i></button><a><button class='btn btn-sm btn-danger del' title='Delete' id='sc2'><i class='fa fa-times' aria-hidden='true'></i></button></a></td>");
    var district = $("#dis").val();
          $.ajax({
                url: "admin_uploaddata.php",
                method:"POST",
                data :{
                  dis :district},
                success: function(result){
                  $("#add-district").append(result);
                  $("#dis").val(" ");
                  // $("#c2").reset();
                }
              });
  });
});

});
// delete district from db

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
      $("#add-district").append(result);
                  // $("#dis").val(" ");
    }
  });

});
// Edit District values
$(document).on('click','.edit',function()
{
  $("#new-dis").css("display","inline");
  var dis= $(this).closest('tr').find('th:nth-child(1)').text();
  var dist=dis.trim();
  $("#dis").val(dist);
  $(this).closest("tr").remove();
  $("#upload").on('click',function(){
    var dist_new=$("#dis").val();
    console.log(dist_new);

  $.ajax({
    url: "admin_uploaddata.php",
    method:"POST",
    data :{
    dist_edit :dist_new,
    distee:dist
  },
    success: function(result){
      $("#add-district").append(result);
      $("#dis").val(" ");
    }
  });
  });
});

// delete location


$(document).on('click','.loc_del',function()
{
  var loca= $(this).closest('tr').find('th:nth-child(1)').text();
  var loce=loca.trim();
  $(this).closest("tr").remove();

  console.log(loce);
  $.ajax({
    url: "admin_uploaddata.php",
    method:"POST",
    data :{
      loce :loce},
    success: function(result){
      $("#add-location").append(result);
                  $("#loc-name").val(" ");
    }
  });

});

// Edit Location

$(document).on('click','.loc_edit',function()
{
  $("#new-loc").css("display","inline");
  var loc= $(this).closest('tr').find('th:nth-child(1)').text();
  var loca=loc.trim();
  $("#loc-name").val(loca);
  $(this).closest("tr").remove();
  $("#upload-data").on('click',function(){
    var loc_new=$("#loc-name").val();
    var dis=$("#dis-name").val();
    console.log(loc_new);

  $.ajax({
    url: "admin_uploaddata.php",
    method:"POST",
    data :{
    loc_edit :loc_new,
    locat:loca,
    new_dis :dis
  },
    success: function(result){
      $("#add-location").append(result);
      $("#loc-name").val(" ");
    }
  });
  });
});
// delete sc
$(document).on('click','.sc_del',function()
{
  var sc= $(this).closest('tr').find('th:nth-child(1)').text();
  var ser_cat=sc.trimStart();
  $(this).closest("tr").remove();

  console.log(ser_cat);
  $.ajax({
    url: "admin_uploaddata.php",
    method:"POST",
    data :{
      ser_cat :ser_cat},
    success: function(result){
      $("#pre-sc").append(result);
                  // $("#loc-name").val(" ");
    }
  });

});

// Edit SC

$(document).on('click','.sc_edit',function()
{
  $("#new-sc").css("display","inline");
  var ser_cat= $(this).closest('tr').find('th:nth-child(1)').text();
  var sc=ser_cat.trim();
  $("#c1").val(sc);
  $(this).closest("tr").remove();
  $("#sc3").on('click',function(){
    var sc_new=$("#c1").val();
    var amt_new=$("#c2").val();
    console.log(sc_new);

  $.ajax({
    url: "admin_uploaddata.php",
    method:"POST",
    data :{
    ser :sc_new,
    old_sc :sc,
    new_amt:amt_new
  },
    success: function(result){
      $('#pre-sc').append(result);
      $("#c1").val(" ");
      $("#c2").val(" ");
    }
  });
  });
});

// Approve service Providers

$(document).on('click','.sc_approve',function()
{
  var serPro_name= $(this).closest('tr').find('th:nth-child(1)').text();
  var sc_name=serPro_name.trim();
  $(this).closest("tr").remove();
  var login=<?php echo $_SESSION['lid']; ?>;
    console.log(sc_name);

  $.ajax({
    url: "admin_uploaddata.php",
    method:"POST",
    data :{
    ser_name :sc_name,
    login :login,
  },
    success: function(response){
      $('#sucess-msg').text(response);
      // $("#c1").val(" ");
      // $("#c2").val(" ");
    }
  });

});

// reject sp sc_reject

$(document).on('click','.sc_reject',function()
{
  var rej_name= $(this).closest('tr').find('th:nth-child(1)').text();
  var rj_name=rej_name.trim();
  $(this).closest("tr").remove();
  var login=<?php echo $_SESSION['lid']; ?>;
    console.log(rj_name);

  $.ajax({
    url: "admin_uploaddata.php",
    method:"POST",
    data :{
    reject :rj_name,
    login :login,
  },
    success: function(response){
      $('#sucess-msg').text(response);
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
