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
	$MaSV = $_POST["txtMaSV"];
	$connect = mysqli_connect("localhost", "root", "", "qlsinhvien") or die ("Server disconnect");
	mysqli_set_charset($connect, "UTF8");

	$sql = "SELECT * FROM sinhvien WHERE MaSV = '".$MaSV."'";
	$result = mysqli_query($connect,$sql);
	$Username = "";
	$Password = "";
	$HoSV = "";
	$TenSV = "";
	$GioiTinh = "";
	$NgaySinh = "";
	$NoiSinh = "";
	$DiaChi = "";
	$MaKH = "";
	$HocBong = "";
	while ($row = mysqli_fetch_array ($result)){
		$Username = $row['Username'];
		$Password = $row['Password'];
		$HoSV = $row['HoSV'];
		$TenSV = $row['TenSV'];
		$GioiTinh = $row['GioiTinh'];
		$NgaySinh = $row['NgaySinh'];
		$NoiSinh = $row['NoiSinh'];
		$DiaChi = $row['DiaChi'];
		$MaKH = $row['MaKH'];
		$HocBong = $row['HocBong'];
	}

	$sql1 = "SELECT * FROM khoa";
	$khoa = mysqli_query($connect, $sql1);

	mysqli_close($connect);
?>
	<?php if($Username == ""){echo "Không có Mã sinh viên ".$MaSV;
		  }else{ ?>
	<h1 style="color: red;">Nguyễn Văn Thái - 201564458</h1>
	<table>
	<form name="frmPHP" method="post" action="bai5-update-sv-2.php">
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
				<td align="left" >Tên đăng nhập:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="text" name="txtUsername" size="25" required class="textbox" value="<?php echo $Username; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" >Mật khẩu:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="text" name="txtPassword" size="25" required class="textbox" value="<?php echo $Password; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" >Họ:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="text" name="txtHoSV" size="25" required class="textbox" value="<?php echo $HoSV; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" >Tên:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="text" name="txtTenSV" size="25" required class="textbox" value="<?php echo $TenSV; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" >Giới tính:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="text" name="txtGioiTinh" size="25" required class="textbox" value="<?php echo $GioiTinh; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" >Ngày sinh:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="date" name="txtNgaySinh" size="25" required class="textbox" value="<?php echo $NgaySinh; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" >Nơi sinh:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="text" name="txtNoiSinh" size="25" required class="textbox" value="<?php echo $NoiSinh; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" >Địa chỉ:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="text" name="txtDiaChi" size="25" required class="textbox" value="<?php echo $DiaChi; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" >Mã khoa:</td>
			</tr>
			<tr>
				<td>
					<select id="makhoahoc" name="txtMaKH">
						<?php $name = ""; ?>
						<?php   while ($kh = mysqli_fetch_array($khoa)){ ?>
						<?php if($kh['MaKH'] == $MaKH){$name = $kh['TenKhoa']; } ?>
						<option <?php if($kh['MaKH'] == $MaKH){echo "selected";} ?> value="<?php echo $kh['MaKH']; ?>"><?php echo $kh['MaKH']; ?></option> 
						<?php } ?>
					</select>
					<span class="makhoahoc"><?php echo $name; ?></span>
				</td>
			</tr>
			<tr>
				<td align="left" >Học bổng:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="text" name="txtHocBong" size="25" class="textbox" value="<?php echo $HocBong; ?>">
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

	<script>
		$(document).ready(function(){
			$("#makhoahoc").change(function(){
				$.ajax({
					method: "POST",
					data: {id: $(this).val()},
					url: "ajax/getKH.php",
					dataType: 'json',
					success: function(data) {
						$(".makhoahoc").empty();
						$(".makhoahoc").append(data.name);
					}
				});
			});
		});
	</script>
</body>
</html>
