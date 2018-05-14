<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Nguyễn Văn Thái - 20156445</title>
	
</head>
<body>
	<h1 style="color: red;">Nguyễn Văn Thái - 20156445</h1>
	<h3>Cập nhật sản phẩm</h3>
	<?php
	$txtId_sp = $_POST["txtId_sp"];
	$txtTensp = $_POST["txtTensp"];
	$txtDongia = $_POST["txtDongia"];
	$affectrow=0;
	$link = mysqli_connect ('localhost', 'root', '' ,'qlbanhang') or die("Không kết nối được MySQL Database");
	
	mysqli_set_charset($link, "UTF8");
	$sql="UPDATE sanpham SET tensanpham = '".$txtTensp."', dongia = '".$txtDongia."' WHERE id_sp = '".$txtId_sp."'";
	$result = mysqli_query($link, $sql);
	if($result){
		$affectrow = mysqli_affected_rows($link);
	}
	mysqli_close($link);
	?>
	Số sản phẩm cập nhật là <?= $affectrow?>
</body>
</html>
