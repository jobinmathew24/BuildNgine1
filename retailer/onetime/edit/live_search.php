<?php
$search=$_POST['search'];
if ($search=="") {
die("");
}

include('../../../database/connection.php');

$sql="(select name,pic from mothertbl where name like '%{$search}%')
union (select name,pic from cpu_tbl where name like '%{$search}%')
union (select name,pic from cpu_fan_tbl where name like '%{$search}%')
union (select name,pic from ram_tbl where name like '%{$search}%')
union (select name,image as pic from gpu_tbl where name like '%{$search}%')
union (select name,pic from memory_tbl where name like '%{$search}%')
union (select name,pic from smps_tbl where name like '%{$search}%')
union (select name,pic from live_search where name like '%{$search}%')
union (select name,pic from cabinet_tbl where name like '%{$search}%')  LIMIT 5";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result) > 0 ){
  $output = "<table border='0' style='color:black;background-color:white;' class='table'>
              ";

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr>
                <td align='center'><img src='../../../search/{$row["pic"]}' width='40px'><a href='../../find.php?name={$row['name']}'>{$row["name"]} </a></td></tr>";
              }
    $output .= "</table>";

    mysqli_close($con);

    echo $output;
}else{

  echo "<h6>No Data Found</h6>";
}

 ?>
