<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Nguyễn Văn Thái - 20156445</title>
</head>
<body>
<?php
	$MaSV = $_POST['txtMaSV'];
	$MaMH = $_POST["txtMaMH"];
	$connect = mysqli_connect("localhost", "root", "", "qlsinhvien") or die ("Server disconnect");
	mysqli_set_charset($connect, "UTF8");

	$sql = "SELECT * FROM ketqua WHERE MaSV = '".$MaSV."' AND MaMH = '".$MaMH."'";
	$result = mysqli_query($connect,$sql);
	$Diem = "";
	while ($row = mysqli_fetch_array ($result)){
		$Diem = $row['Diem'];
	}
	mysqli_close($connect);
?>
	<?php if($Diem == ""){echo "Không tồn tại kết quả cho Mã sinh viên ".$MaSV." và Mã môn học".$MaMH;
		  }else{ ?>
	<h1 style="color: red;">Nguyễn Văn Thái - 20156445</h1>
	<table>
	<form name="frmPHP" method="post" action="bai5-update-kq-2.php">
			<tr>
				<td align="left" class="content-sm"><b>
					Please enter all field
				</b></td>
			</tr>
			<tr>
				<td align="left" >Mã sinh viên:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="text" name="txtMaSV" size="25" required readonly class="textbox" value="<?php echo $MaSV; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" >Mã môn học:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="text" name="txtMaMH" size="25" required readonly class="textbox" value="<?php echo $MaMH; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" >Điểm:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="text" name="txtDiem" size="25" required class="textbox" value="<?php echo $Diem; ?>">
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
