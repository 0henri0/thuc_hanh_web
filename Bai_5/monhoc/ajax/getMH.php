<?php
	$id = $_POST['id'];
	$connect = mysqli_connect("localhost", "root", "", "qlsinhvien") or die ("Server disconnect");
	mysqli_set_charset($connect, "UTF8");

	$sql = "SELECT * FROM monhoc WHERE MaMH = '".$id."'";

	$result = mysqli_query($connect,$sql);
	$name = "";
	$count = mysqli_num_rows($result);

	if($count > 0){
		while ($row = mysqli_fetch_array($result)) {
			$name = $row['TenMH'];
			break;
		}
	}

	echo json_encode(array('name' => $name));
?>