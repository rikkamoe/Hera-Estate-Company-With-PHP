<?php 
	$id = $_GET['id'];
	$timezone  = +7; //(GMT -5:00) EST (U.S. & Canada)
	$wktUpdate = gmdate("Y-m-j H:i:s", time() + 3600*($timezone+date("I")));

	$cekproperties = "SELECT * FROM tb_management_customer INNER JOIN tb_management_agent ON tb_management_customer.id_management_agent_management_customer = tb_management_agent.id_management_agent WHERE id_management_customer = '$id'";
	$query = mysqli_query($conn, $cekproperties);
	$data = mysqli_fetch_array($query);
	$id_properties = $data['id_properties_management_agent'];

	$perintah = "UPDATE tb_management_customer SET status_management_customer = '-1', updated_at = '$wktUpdate' WHERE id_management_customer = '$id'";
	$perintah2 = "UPDATE tb_properties SET status = '2', updated_at = '$wktUpdate' WHERE id_properties = '$id_properties'";
	
	mysqli_query($conn, $perintah);
	mysqli_query($conn, $perintah2);

	header("location:?page=customer&aksi=management");
?>