<?php
	$id = $_POST['id'];
	$connect = mysqli_connect("localhost", "root", "", "qlsinhvien") or die ("Server disconnect");
	mysqli_set_charset($connect, "UTF8");

	$sql = "SELECT * FROM sinhvien WHERE MaSV = '".$id."'";

	$result = mysqli_query($connect,$sql);
	$firstname = "";
	$name = "";
	$count = mysqli_num_rows($result);

	if($count > 0){
		while ($row = mysqli_fetch_array($result)) {
			$name = $row['TenSV'];
			$firstname = $row['HoSV'];
			break;
		}
	}

	$return = $firstname." ".$name;
	echo json_encode(array('name' => $return));
?>