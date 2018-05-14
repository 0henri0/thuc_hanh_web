<?php
define('PI', '3.14');
if(isset($_POST['submit'])){
	if($_POST['bankinh'] == ''){
		echo "<script>  alert('Vui lòng nhập bán kính!!!'); window.history.go(-1);</script>";
	}elseif(isset($_POST['bankinh'])){
		$bankinh = $_POST['bankinh'];
		$dientich = PI*$_POST['bankinh']*$_POST['bankinh'];
		$chuvi = 2*PI*$_POST['bankinh'];
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
	<title>Bài 4</title>
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
	<h2>DIỆN TÍCH VÀ CHU VI HÌNH TRÒN</h2>
	<table width="40%">
		<form action="B4.php" method="POST">
			<tr>
				<td>Bán kính: </td>
				<td>
					<?php
						if(isset($bankinh)) {
							?>
							<input type="number" name="bankinh" value="<?=$bankinh?>">
							<?php
						}else{
							?>
							<input type="number" name="bankinh" value="" placeholder="Nhập bán kính">
							<?php
						}
					?>
				</td>
			</tr>
			<tr>
				<td>Diện tích: </td>
				<td>
					<input type="text" value=" <?php if(isset($dientich)) { echo($dientich);}?>">
				</td>
			</tr>
			<tr>
				<td>Chu vi: </td>
				<td>
					<input type="text" value=" <?php if(isset($chuvi)) { echo($chuvi);}?>">
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