<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Nguyễn Văn Thái - 20156445</title>
</head>
<body>
	<h1 style="color: red;">Nguyễn Văn Thái - 201564458</h1>
	<h3>Thêm khóa học</h3>
	<?php
	$MaSV = $_POST["txtMaSV"];
	$Username = $_POST["txtUsername"];
	$Password = $_POST["txtPassword"];
	$HoSV = $_POST["txtHoSV"];
	$TenSV = $_POST["txtTenSV"];
	$GioiTinh = $_POST["txtGioiTinh"];
	$NgaySinh = $_POST["txtNgaySinh"];
	$NoiSinh = $_POST["txtNoiSinh"];
	$DiaChi = $_POST["txtDiaChi"];
	$MaKH = $_POST["txtMaKH"];
	$HocBong = $_POST["txtHocBong"];

	$affectrow=0;
	$connect = mysqli_connect("localhost", "root", "", "qlsinhvien") or die ("Server disconnect");
	mysqli_set_charset($connect, "UTF8");

	$sql="UPDATE sinhvien SET Username = '".$Username."', Password = '".$Password."', HoSV = '".$HoSV."', TenSV = '".$TenSV."', GioiTinh = '".$GioiTinh."', NgaySinh = '".$NgaySinh."', NoiSinh = '".$NoiSinh."', DiaChi = '".$DiaChi."', MaKH = '".$MaKH."', HocBong = '".$HocBong."' WHERE MaSV = '".$MaSV."'";
	$result = mysqli_query($connect,$sql);
	if($result)
	$affectrow = mysqli_affected_rows($connect);
	mysqli_close($connect);
	?>
	Số sinh viên cập nhật vào <?php echo $affectrow; ?>
	<br>
	<br>
	<a href="bai5-ds-sv.php"> Back</a>
</body>
</html>
