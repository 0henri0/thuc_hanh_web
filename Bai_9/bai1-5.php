<?php ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
session_start();

$maNV = "";
$hoTen = "";
$dienThoai = "";
$diaChi = "";

$connect = mysqli_connect("localhost", "root", "", "qlbanhang") or die ("Server disconnect");
mysqli_set_charset($connect, 'UTF8');

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
		$maNV = $row[0];
	}

	$sql = "SELECT * FROM hoadon WHERE id_nv = '".$maNV."'";
	$hoadon = mysqli_query($connect, $sql);
}

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
				<td><div align="center">HỌ TÊN NHÂN VIÊN</div></td>
				<td><div align="center">MÃ HÓA ĐƠN</div></td>
				<td><div align="center">TÊN KHÁCH HÀNG</div></td>
				<td><div align="center">NGÀY ĐẶT HÀNG</div></td>
				<td><div align="center">NGÀY GIAO HÀNG</div></td>
			</tr>

				<tr style="height: 50px; background-color: yellow">
				<td><div align="center"><input readonly type="text" name="hoTenNV" value="<?php echo $hoTen; ?>" /></div></td>
					<td><div align="center"><input readonly type="text" name="MaHD" value="Nguyễn Văn Thái" /></div></td>
					<td><div align="center"><input readonly type="text" name="tenKH" value="Thắng" /></div></td>
					<td><div align="center"><input readonly type="text" name="ngaydathang" value="20/4/2017" /></div></td>
					<td><div align="center"><input readonly type="text" name="ngaygiaohang" value="21/4/2017" /></div></td>
				</tr>
			</table>
		</form>
		<hr  size="2" align="center" color="#000066" width="600">
	</body>
	</html>
	<?php ob_flush(); ?>
