<?php 
	$id = $_GET['id'];
	$timezone  = +7; //(GMT -5:00) EST (U.S. & Canada)
	$wktUpdate = gmdate("Y-m-j H:i:s", time() + 3600*($timezone+date("I")));
	$pesanp = "Berhasil diterima !";
	
	$cekharga = "SELECT * FROM tb_transaction WHERE id_validate = '$id'";
	$query = mysqli_query($conn, $cekharga);
	$data = mysqli_fetch_array($query);
	$id_properties = $data['id_properties'];
	$harga = $data['price_transaction'];
	$id_agent = $data['id_agent'];

	$perintah = "UPDATE tb_validate SET message = '$pesanp', status_validate = '3', updated_at = '$wktUpdate' WHERE id_validate = '$id'";
	$perintah2 = "UPDATE tb_transaction SET status_transaction = '1', updated_at = '$wktUpdate' WHERE id_validate = '$id'";
	$perintah3 = "UPDATE tb_properties SET price = '$harga', status = '2', updated_at = '$wktUpdate' WHERE id_properties = '$id_properties'";
	$perintah4 = "INSERT INTO tb_management_agent (id_agent_management_agent, id_properties_management_agent) VALUES ('$id_agent', '$id_properties')";
	
	mysqli_query($conn, $perintah);
	mysqli_query($conn, $perintah2);
	mysqli_query($conn, $perintah3);
	mysqli_query($conn, $perintah4);

	header("location:?page=owner&aksi=management");
?>