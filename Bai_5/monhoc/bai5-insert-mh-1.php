<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Nguyễn Văn Thái - 20156445</title>
</head>
<body>
	<h1 style="color: red;">Nguyễn Văn Thái - 201564458</h1>
	<h3>Thêm môn học</h3>
	<?php
	$MaMH = $_POST["txtMaMH"];
	$TenMH = $_POST["txtTenMH"];
	$SoTiet = $_POST["txtSoTiet"];

	$affectrow=0;
	$connect = mysqli_connect("localhost", "root", "", "qlsinhvien") or die ("Server disconnect");
	mysqli_set_charset($connect, "UTF8");

	$sql="INSERT INTO monhoc(MaMH, TenMH, SoTiet)";
	$sql .=" VALUES('".$MaMH."','".$TenMH."', '".$SoTiet."')";
	$result = mysqli_query($connect,$sql);
	if($result)
	$affectrow = mysqli_affected_rows($connect);
	mysqli_close($connect);
	?>
	Số môn học thêm vào <?php echo $affectrow; ?>
	<br><br>
	<a href="bai5-ds-mh.php"> Back</a>
</body>
</html>
