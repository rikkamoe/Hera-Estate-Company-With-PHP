<?php 
	$id = $_GET['id'];
	$timezone  = +7; //(GMT -5:00) EST (U.S. & Canada)
	$wktUpdate = gmdate("Y-m-j H:i:s", time() + 3600*($timezone+date("I")));
	$messagep = "Persetujuan ini ditolak karena alasan tertentu !";

	$perintah = "UPDATE tb_validate SET message = '$messagep', status_validate = '-1', updated_at = '$wktUpdate' WHERE id_validate = '$id'";
	mysqli_query($conn, $perintah);
	header("location:?page=agent&aksi=content");
?>