<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Nguyễn Văn Thái - 20156445</title>
</head>
<body>
	<h2 style="color: red;">Nguyễn Văn Thái - 20156445</h2>
	<h3>Cập nhật khóa học</h3>
	<?php
	$txtID = $_POST["txtID"];
	$txtName = $_POST["txtName"];
	$affectrow=0;
	$connect = mysqli_connect("localhost", "root", "", "qlsinhvien") or die ("Server disconnect");
	mysqli_set_charset($connect, "UTF8");

	$sql="UPDATE khoa set TenKhoa='";
	$sql .=$txtName."' WHERE MaKH='".$txtID."'";
	$result = mysqli_query($connect,$sql);
	if($result){
		$affectrow = mysqli_affected_rows($connect);
	}

	if($affectrow == 0){
		echo "Cập nhật thất bại!<br>";
	}
	mysqli_close($connect);
	?>
	Số khóa học cập nhật <?php echo $affectrow; ?>
	<br><br>
	<a href="bai1.php"> Back</a>
</body>
</html>
