<?php 
	$id = $_GET['id'];
	$timezone  = +7; //(GMT -5:00) EST (U.S. & Canada)
	$wktUpdate = gmdate("Y-m-j H:i:s", time() + 3600*($timezone+date("I")));
	$messagep = "Segera hubungi agent dari properti tesebut dan Miliki properti ini segera ! ";

	$perintah = "UPDATE tb_validate SET message = '$messagep', updated_at = '$wktUpdate', status_validate = '5' WHERE id_validate = '$id'";
	mysqli_query($conn, $perintah);
	header("location:?page=customer&aksi=content");
?>