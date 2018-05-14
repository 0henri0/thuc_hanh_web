<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Trần Trọng Binh - 20155142</title>
</head>
<body>
	<h1 style="color: red;">Trần Trọng Binh - 20155142</h1>
	<h3>Thêm khóa học</h3>
	<?php
	$MaMH = $_POST["txtMaMH"];
	$MaSV = $_POST["txtMaSV"];
	$Diem = $_POST["txtDiem"];
	if($Diem >= 8) $XepLoai = 'Giỏi';
	elseif( $Diem >= 6.5 && $Diem < 8) $XepLoai = 'Khá';
	elseif( $Diem >= 4.5 && $Diem < 6.5) $XepLoai = 'Trung Bình';
	else $XepLoai = 'Yếu';
	$affectrow=0;
	$connect = mysqli_connect("localhost", "root", "", "qlsinhvien") or die ("Server disconnect");
	mysqli_set_charset($connect, "UTF8");

	$sql="INSERT INTO ketqua(MaSV, MaMH, Diem, XepLoai)";
	$sql .=" VALUES('".$MaSV."','".$MaMH."', '".$Diem."', '".$XepLoai."')";
	$result = mysqli_query($connect,$sql);
	if($result)
	$affectrow = mysqli_affected_rows($connect);
	mysqli_close($connect);
	?>
	Số bản ghi kết quả thêm vào <?php echo $affectrow; ?>
	<br />
	<br />
	<a href="bai5-ds-kq.php"> Back</a>
</body>
</html>
