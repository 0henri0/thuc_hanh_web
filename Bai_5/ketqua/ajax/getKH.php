<?php
	$id = $_POST['id'];
	$connect = mysqli_connect("localhost", "root", "", "qlsinhvien") or die ("Server disconnect");
	mysqli_set_charset($connect, "UTF8");

	$sql = "SELECT * FROM khoa WHERE MaKH = '".$id."'";

	$result = mysqli_query($connect,$sql);
	$name = "";
	$count = mysqli_num_rows($result);

	if($count > 0){
		while ($row = mysqli_fetch_array($result)) {
			$name = $row['TenKhoa'];
			break;
		}
	}

	echo json_encode(array('name' => $name));
?>