<?php
if(isset($_POST['submit'])){
	if($_POST['hk1'] == '' || $_POST['hk2'] == ''){
		echo "<script>  alert('Vui lòng nhập đầy đủ thông tin!!!');</script>";
	}elseif(isset($_POST['hk1']) && isset($_POST['hk2'])){
		$hk1 = $_POST['hk1'];
		$hk2 = $_POST['hk2'];
		$tb = round(($hk1 + $hk2 * 2)/3, 2);
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
	<title>Bài 6</title>
	<style>
		body{
			color: blue;
			margin-top: 100px;
			background-color: #dedede;
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
	<h2>KẾT QUẢ HỌC TẬP</h2>
	<table width="40%">
		<form action="B6.php" method="POST">
			<tr>
				<td>Điểm HK1: </td>
				<td>
					<?php
						if(isset($hk1)) {
							?>
							<input type="number" name="hk1" value="<?=$hk1?>">
							<?php
						}else{
							?>
							<input type="number" name="hk1" value="" placeholder="Nhập điểm hk1">
							<?php
						}
					?>
				</td>
			</tr>
			<tr>
				<td>Điểm HK2: </td>
				<td>
					<?php
						if(isset($hk2)) {
							?>
							<input type="number" name="hk2" value="<?=$hk2?>">
							<?php
						}else{
							?>
							<input type="number" name="hk2" value="" placeholder="Nhập điểm hk2">
							<?php
						}
					?>
				</td>
			</tr>
			<tr>
				<td>
					Điểm TB:
				</td>
				<td>
					<input type="text" value="<?php if(isset($tb)) { echo($tb);}?>" name="kq" disabled="true">
				</td>
			</tr>
			<tr>
				<td>
					Kết quả:
				</td>
				<td>
					<input type="text" value="<?php
					if(isset($tb)){
						if($tb >= 5){ echo "Được lên lớp";}else{ echo "Ở lại lớp";}
					}
					?>" name="kq" disabled="true">
				</td>
			</tr>
			<tr>
				<td>
					Xếp loại học lực:
				</td>
				<td>
					<input type="text" value="<?php
					if(isset($tb)){
						if($tb >= 8){ echo "Giỏi";}elseif($tb > 6.5 && $tb < 8){ echo "Khá";}elseif($tb >= 5 && $tb < 6.5){ echo "Trung Bình";}else{echo "Yếu";}
					}
					?>" name="xeploai" disabled="true">
				</td>
			</tr>
			<tr><td></td><td></td></tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Xem KQ">
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