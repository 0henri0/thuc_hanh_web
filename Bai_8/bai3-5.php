<?php ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
session_start();

$mssv = "";
$hoTen = "";

$connect = mysqli_connect('localhost', 'root', '' ,'qlsinhvien') or die ("Server disconnect");

mysqli_set_charset($connect, "UTF8");

if(isset($_SESSION['username'])){
	#echo $_SESSION['username'];
	$username = $_SESSION['username'];
	$tensv = $_SESSION['tensv'];

	$query = "SELECT * FROM SINHVIEN WHERE Username = '".$username."' AND TenSV ='".$tensv."' LIMIT 1";
	$result=mysqli_query($connect, $query);

	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_row($result);
		$mssv = $row[0];
		$hoTen = $row[3]." ".$row[4];
	}

	$sql = "SELECT * FROM ketqua WHERE MaSV = '".$mssv."'";
	$ketqua = mysqli_query($connect, $sql);
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Nguyễn Văn Thái - 20156445</title>
</head>
<body>
	<a href="bai3-2.php">Back</a>
	<h1 style="color: red;">Nguyễn Văn Thái - 20156445</h1>
	<form name="form1" method="post" action="bai3-3.php">
		<table width="100%" border="1" align="center">
			<tr style="height: 50px; background-color: gray">
				<td><div align="center">MSSV</div></td>
				<td><div align="center">HỌ TÊN</div></td>
				<td><div align="center">MÔN HỌC</div></td>
				<td><div align="center">KẾT QUẢ</div></td>
			</tr>
			<tr style="height: 50px; background-color: yellow">
				<td><div align="center"><input readonly type="text" name="mssv" value="20156445" /></div></td>
				<td><div align="center"><input readonly type="text" name="hoTen" value="Nguyễn Văn Thái" /></div></td>
				<td><div align="center"><input readonly type="text" name="tenmh" value="toán" /></div></td>
				<td><div align="center"><input readonly type="text" name="diem" value="9.5" /></div></td>
			</tr>
		</table>
	</form>
	<hr  size="2" align="center" color="#000066" width="600">
</body>
</html>
<?php ob_flush(); ?>
