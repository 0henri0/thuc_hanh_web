<?php ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
session_start();

$hoTen = "";
$dienThoai = "";
$diaChi = "";

$connect = mysqli_connect("localhost", "root", "", "qlbanhang") or die ("Server disconnect");
mysqli_set_charset($connect, 'UTF8');

if(isset($_POST['update'])){

	$hoTen = $_POST['hoTen'];
	$diaChi = $_POST['diaChi'];
	$dienThoai = $_POST['dienThoai'];

	$sql = "UPDATE nhanvien SET tennv = '".$hoTen."', dienthoai = '".$dienThoai."', diachi = '".$diaChi."' WHERE Id_nv = '".$_SESSION['username']."'";

	if(mysqli_query($connect, $sql)){
		echo "Cập nhật thành công!";

		if($_SESSION['tennv'] != $hoTen){
			unset($_SESSION["tensv"]);
			$_SESSION["tennv"] = $hoTen;
		}
	}
}else{
	if(isset($_SESSION['username'])){
	#echo $_SESSION['username'];
		$username = $_SESSION['username'];

		$query = "SELECT * FROM nhanvien WHERE Id_nv = '".$username."' LIMIT 1";
		$result=mysqli_query($connect, $query);

		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_row($result);
			$hoTen = $row[2];
			$dienThoai = $row[3];
			$diaChi = $row[4];
		}
	}
}

mysqli_close($connect);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Nguyễn Văn Thái - 20156445</title>
</head>
<body>
	<a href="bai1-2.php">Back</a>
	<h1 style="color: red;">Nguyễn Văn Thái - 20156445</h1>
	<form name="form1" method="post" action="bai1-3.php">
		<table width="100%" border="1" align="center">
			<tr style="height: 50px; background-color: gray">
				<td><div align="center">HỌ TÊN</div></td>
				<td><div align="center">ĐỊA CHỈ</div></td>
				<td><div align="center">ĐIỆN THOẠI</div></td>
			</tr>
			<tr style="height: 50px; background-color: yellow">
				<td><div align="center"><input type="text" name="hoTen" value="<?php echo $hoTen; ?>" /></div></td>
				<td><div align="center"><input type="text" name="diaChi" value="<?php echo $diaChi; ?>" /></div></td>
				<td><div align="center"><input type="number" name="dienThoai" value="<?php echo $dienThoai; ?>" /></div></td>
			</tr>
		</table>
		<?php if(isset($_SESSION['username'])){ ?>
		<input type="submit" name="update" value="Update" />
		<?php } ?>
	</form>
	<hr  size="2" align="center" color="#000066" width="600">
</body>
</html>
<?php ob_flush(); ?>
