<?php ob_start(); //sử dụng cache ?> 

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Nguyễn Văn Thái - 20156445</title>
	<style type="text/css">
		div{font-size:18px; color:#FF0000}
	</style>
	
</head>
<body>
	<h1 style="color: red;">Nguyễn Văn Thái - 20156445</h1>
	<form name="form1" method="post" action="bai1-1.php">
		<table width="800" border="1" align="center">
			<tr>
				<td colspan="2"><div align="center">ĐĂNG NHẬP</div></td>
			</tr>
			<tr>
				<td width="394"><div align="right">Mã số nhân viên:</div></td>
				<td width="390"><input type="text" name="username"></td>
			</tr>
			<tr>
				<td width="394"><div align="right">Mật khẩu:</div></td>
				<td width="390"><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="2"><div align="center">
					<input type="submit" name="Submit" value="Đăng Nhập">
				</div></td>
			</tr>
			<!-- <tr>
				<td colspan="2"><div align="center" id="tbao">
				</div></td>
			</tr> -->
		</table>
	</form>
	<hr  size="2" align="center" color="#000066" width="600">
	<?php
	if(isset($_POST["Submit"])){
		if($_POST["username"])
		{	
			$username = $_POST["username"];	
		//Ket noi den MySQL
			$connect = mysqli_connect("localhost", "root", "", "qlbanhang") or die ("Server disconnect");
			mysqli_set_charset($connect, 'UTF8');
		//Thuc hien cau truy van
			$query = "SELECT * FROM nhanvien WHERE Id_nv = '".$_POST['username']."' AND Password ='" . $_POST["password"] . "' LIMIT 1";
			$result=mysqli_query($connect ,$query);

			if(mysqli_num_rows($result)>0)
			{	
			//Dang nhap thanh cong luu ten sinh vien vao session
				$row = mysqli_fetch_row($result);
				print_r($row);
				$tennv=$row[2];
				$_SESSION["username"]=$username;
				$_SESSION["tennv"]=$tennv;
				#echo $_SESSION["tensv"];
				#die();
				header("Location:bai1-2.php");
			}
			else
			{
				echo "<div align=center >Đăng nhập không thành công!<div>";
			}
			mysqli_close($connect);
		}
	}
	?>
</body>
</html>
<?php ob_flush(); ?>
