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
	$connect = mysqli_connect('localhost', 'root', '' ,'qlbanhang') or die ("Server disconnect");
	
	mysqli_set_charset($connect, "UTF8");
	$sql1 = "SELECT * FROM nhanvien";
	$nhanvien = mysqli_query($connect, $sql1);

	$sql2 = "SELECT * FROM khachhang";
	$khachhang = mysqli_query($connect, $sql2);

	mysqli_close($connect);
	?>
	<h1 style="color: red;">Nguyễn Văn Thái - 20156445</h1>
	<table>
	<form name="frmPHP" method="post" action="bai5-insert-hd-1.php">
			<tr>
				<td align="left" class="content-sm"><b>
					Please enter all field
				</b></td>
			</tr>
			<tr>
				<td align="left" >Mã hóa đơn:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="text" name="id_hd" size="25" required class="textbox">
				</td>
			</tr>
			<tr>
				<td align="left" >Ngày lập hóa đơn:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="date" name="ngaylaphd" size="25" required class="textbox">
				</td>
			</tr>
			<tr>
				<td align="left" >Mã khách hàng:</td>
			</tr>
			<tr>
				<td align="left">
					<select id="khachhang" name="id_kh">
						<?php $i = 0; ?>
						<?php $name = ""; ?>
						<?php   while ($kh = mysqli_fetch_array($khachhang)){ ?>
						<?php if($i == 0){$i++; $name = $kh['tenkh']; } ?>
						<option value="<?php echo $kh['id_kh']; ?>"><?php echo $kh['id_kh']; ?></option> 
						<?php } ?>
					</select>
					<span class="khachhang"><?php echo $name; ?></span>
				</td>
			</tr>
			<tr>
				<td align="left" >Mã nhân viên:</td>
			</tr>
			<tr>
				<td align="left">
					<select id="nhanvien" name="id_nv">
						<?php $i1 = 0; ?>
						<?php $name1 = ""; ?>
						<?php   while ($nv = mysqli_fetch_array($nhanvien)){ ?>
						<?php if($i1 == 0){$i1++; $name1 = $nv['tennv']; } ?>
						<option value="<?php echo $nv['id_nv']; ?>"><?php echo $nv['id_nv']; ?></option> 
						<?php } ?>
					</select>
					<span class="nhanvien"><?php echo $name1; ?></span>
				</td>
			</tr>
			<tr>
				<td align="left" >Ngày giao hàng:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="date" name="ngaygiaohang" size="25" required class="textbox">
				</td>
			</tr>
			<tr>
				<td align="left" >Tổng tiền:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="number" name="tongtien" size="25" required class="textbox">
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

	<script>

		$(document).ready(function(){
			$("#khachhang").change(function(){
				$.ajax({
					method: "POST",
					data: {id: $(this).val()},
					url: "ajax/getKH.php",
					dataType: 'json',
					success: function(data) {
						$(".khachhang").empty();
						$(".khachhang").append(data.name);
					}
				});
			});

			$("#nhanvien").change(function(){
				$.ajax({
					method: "POST",
					data: {id: $(this).val()},
					url: "ajax/getNV.php",
					dataType: 'json',
					success: function(data) {
						$(".nhanvien").empty();
						$(".nhanvien").append(data.name);
					}
				});
			});
		});
	</script>
</body>
</html>
