<?php ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
session_start();

$mssv = "";
$hoTen = "";
$ngaySinh = "";
$diaChi = "";
$hocBong = "";
$maKhoa = "";

$connect = mysqli_connect('localhost', 'root', '' ,'qlsinhvien') or die ("Server disconnect");

mysqli_set_charset($connect, "UTF8");

if(isset($_POST['update'])){

	$mssv = $_POST['mssv'];
	$hoTen = $_POST['hoTen'];
	$ngaySinh = $_POST['ngaySinh'];
	$diaChi = $_POST['diaChi'];
	$hocBong = $_POST['hocBong'];
	$maKhoa = $_POST['maKhoa'];

	$array = explode(" ", $hoTen);

	$ho = "";
	for($i = 0; $i < count($array) - 1; $i += 1){
		$ho .= $array[$i];

		if($i != count($array) - 2){
			$ho .= " ";
		}
	}

	$ten = $array[count($array) - 1];

	$sql = "UPDATE sinhvien SET MaSV = '".$mssv."', HoSV = '".$ho."', TenSV = '".$ten."', NgaySinh = '".$ngaySinh."', DiaChi = '".$diaChi."', HocBong = '".$hocBong."', MaKH = '".$maKhoa."' WHERE Username = '".$_SESSION['username']."'";

	if(mysqli_query($connect, $sql)){
		echo "Cập nhật thành công!";

		if($_SESSION['tensv'] != $ten){
			unset($_SESSION["tensv"]);
			$_SESSION["tensv"] = $ten;
		}
	}
}else{
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
			$ngaySinh = $row[6];
			$diaChi = $row[8];
			$hocBong = $row[10];
			$maKhoa = $row[9];
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
	<a href="bai3-2.php">Back</a>
	<h1 style="color: red;">Nguyễn Văn Thái - 20156445</h1>
	<form name="form1" method="post" action="bai3-3.php">
		<table width="100%" border="1" align="center">
			<tr style="height: 50px; background-color: gray">
				<td><div align="center">MSSV</div></td>
				<td><div align="center">HỌ TÊN</div></td>
				<td><div align="center">NGÀY SINH</div></td>
				<td><div align="center">ĐỊA CHỈ</div></td>
				<td><div align="center">HỌC BỔNG</div></td>
				<td><div align="center">MÃ KHOA</div></td>
			</tr>
			<tr style="height: 50px; background-color: yellow">
				<td><div align="center"><input type="text" name="mssv" value="<?php echo $mssv; ?>" /></div></td>
				<td><div align="center"><input type="text" name="hoTen" value="<?php echo $hoTen; ?>" /></div></td>
				<td><div align="center"><input type="date" name="ngaySinh" value="<?php echo $ngaySinh; ?>" /></div></td>
				<td><div align="center"><input type="text" name="diaChi" value="<?php echo $diaChi; ?>" /></div></td>
				<td><div align="center"><input type="number" name="hocBong" value="<?php echo $hocBong; ?>" /></div></td>
				<td><div align="center"><input type="text" name="maKhoa" value="<?php echo $maKhoa; ?>" /></div></td>
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
