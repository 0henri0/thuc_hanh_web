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
	$id_hd = $_POST["id_hd"];
	$connect = mysqli_connect('localhost', 'root', '' ,'qlbanhang') or die ("Server disconnect");
	
	mysqli_set_charset($connect, "UTF8");

	$sql = "SELECT * FROM hoadon WHERE id_hd = '".$id_hd."'";
	$result = mysqli_query($connect, $sql);
	$ngaylaphd = "";
	$id_kh = "";
	$id_nv = "";
	$ngaygiaohang = "";
	$tongtien = "";
	while ($row = mysqli_fetch_array ($result)){
		$ngaylaphd = $row['ngaylaphd'];
		$id_kh = $row['id_kh'];
		$id_nv = $row['id_nv'];
		$ngaygiaohang = $row['ngaygiaohang'];
		$tongtien = $row['tongtien'];
	}

	$sql1 = "SELECT * FROM nhanvien";
	$nhanvien = mysqli_query($connect, $sql1);

	$sql2 = "SELECT * FROM khachhang";
	$khachhang = mysqli_query($connect, $sql2);

	mysqli_close($connect);
?>
	<?php if($ngaygiaohang == ""){echo "Không có Mã hóa đơn ".$id_hd;
		  }else{ ?>
	<h1 style="color: red;">Nguyễn Văn Thái - 20156445</h1>
	<table>
	<form name="frmPHP" method="post" action="bai5-update-hd-2.php">
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
					<input type="text" name="id_hd" size="25" required readonly class="textbox" value="<?php echo $id_hd; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" >Ngày lập hóa đơn:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="date" name="ngaylaphd" size="25" required class="textbox" value="<?php echo $ngaylaphd; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" >Mã khách hàng:</td>
			</tr>
			<tr>
				<td align="left">
					<select id="khachhang" name="id_kh">
						<?php $name = ""; ?>
						<?php   while ($kh = mysqli_fetch_array($khachhang)){ ?>
						<?php if($kh['id_kh'] == $id_kh){$name = $kh['tenkh']; } ?>
						<option <?php if($kh['id_kh'] == $id_kh){echo "selected";} ?> value="<?php echo $kh['id_kh']; ?>"><?php echo $kh['id_kh']; ?></option> 
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
						<?php $name1 = ""; ?>
						<?php   while ($nv = mysqli_fetch_array($nhanvien)){ ?>
						<?php if($nv['id_nv'] == $id_nv){$name1 = $nv['tennv']; } ?>
						<option <?php if($nv['id_nv'] == $id_nv){echo "selected";} ?> value="<?php echo $nv['id_nv']; ?>"><?php echo $nv['id_nv']; ?></option> 
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
					<input type="date" name="ngaygiaohang" size="25" required class="textbox" value="<?php echo $ngaygiaohang; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" >Tổng tiền:</td>
			</tr>
			<tr>
				<td align="left">
					<input type="number" name="tongtien" size="25" required class="textbox" value="<?php echo $tongtien; ?>">
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
