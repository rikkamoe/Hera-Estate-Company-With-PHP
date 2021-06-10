<?php 
	$id = $_GET['id'];
	$perintah = "SELECT * FROM tb_properties WHERE id_properties = '$id'";
	$query = mysqli_query($conn, $perintah);
	$data = mysqli_fetch_array($query);

	$status = $data['status'];

	if ($status == 3){
		echo " <script>alert('Gagal, Properti ini sudah dibeli oleh customer !');window.location='?page=owner&aksi=management'; </script> ";
	} else if ($status == 2) {
		echo " <script>alert('Gagal, Properti ini sudah dibeli oleh customer !');window.location='?page=owner&aksi=management'; </script> ";
	} else {
		$perintah2 = "DELETE FROM tb_properties WHERE id_properties = '$id'";
		mysqli_query($conn, $perintah2);
		header("location:?page=owner&aksi=management");
	}
?>