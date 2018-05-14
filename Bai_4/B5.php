<?php
define('dongia', '2000');
if(isset($_POST['submit'])){
	if($_POST['cu'] == '' || $_POST['moi'] == '' || $_POST['ten'] == ''){
		echo "<script>  alert('Vui lòng nhập đầy đủ thông tin!!!');</script>";
	}elseif ($_POST['cu'] > $_POST['moi']) {
		echo "<script>  alert('chỉ số mới phải lớn hơn chỉ số cũ!!!');</script>";
	} elseif(isset($_POST['cu']) && isset($_POST['moi'])){
		$cu = $_POST['cu'];
		$moi = $_POST['moi'];
		$ten = $_POST['ten'];
		$tien = ($moi - $cu)*dongia;
	}
}
if(isset($_POST['reset'])){
	echo "<script>window.location.href = window.location.href;</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 5</title>
	<style>
		body{
			color: blue;
			margin-top: 100px;
		}
		h2{
			text-align: center;
		}
		table{
			margin: 0 auto;
			padding: 20px;
			border:3px solid blue ;
		}
		table td{
			padding: 7px;
		}
		table tr:first-child{
			color: #B90707;
		}
		table tr td:first-child{
			text-align: right;
		}
		a {
			color: #B712B1;
		}
	</style>
</head>
<body>
	<h2>THANH TOÁN TIỀN ĐIỆN</h2>
	<table width="40%">
		<form action="" method="POST">
			<tr>
				<td>
					Tên chủ hộ:
				</td>
				<td>
					<?php
						if(isset($ten)) {
						?>
						<input type="text" name="ten" value="<?=$ten?>">
						<?php
						}else{
						?>
						<input type="text" value="" name="ten" placeholder="Nhập tên chủ hộ">
						<?php
						}
					?>
					
				</td>
			</tr>
			<tr>
				<td>Chỉ số cũ: </td>
				<td>
					<?php
						if(isset($cu)) {
							?>
							<input type="number" name="cu" value="<?=$cu?>"> (Kw)
							<?php
						}else{
							?>
							<input type="number" name="cu" value="" placeholder="Nhập chi số cũ"> (Kw)
							<?php
						}
					?>
				</td>
			</tr>
			<tr>
				<td>Chỉ số mới: </td>
				<td>
					<?php
						if(isset($moi)) {
							?>
							<input type="number" name="moi" value="<?=$moi?>"> (Kw)
							<?php
						}else{
							?>
							<input type="number" name="moi" value="" placeholder="Nhập chỉ số mới"> (Kw)
							<?php
						}
					?>
				</td>
			</tr>
			<tr>
				<td>Đơn giá: </td>
				<td>
					<input type="number" name="dongia" value="<?=dongia?>" disabled="true"> (VNĐ)		
				</td>
			</tr>
			<tr>
				<td>Số tiền thanh toán: </td>
				<td>
					<input type="text" name="tien" value=" <?php if(isset($tien)) { echo($tien);}?>" disabled="true"> (VNĐ)
				</td>
			</tr>
			<tr><td></td><td></td></tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Tính">
					<input type="submit" name="reset" value="Reset">
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><b><mark>Nguyễn Văn Thái - 20156445</mark></b></td>
			</tr>
		</form>	
	</table>
</body>
</html>