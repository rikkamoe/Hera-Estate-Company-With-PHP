<?php 
	$id = $_GET['id'];
	$timezone  = +7; //(GMT -5:00) EST (U.S. & Canada)
	$wktUpdate = gmdate("Y-m-j H:i:s", time() + 3600*($timezone+date("I")));
	$pesanp = "Agent menolak transaksi properti ini !";

	$perintah = "UPDATE tb_validate SET message = '$pesanp', status_validate = '-5', updated_at = '$wktUpdate' WHERE id_validate = '$id'";
	
	mysqli_query($conn, $perintah);

	header("location:?page=agent&aksi=management");
?>