<?php

//fetch_data.php

include('../../database/connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM mothertbl where verified=1 and status=1 and verified =1
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	if(isset($_POST["company"]))
	{
		$company_filter = implode("','", $_POST["company"]);
		$query .= "
		 AND company IN('".$company_filter."')
		";
	}
	if(isset($_POST["purpose"]))
	{
		$purpose_filter = implode("','", $_POST["purpose"]);
		$query .= "
		 AND purpose IN('".$purpose_filter."')
		";
	}
	if(isset($_POST["socket"]))
	{
		$socket_filter = implode("','", $_POST["socket"]);
		$query .= "
		 AND socket IN('".$socket_filter."')
		";
	}
	if(isset($_POST["ram_type"]))
	{
		$ram_filter = implode("','", $_POST["ram_type"]);
		$query .= "
		 AND product_ram IN('".$ram_filter."')
		";
	}
	if(isset($_POST["max_ram"]))
	{
		$max_filter = implode("','", $_POST["max_ram"]);
		$query .= "
		 AND max_ram IN('".$max_filter."')
		";
	}
	if(isset($_POST["m2_count"]))
	{
		$m2_filter = implode("','", $_POST["m2_count"]);
		$query .= "
		 AND m2_count IN('".$m2_filter."')
		";
	}
	$query .= "order by `price` ";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-sm-4 col-lg-3 col-md-3">
			<center>
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:600 px;">
					<img src="../../project/mother/'. $row['pic'] .'" width="150px" height="150px" >
					<p align="center"><strong>'. $row['name'] .'</strong></p>
					<h4 style="text-align:center;" class="text-danger" >₹ '. $row['price'] .'</h4>
					<p>Socket : '. $row['socket'].' <br />
					Chipset : '. $row['chipset'] .' <br  />
					CPU Power : '. $row['cpu_pow'] .' Pin<br  />
					MB Power : '. $row['mb_pow'] .' Pin<br  />
					RAM Type : '. $row['ram_type'] .' <br />
					RAM Count : '. $row['ram_count'] .' Nos<br />
					Max RAM : '. $row['max_ram'] .' GB<br />
					PCIe Count : '. $row['pcie_count'] .' Nos <br />
					SATA Count : '. $row['sata_count'] .' Nos <br />
					M.2 Count : '. $row['m2_count'] .' Nos <br />
					Max freq : '. $row['max_freq'] .' Mhz <br />
					Purpose : '. $row['purpose'] .'  </p>
					<br>
					<div>

					<input type="button" id="add'.$row['name'].'" class="btn btn-primary" value="Add to Cart +" onclick="one(\''.$row['name'].'\')">
					<input type="text" id="total'.$row['name'].'" name="total" width="50px" class="texte dis" >
					<input type="button" id="plus'.$row['name'].'" name="pluse" class="pluminus dis" value="+" onclick="plusw(\''.$row['name'].'\')">
					<input type="button" id="minus'.$row['name'].'" name="minuse" class="pluminus dis" value="-" onclick="minusw(\''.$row['name'].'\')">
</div>
					</center>
				</div>

			</div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}

	echo $output;
	// echo $query;
}
if (isset($_POST['name'])) {

	$query .= "select * from ordertbl where name='".$_POST['name']."' and loginid='"
	.$_POST['user'];
 	$statement = $connect->prepare($query);
 	$statement->execute();
 	$result = $statement->fetchAll();
 	$total_row = $statement->rowCount();
	if($total_row>0){

	$query = "update ordertbl set qty= ".$_POST['value']." where loginid='".
	$_POST['user']."' and name='".$_POST['name']."' and set limit 1";
	$statement = $connect->prepare($query);
	$statement->execute();
}
else{
	$query .= "insert into ordertbl(`loginid`,`name`,`category`,``)";
 	$statement = $connect->prepare($query);
 	$statement->execute();

}
	// code...
}

?>
