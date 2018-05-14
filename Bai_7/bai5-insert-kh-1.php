<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Nguyễn Văn Thái - 20156445</title>
	
</head>
<body>
	<h1 style="color: red;">Nguyễn Văn Thái - 20156445</h1>
	<h3>Thêm khách hàng</h3>
	<?php
	$id_kh = $_POST["id_kh"];
	$tenkh = $_POST["tenkh"];
	$dienthoai = $_POST["dienthoai"];
	$diachi = $_POST["diachi"];

	$affectrow=0;
	$connect = mysqli_connect('localhost', 'root', '' ,'qlbanhang') or die ("Server disconnect");
	
	mysqli_set_charset($connect, "UTF8");

	$sql="INSERT INTO khachhang(id_kh, tenkh, dienthoai, diachi)";
	$sql .=" VALUES('".$id_kh."','".$tenkh."', '".$dienthoai."', '".$diachi."')";
	$result = mysqli_query($connect, $sql);
	if($result)
	$affectrow = mysqli_affected_rows($connect);
	mysqli_close($connect);
	?>
	Số khách hàng thêm vào <?php echo $affectrow; ?>
</body>
</html>
