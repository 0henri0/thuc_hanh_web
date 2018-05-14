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

	$contain = "";
	$tenMH = "";
	$sql = "SELECT * FROM ketqua WHERE MaSV = '".$id."'";
	$result = mysqli_query($connect,$sql);
	$count = mysqli_num_rows($result);
	$i = 0;
	if($count > 0){
		while ($row = mysqli_fetch_array($result)) {
			if($i == 0){
				$i += 1;
				$sql = "SELECT * FROM monhoc WHERE MaMH = '".$row['MaMH']."'";
				$s = mysqli_query($connect,$sql);
				while ($r = mysqli_fetch_array($s)) {
					$tenMH = $r['TenMH'];
					break;
				}
			}
			$contain .= "<option value='".$row['MaMH']."'>".$row['MaMH']."</option>";
		}
	}

	echo json_encode(array('name' => $return, 'contain' => $contain, 'tenMH' => $tenMH));
?>