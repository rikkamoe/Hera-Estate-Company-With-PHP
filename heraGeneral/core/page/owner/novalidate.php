<?php 
	$id = $_GET['id'];
	$timezone  = +7; //(GMT -5:00) EST (U.S. & Canada)
	$wktUpdate = gmdate("Y-m-j H:i:s", time() + 3600*($timezone+date("I")));
	$pesanp = "Owner menolak tawaran harga tersebut !";

	$perintah = "UPDATE tb_validate SET message = '$pesanp', status_validate = '-2', updated_at = '$wktUpdate' WHERE id_validate = '$id'";
	$perintah2 = "UPDATE tb_transaction SET status_transaction = '-1', updated_at = '$wktUpdate' WHERE id_validate = '$id'";
	
	mysqli_query($conn, $perintah);
	mysqli_query($conn, $perintah2);

	header("location:?page=owner&aksi=management");
?>