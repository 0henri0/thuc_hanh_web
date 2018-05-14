<?php
	$id = $_POST['id'];
	$connect = mysqli_connect('localhost', 'root', '' ,'qlbanhang') or die ("Server disconnect");
	
	mysqli_set_charset($connect, "UTF8");

	$sql = "SELECT * FROM nhanvien WHERE id_nv = '".$id."'";

	$result = mysqli_query($connect, $sql);
	$name = "";
	$count = mysqli_num_rows($result);

	if($count > 0){
		while ($row = mysqli_fetch_array($result)) {
			$name = $row['tennv'];
			break;
		}
	}

	echo json_encode(array('name' => $name));
?>