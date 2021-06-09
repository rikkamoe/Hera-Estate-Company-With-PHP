<?php 
	$timezone  = +7; //(GMT -5:00) EST (U.S. & Canada)
	$wktUpdate = gmdate("Y-m-j H:i:s", time() + 3600*($timezone+date("I")));
	$id = $_GET['id'];
	$perintah = "UPDATE tb_properties SET status = '1', updated_at = '$wktUpdate' WHERE id_properties = '$id'";
	mysqli_query($conn, $perintah);
	header("location:?page=owner&aksi=content");
?>