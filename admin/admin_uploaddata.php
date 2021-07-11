<?php
session_start();

// print_r($_POST);
// die();

include('../database/connection.php');
// if(isset($_POST['service_catagory']))
// {
//
// $service=$_POST['service_catagory'];
// $amount=$_POST['amount'];
// $img=$_POST['file'];
//
//
// $check_sc="select * from tbl_services where sc_name='$service'";
// $sc_check_query=mysqli_query($con,$check_sc)or die("$check_sc");
// if (mysqli_num_rows($sc_check_query) > 0)
//     {
//       echo "Service Already Exist";
//     }
//     else
//     {
//         $s=ltrim($service);
//         $sql="INSERT INTO tbl_services(sc_name,is_delete,amount,img)values('$s',1,$amount,'$img')";
//         $sql_query=mysqli_query($con,$sql);
//
//         echo "<tr><th>".$service."</th><th>".$amount."</th><th></th><td style='border-top:0px;text-align:center'><button class='btn btn-sm btn-success sc_edit' data-target='#demo-lg-modal1' data-toggle='modal' title='Edit' id='sc1'><i class='fa fa-pencil'></i></button><a><button class='btn btn-sm btn-danger del' title='Delete' id='sc2'><i class='fa fa-times' aria-hidden='true'></i></button></a></td>";
//
//     }
// }

// location enter

// if(isset($_POST['location']))
// {
//     $location=$_POST['location'];
//     $district=$_POST['district'];
//     $dist="SELECT * FROM tbl_district where district_id=$district and is_delete=1";
//     $dis_query=mysqli_query($con,$dist);
//     while($row=mysqli_fetch_array($dis_query))
//     {
//         $dis=$row['district_name'];
//         $id=$row['district_id'];
//     }
//     $check_loc="select * from tbl_location where location='$location' and district_id='$id'";
//     $check_query=mysqli_query($con,$check_loc);
//     if (mysqli_num_rows($check_query) > 0)
//     {
//       echo "location Already Exist";
//     }
//     else
//     {
//     $loc="INSERT INTO tbl_location(location,is_delete,district_id)values('$location',1,$district)";
//     $loc_query=mysqli_query($con,$loc);
//     echo "<tr><th scope='row'>".$location."</th><th scope='row'>".$dis."</th><td style='border-top:0px;text-align:right'><button class='btn btn-sm btn-success loc_edit' data-target='#demo-lg-modal1' data-toggle='modal' title='Edit' id='sc1'><i class='fa fa-pencil'></i></button><a><button class='btn btn-sm btn-danger loc_del' title='Delete' id='sc2'><i class='fa fa-times' aria-hidden='true'></i></button></a></td>";
//     // echo "$dis";
//     }
// }
//
// // district enter
//
// if(isset($_POST['dis']))
// {
//     $district=$_POST['dis'];
//     $check_dis="select * from tbl_district where district_name='$district'";
//     $dist_query=mysqli_query($con,$check_dis);
//     if (mysqli_num_rows($dist_query) > 0)
//     {
//       echo "District Already Exist";
//     }
//     else
//     {
//     $dis="INSERT INTO tbl_district(district_name,is_delete)values('$district',1)";
//     $dis_query=mysqli_query($con,$dis);
//     echo "<tr><th scope='row'>".$district."</th><td style='border-top:0px;text-align:right'><button class='btn btn-sm btn-success edit' data-target='#demo-lg-modal1' data-toggle='modal' title='Edit' id='sc1'><i class='fa fa-pencil'></i></button><a><button class='btn btn-sm btn-danger del' title='Delete' id='sc2'><i class='fa fa-times' aria-hidden='true'></i></button></a></td>";
//     }
// }
//  delete a district
if(isset($_POST['diste']))
{
    $diste=$_POST['diste'];
    $del="update state set status=0 where StateName ='$diste'";
    $del_query=mysqli_query($con,$del)or die($del);
    echo "<tr><th scope='row'>".$diste."</th><td ><button class='btn btn-sm btn-success edit' ><i class='fa fa-check'></i></button></td>";


}
if(isset($_POST['solve']))
{
    $solve=$_POST['solve'];
    $del="update complaints set status=0 where id ='$solve'";
    $del_query=mysqli_query($con,$del)or die($del);
    // echo "<tr><th scope='row'>".$diste."</th><td ><button class='btn btn-sm btn-success edit' ><i class='fa fa-check'></i></button></td>";
    echo $del;

}

// delete location
if(isset($_POST['loce']))
{
    $loc=$_POST['loce'];
    $del_loc="update state set status=1 where StateName ='$loc'";
    $del_query=mysqli_query($con,$del_loc);
    echo "<tr><th scope='row'>".$loc."</th><td ><button class='btn btn-sm btn-danger edit' ><i class='fa fa-times'></i></button></td>";
    // echo "";
}

