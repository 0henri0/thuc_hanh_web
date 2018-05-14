<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Nguyễn Văn Thái - 20156445</title>
</head>
<body>
	<h1 style="color: red;">Nguyễn Văn Thái - 201564458</h1>
	<h3>Xóa sinh viên</h3>
	<?php
	$MaSV = $_POST["txtMaSV"];
	$affectrow=0;
	$connect = mysqli_connect("localhost", "root", "", "qlsinhvien") or die ("Server disconnect");
	mysqli_set_charset($connect, "UTF8");

	$sql1 = "DELETE FROM ketqua WHERE MaSV = '".$MaSV."'";
	$result1 = mysqli_query($connect,$sql1);

	if($result1){
		$sql="DELETE FROM sinhvien WHERE MaSV = '".$MaSV."'";
		$result = mysqli_query($connect,$sql);
		if($result){
			$affectrow = mysqli_affected_rows($connect);
		}

		if($affectrow == 0){
			echo "Xóa thất bại!<br>";
		}
	}else{
		echo "Xóa thất bại<br>";
	}
	mysqli_close($connect);
	?>
	Số sinh viên xóa <?php echo $affectrow; ?>
	<br><br>
	<a href="bai5-ds-sv.php"> Back</a>
</body>
</html>
