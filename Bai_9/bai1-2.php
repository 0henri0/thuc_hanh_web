<?php ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Nguyễn Văn Thái - 20156445</title>
</head>
<body>
	<h1 style="color: red;">Nguyễn Văn Thái - 20156445</h1>
	<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td width="800" height="37"  align="center" valign="middle" bgcolor="#FFFFCC" style="font-size:18px; color:#FF0000 ">

				<?php
				#echo $_SESSION["tensv"];
				if(isset($_SESSION["tennv"]))
				{
					echo "Xin chào: ".$_SESSION["tennv"];
					echo "<br>";
					echo "<a href='bai1-4.php'>Đăng xuất</a>";
				}	
				else	{
					echo "Bạn đã đăng xuất";
					echo "<br>";
					echo "<a href='bai1-1.php'>Đăng nhập</a>";
				}
				?>
			</td>
		</tr>
		<tr>
			<td height="49" valign="top"><form name="form1" method="post" action="">
				<a href="#"><div id="ht" name="b"></div></a>	
				<div align="center">
					<input type="button" name="Button" value="Sửa thông tin cá nhân" onClick="javascript:window.open('bai1-3.php','_self')">
					<input type="button" name="Button" value="Xem thông tin hóa đơn" onClick="javascript:window.open('bai1-5.php','_self')">
					<input type="button" name="Button" value="Đăng xuất" onClick="javascript:window.open('bai1-4.php','_self')">
				</div>
			</form></td>
		</tr>
		<tr>
			<td height="346">&nbsp;</td>
		</tr>
	</table>
</body>
</html>
<?php ob_flush(); ?>
