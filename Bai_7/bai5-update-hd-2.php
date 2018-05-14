<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Nguyễn Văn Thái - 20156445</title>
</head>
<body>
	<h1 style="color: red;">Nguyễn Văn Thái - 20156445</h1>
	<h3>Cập nhật cán bộ</h3>
	<?php
	$id_hd = $_POST["id_hd"];
	$ngaylaphd = $_POST["ngaylaphd"];
	$id_kh = $_POST["id_kh"];
	$id_nv = $_POST["id_nv"];
	$ngaygiaohang = $_POST["ngaygiaohang"];
	$tongtien = $_POST["tongtien"];

	$affectrow=0;
	$connect = mysqli_connect('localhost', 'root', '' ,'qlbanhang') or die ("Server disconnect");
	
	mysqli_set_charset($connect, "UTF8");

	$sql="UPDATE hoadon SET ngaylaphd = '".$ngaylaphd."', ngaygiaohang = '".$ngaygiaohang."', id_kh = '".$id_kh."', id_nv = '".$id_nv."', tongtien = '".$tongtien."' WHERE id_hd = '".$id_hd."'";
	$result = mysqli_query($connect, $sql);
	if($result)
	$affectrow = mysqli_affected_rows($connect);
	mysqli_close($connect);
	?>
	Số hóa đơn cập nhật vào <?php echo $affectrow; ?>
</body>
</html>