if(isset($_POST['retailer']))
{
    $ser=$_POST['retailer'];
    $del_sc="update logintable set status=0 where loginid ='$ser'";
    $sc_query=mysqli_query($con,$del_sc);

    $services1="select name,email,phone,pic from user_login where loginid='$ser'";
    $ser_query1=mysqli_query($con,$services1);
    while($rows=mysqli_fetch_array($ser_query1)){

      $name=$rows['name'];
      $email=$rows['email'];
      $phone=$rows['phone'];
      $pic=$rows['pic'];

    echo "<tr><th scope='row'>".$ser."</th>
    <th scope='row'>".$name."</th><th scope='row'>".$email."</th>
    <th scope='row'>".$phone."</th>
    <th>
      <img src='../images/users/".$pic."' width='60px' height='50px'>

    </th>
    <td>
      <button class='btn btn-sm btn-success btn-inline retailer_approve'>Approve</button>
      <button class='btn btn-sm btn-danger btn-inline retailer_reject'>Reject</button>
    </td>";

  }
}
// Edit district value
// if(isset($_POST['dist_edit']))
// {
//     $dist_edit=$_POST['dist_edit'];
//     $d=$_POST['distee'];
//     $did="SELECT * FROM `tbl_district` WHERE `district_name`='$d' AND `is_delete`=1";
//     $id1=mysqli_query($con,$did);
//     $row=mysqli_fetch_array($id1);
//     $d_id=$row['district_id'];
//     $check_dup="Select * from tbl_district where district_name='$dist_edit'";
//     $dup_query=mysqli_query($con,$check_dup);
//     if(mysqli_num_rows($dup_query)>0)
//     {
//         echo "Cant'insert Already Exist";
//     }
//     else
//     {
//     $edit="UPDATE `tbl_district` SET `district_name`= '$dist_edit' where `district_id`=$d_id AND `is_delete`=1";
//     $edit_query=mysqli_query($con,$edit);
//     echo "<tr><th scope='row'>".$dist_edit."</th><td style='border-top:0px;text-align:right'><button class='btn btn-sm btn-success edit' data-target='#demo-lg-modal1' data-toggle='modal' title='Edit' id='sc1'><i class='fa fa-pencil'></i></button><a><button class='btn btn-sm btn-danger del' title='Delete' id='sc2'><i class='fa fa-times' aria-hidden='true'></i></button></a></td>";
//     // echo $dis;
//     }
//
// }
//
// // Edit Location
// if(isset($_POST['loc_edit']))
// {
//     $location_new=$_POST['loc_edit'];
//     $locat=$_POST['locat'];
//     $new_dis=$_POST['new_dis'];
//     $dis1="SELECT * FROM tbl_district where district_id=$new_dis and is_delete=1";
//     $dis1_query=mysqli_query($con,$dis1);
//     while($row=mysqli_fetch_array($dis1_query))
//     {
//         $dist1=$row['district_name'];
//         $id_dis=$row['district_id'];
//     }
//     $lo="select * from tbl_location where location='$locat' and is_delete=1";
//     $lo_query=mysqli_query($con,$lo);
//     $r=mysqli_fetch_array($lo_query);
//     $l_id=$r['location_id'];
//     $check_loca="Select * from tbl_location where location='$location_new'";
//     $loca_query=mysqli_query($con,$check_loca);
//     if(mysqli_num_rows($loca_query)>0)
//     {
//         echo "Cant'insert Already Exist";
//     }
//     else
//     {
//     $edit_loc="UPDATE `tbl_location` SET `location`= '$location_new',district_id=$id_dis where `location_id`=$l_id AND `is_delete`=1";
//     $edit_loc_query=mysqli_query($con,$edit_loc);
//     echo "<tr><th scope='row'>".$location_new."</th><th scope='row'>".$new_dis."</th><td style='border-top:0px;text-align:right'><button class='btn btn-sm btn-success loc_edit' data-target='#demo-lg-modal1' data-toggle='modal' title='Edit' id='sc1'><i class='fa fa-pencil'></i></button><a><button class='btn btn-sm btn-danger loc_del' title='Delete' id='sc2'><i class='fa fa-times' aria-hidden='true'></i></button></a></td>";
//     // echo $dis;
//     }
//
//
// }
// if(isset($_POST['ser']))
// {
//    $new_sc= $_POST['ser'];
//    $new_amt=$_POST['new_amt'];
//    $old_sc=$_POST['old_sc'];
//    $pre_sc="select * from tbl_services where sc_name='$old_sc' and is_delete=1";
//    $pre_query=mysqli_query($con,$pre_sc);
//    $r=mysqli_fetch_array($pre_query);
//    $sc_id=$r['sc_id'];
//    $check_service="select * from tbl_services where sc_name='$new_sc'";
//     $service_check_query=mysqli_query($con,$check_service);
//     if (mysqli_num_rows($service_check_query) > 0)
//         {
//         echo "Service Already Exist";
//         }
//         else
//         {
//             // $s=ltrim($service);
//             $new_serv="update tbl_services set sc_name='$new_sc',amount='$new_amt' where sc_id=$sc_id";
//             $newsc_query=mysqli_query($con,$new_serv);
//             echo "<tr><th>".$new_sc."</th><th>".$new_amt."</th><td style='border-top:0px;text-align:center'><button class='btn btn-sm btn-success sc_edit' data-target='#demo-lg-modal1' data-toggle='modal' title='Edit' id='sc1'><i class='fa fa-pencil'></i></button><a><button class='btn btn-sm btn-danger sc_del' title='Delete' id='sc2'><i class='fa fa-times' aria-hidden='true'></i></button></a></td>";
//
//         }
// }

