<?php
if(isset($_POST['submit'])){
	header("Location:".$_POST['bao']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 9</title>
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
	<h2>ĐỌC BÁO TRÊN MẠNG</h2>
	<table width="40%">
		<form action="B9.php" method="POST">
			<tr>
				<td>
					Chọn báo muốn đọc:
				</td>
				<td style="text-align: center;">
					<select name="bao">
						<option value="https://tuoitre.vn/">Báo Tuổi Trẻ</option>
						<option value="https://thanhnien.vn/">Báo Thanh Niên</option>
						<option value="https://vnexpress.net/">Viet Nam Express</option>
					</select> 
				</td>
			</tr>
			<tr>
				<td></td>
				<td style="text-align: center">
					<input type="submit" name="submit" value="Đến báo muốn đọc">
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