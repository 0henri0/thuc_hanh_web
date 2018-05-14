<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Nguyễn Văn Thái - 20156445</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 style="color: red;">Nguyễn Văn Thái - 20156445</h1>
	<h3>Xóa khách hàng</h3>
	<?php
	$id_kh = $_POST["id_kh"];
	$affectrow=0;
	$connect = mysqli_connect('localhost', 'root', '' ,'qlbanhang') or die ("Server disconnect");
	
	mysqli_set_charset($connect, "UTF8");

	$sql1 = "DELETE FROM khachhang WHERE id_kh = '".$id_kh."'";
	$result1 = mysqli_query($connect, $sql1);

	if($result1){
		$affectrow = mysqli_affected_rows($connect);
	}else{
		echo "Xóa thất bại<br>";
	}
	mysqli_close($connect);
	?>
	Số khách hàng xóa <?php echo $affectrow; ?>

</body>
</html>
