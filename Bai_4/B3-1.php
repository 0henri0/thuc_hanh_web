<?php
	if($_POST['somot'] == '' || $_POST['sohai'] == ''){
		echo "<script>  alert('Vui lòng đầy đủ dữ liệu!!!'); window.history.go(-1);</script>";
	} elseif($_POST['pheptinh'] == "Chia" && $_POST['sohai'] == "0"){
		echo "<script>  alert('Số chia phải khác 0!!!'); window.history.go(-1);</script>";
	} elseif ($_POST['pheptinh'] == "Chia" && $_POST['sohai'] != "0") {
		$ketqua = round($_POST['somot']/$_POST['sohai'], 2); 
	} elseif ($_POST['pheptinh'] == "Cộng") {
		$ketqua = $_POST['somot'] + $_POST['sohai']; 
	} elseif ($_POST['pheptinh'] == "Trừ") {
		$ketqua = $_POST['somot'] - $_POST['sohai']; 
	} elseif ($_POST['pheptinh'] == "Nhân") {
		$ketqua = $_POST['somot'] * $_POST['sohai']; 
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 3</title>
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
	<h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
	<table width="40%">
		<tr>
			<td>Chọn phép tính: </td>
			<td> 
				<input type="text" value=" <?= $_POST['pheptinh']?>" name="pheptinh">
			</td>
		</tr>
		<tr>
			<td>Số thứ nhất: </td>
			<td>
				<input type="text" value=" <?=$_POST['somot']?>">
			</td>
		</tr>
		<tr>
			<td>Số thứ hai: </td>
			<td>
				<input type="text" value=" <?=$_POST['sohai']?>">
			</td>
		</tr>
		<tr>
			<td>Kết quả: </td>
			<td>
				<input type="text" value=" <?=$ketqua?>">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<a href="B3.php"><i>Quay lại trang trước</i></a>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><b><mark>Nguyễn Văn Thái - 20156445</mark></b></td>
		</tr>	
	</table>
</body>
</html>