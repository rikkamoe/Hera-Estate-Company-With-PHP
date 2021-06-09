<?php 
	$id = $_GET['id'];
	$perintah = "DELETE FROM tb_properties WHERE id_properties = '$id'";
	mysqli_query($conn, $perintah);
	header("location:?page=owner&aksi=management");
?>