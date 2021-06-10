<?php 
	$id = $_GET['id'];
	$timezone  = +7; //(GMT -5:00) EST (U.S. & Canada)
	$wktUpdate = gmdate("Y-m-j H:i:s", time() + 3600*($timezone+date("I")));
	
	$cekharga = "SELECT * FROM tb_management_agent WHERE id_management_agent = '$id'";
	$query = mysqli_query($conn, $cekharga);
	$data = mysqli_fetch_array($query);
	$id_properties = $data['id_properties'];
	$status_management = $data['status_management_agent'];
	
	if ($status_management == 2) {
		echo " <script>alert('Gagal, Properti ini sudah dibeli oleh customer !');window.location='?page=agent&aksi=management'; </script> ";
	} else {
		$perintah = "UPDATE tb_management_agent SET status_management_agent = '-1', updated_at = '$wktUpdate' WHERE id_management_agent = '$id'";
		$perintah2 = "UPDATE tb_properties SET price = '', status = '1', updated_at = '$wktUpdate' WHERE id_properties = '$id_properties'";
	
		mysqli_query($conn, $perintah);
		mysqli_query($conn, $perintah2);

		header("location:?page=agent&aksi=management");
	}
?>