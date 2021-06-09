<?php
session_start();
//fetch_data.php
$id=$_SESSION['loginid'];
include('../../database/connection.php');

if(isset($_POST["action"]))
{
// $cpu_pow=$_SESSION['cpu_pow'];
	$query = "
		SELECT * FROM smps_tbl where verified=1 and status=1
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
	if(isset($_POST["type"]))
	{
		$power_filter = implode("','", $_POST["power"]);
		$query .= "
		 AND power IN('".$power_filter."')
		";
	}
	if(isset($_POST["sata_count"]))
	{
		$sata_count_filter = implode(",", $_POST["sata_count"]);
		$query .= "
		 AND sata_count IN(".$sata_count_filter.")
		";
	}
	if(isset($_POST["pci_count"]))
	{
		$pci_count_filter = implode(",", $_POST["pci_count"]);
		$query .= "
		 AND pci_count IN(".$pci_count_filter.")
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
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
					<img src="../../project/smps/'. $row['pic'] .'" width="150px" height="150px" >
					<p align="center"><strong>'. $row['name'] .'</strong></p>
					<h4 style="text-align:center;" class="text-danger" >₹ '. $row['price'] .'</h4>
					<p>Manufacture : '. $row['company'].' <br />
					Power : '. $row['power'] .' W<br  />
					CPU Power :'. $row['cpu_pow'] .' <br  />
					MB Power : '. $row['mb_pow'] .' <br  />
					SATA Count : '. $row['sata_count'] .' <br  />
					PCIe Count : '. $row['pci_count'] .' <br  />
					Sold By : '. $row['sold_by'] .'
					<br><br>';
					$sold=$row['sold_by'];
					if($sold==$id)
					{
						$output .= '<i class="fa fa-archive"></i>
						<input type="Submit" name="add" class="btn btn-warning" value="Set Unverified" onclick="one(\''.$row['name'].'\')">';
					}


					$output .= '</center>
				</div>

			</div>
			';
		}
	}
	else
	{

		$output = '<h3>No Data Found</h3>';
	}
	?>
</form>
	<?php
	echo $output;
	// echo $query;
}

?>
