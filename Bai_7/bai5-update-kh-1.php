<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Nguyễn Văn Thái - 20156445</title>
	
</head>
<body>
<?php
	$id_kh = $_POST["id_kh"];
	$connect = mysqli_connect('localhost', 'root', '' ,'qlbanhang') or die ("Server disconnect");
	
	mysqli_set_charset($connect, "UTF8");

	$sql = "SELECT * FROM khachhang WHERE id_kh = '".$id_kh."'";
	$result = mysqli_query($connect, $sql);
	$tenkh = "";
	$dienthoai = "";
	$diachi = "";
	while ($row = mysqli_fetch_array ($result)){
		$tenkh = $row['tenkh'];
		$dienthoai = $row['dienthoai'];
		$diachi = $row['diachi'];
	}

	mysqli_close($connect);
?>
	<?php if($tenkh == ""){echo "Không có mã khách hàng ".$id_kh;
		  }else{ ?>
	<h1 style="color: red;">Nguyễn Văn Thái - 20156445</h1>
	<table>
	<form name="frmPHP" method="post" action="bai5-update-kh-2.php">
			<tr>
				<td align="left" class="content-sm"><b>
					Please enter all field
				</b></td>
			</tr>
			<tr>
				<td align="left" >Mã khách hàng:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="text" name="id_kh" size="25" required readonly class="textbox" value="<?php echo $id_kh; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" >Tên khách hàng:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="text" name="tenkh" size="25" maxlength = "50" required class="textbox" value="<?php echo $tenkh; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" >Điện thoại:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="number" name="dienthoai" size="25" maxlenght = "12" required class="textbox" value="<?php echo $dienthoai; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" >Địa chỉ:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="text" name="diachi" size="25" maxlength="50" required class="textbox" value="<?php echo $diachi; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" valign="top"><br>
					<input type="submit" value="Submit" class="button">
					<input type="reset" value="Reset" class="button">
				</td>
			</tr>
		</form>
	</table>
	<?php } ?>
</body>
</html>
