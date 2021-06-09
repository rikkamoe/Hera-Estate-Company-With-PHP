<?php 
	$id = $_GET['id'];
	$timezone  = +7; //(GMT -5:00) EST (U.S. & Canada)
	$wktUpdate = gmdate("Y-m-j H:i:s", time() + 3600*($timezone+date("I")));
	$pesanp = "Berhasil diterima !";
	
	$cekproperti = "SELECT * FROM tb_validate WHERE id_validate = '$id'";
	$query = mysqli_query($conn, $cekproperti);
	$data = mysqli_fetch_array($query);
	$id_properties = $data['id_properties'];
	$id_agent = $data['id_agent'];
	$id_customer = $data['id_customer'];

	$cekmanagement = "SELECT * FROM tb_management_agent WHERE id_agent_management_agent = '$id_agent' AND id_properties_management_agent = '$id_properties'";
	$query2 = mysqli_query($conn, $cekmanagement);
	$data2 = mysqli_fetch_array($query2);
	$management = $data2['id_management_agent'];

	$perintah = "UPDATE tb_validate SET message = '$pesanp', status_validate = '6', updated_at = '$wktUpdate' WHERE id_validate = '$id'";
	$perintah2 = "UPDATE tb_properties SET status = '3', updated_at = '$wktUpdate' WHERE id_properties = '$id_properties'";
	$perintah3 = "INSERT INTO tb_management_customer (id_management_agent_management_customer, id_customer_management_customer) VALUES ('$management', '$id_customer')";
	$perintah4 = "UPDATE tb_management_agent SET status_management_agent = '2', updated_at = '$wktUpdate' WHERE id_agent_management_agent = '$id_agent' AND id_properties_management_agent = '$id_properties'";
	
	mysqli_query($conn, $perintah);
	mysqli_query($conn, $perintah2);
	mysqli_query($conn, $perintah3);
	mysqli_query($conn, $perintah4);

	header("location:?page=agent&aksi=management");
?>