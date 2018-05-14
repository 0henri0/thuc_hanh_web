<?php
function Nhuan($nam){
	if($nam % 4 == 0){
		if($nam % 100 == 0 && $nam % 400 != 0) return false;
		return true;
	}
	return false;
}

function ngayTrongThang($thang, $nam){
	if($thang == 4 || $thang == 6 || $thang == 9 || $thang == 11){
		return 30;
	}	
	else if($thang == 2){
		if(Nhuan($nam)) return 29;
		else return 28;
	}
	return 31;
}

if(isset($_POST['submit'])){
	if($_POST['thang'] == '' || $_POST['nam'] == ''){
		echo "<script>  alert('Vui lòng nhập đầy đủ thông tin!!!');</script>";
	}elseif(isset($_POST['thang']) && isset($_POST['nam'])){
		$thang = $_POST['thang'];
		$nam = $_POST['nam'];
		$ngay = ngayTrongThang($thang, $nam);
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
	<title>Bài 7</title>
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
	<h2>TÍNH NGÀY TRONG THÁNG</h2>
	<table width="40%">
		<form action="B7.php" method="POST">
			<tr>
				<td>
					Tháng/năm:
				</td>
				<td style="text-align: center;">
					<select name="thang">
						<?php
							for ($i = 1; $i <= 12; $i++) {
								print("<option>$i</option>");
							}
						?>
					</select> /
					<select name="nam">
						<?php
							for ($i = date("Y"); $i >= 0; $i--) { 
								print("<option>$i</option>");
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td colspan="2" style="text-align: center">
					<input type="submit" name="submit" value="Tính số ngày">
					<input type="submit" name="reset" value="Reset">
				</td>
			</tr>
			<tr>
				<td></td>
				<td colspan="2" style="text-align: center;">
					<input type="text" name="ngay" value="<?php if(isset($thang) && isset($nam)) echo "Tháng $thang năm $nam có $ngay ngày";?>" size="30" disabled="true">		
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