// Aprove service Providers

if(isset($_POST['retailer_approve']))
{
    $name=$_POST['retailer_approve'];
    // $login=$_POST['login'];

    $ap="update logintable set status=1 where loginid='$name'";
    $aproval_query=mysqli_query($con,$ap);
    $services1="select name,email,phone,pic from user_login where loginid='$name'";
    $ser_query1=mysqli_query($con,$services1);
    while($rows=mysqli_fetch_array($ser_query1)){

      $name=$rows['name'];
      $email=$rows['email'];
      $phone=$rows['phone'];
      $pic=$rows['pic'];

    echo "<tr><th scope='row'>".$name."</th>
    <th scope='row'>".$name."</th><th scope='row'>".$email."</th>
    <th scope='row'>".$phone."</th>
    <th>
      <img src='../images/users/".$pic."' width='60px' height='50px'>

    </th>
    <td>
    <button class='btn btn-sm btn-danger btn-inline sc_del' ><i class='fa fa-times' aria-hidden='true'></i></button>
</td>";

  }

}
if(isset($_POST['user_approve']))
{
    $name=$_POST['user_approve'];
    // $login=$_POST['login'];
    $ap="update logintable set status=1 where loginid='$name'";
    $aproval_query=mysqli_query($con,$ap);

    $services1="select name,email,phone,pic from user_login where loginid='$name'";
    $ser_query1=mysqli_query($con,$services1);
    while($rows=mysqli_fetch_array($ser_query1)){

      $nam=$rows['name'];
      $email=$rows['email'];
      $phone=$rows['phone'];
      $pic=$rows['pic'];

    echo "<tr><th scope='row'>".$name."</th>
    <th scope='row'>".$nam."</th><th scope='row'>".$email."</th>
    <th scope='row'>".$phone."</th>
    <th>
      <img src='../images/users/".$pic."' width='60px' height='50px'>

    </th>
    <td>
    <button class='btn btn-sm btn-danger btn-inline sc_del' ><i class='fa fa-times' aria-hidden='true'></i></button>
</td>";

}

}
if(isset($_POST['user_del']))
{
    $name=$_POST['user_del'];
    // $login=$_POST['login'];
    $ap="update logintable set status=0 where loginid='$name'";
    $aproval_query=mysqli_query($con,$ap);

    $services1="select name,email,phone,pic from user_login where loginid='$name'";
    $ser_query1=mysqli_query($con,$services1);
    while($rows=mysqli_fetch_array($ser_query1)){

      $name=$rows['name'];
      $email=$rows['email'];
      $phone=$rows['phone'];
      $pic=$rows['pic'];

    echo "<tr><th scope='row'>".$name."</th>
    <th scope='row'>".$name."</th><th scope='row'>".$email."</th>
    <th scope='row'>".$phone."</th>
    <th>
      <img src='../images/users/".$pic."' width='60px' height='50px'>

    </th>
    <td>
    <button class='btn btn-sm btn-success btn-inline sc_del' ><i class='fa fa-check' aria-hidden='true'></i></button>
</td>";

}
// reject Service providers
}
if(isset($_POST['retailer_reject']))
{
    $na=$_POST['retailer_reject'];
    $rej_query=mysqli_query($con,"update logintable set usertype='user' where loginid='$na'");

    $services1="select name,email,phone,pic from user_login where loginid='$na'";
    $ser_query1=mysqli_query($con,$services1);
    while($rows=mysqli_fetch_array($ser_query1)){

      $name=$rows['name'];
      $email=$rows['email'];
      $phone=$rows['phone'];
      $pic=$rows['pic'];

    echo "<tr><th scope='row'>".$na."</th>
    <th scope='row'>".$name."</th><th scope='row'>".$email."</th>
    <th scope='row'>".$phone."</th>
    <th>
      <img src='../images/users/".$pic."' width='60px' height='50px'>

    </th>
    <td>
    <button class='btn btn-sm btn-success btn-inline sc_del' ><i class='fa fa-check' aria-hidden='true'></i></button>
</td>";

  }

}
