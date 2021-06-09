<?php 
	$id = $_GET['id'];
	$perintah = "DELETE FROM tb_validate WHERE id_validate = '$id'";
	mysqli_query($conn, $perintah);
	header("location:?page=customer&aksi=management");
?>