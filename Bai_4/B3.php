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
	</style>
</head>
<body>
	<h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
	<table width="40%">
		<form action="B3-1.php" method="POST">
			<tr>
				<td>Chọn phép tính: </td>
				<td> 
					<input type="radio" value="Cộng" name="pheptinh" checked> Cộng
					<input type="radio" value="Trừ" name="pheptinh"> Trừ
					<input type="radio" value="Nhân" name="pheptinh"> Nhân
					<input type="radio" value="Chia" name="pheptinh"> Chia
				</td>
			</tr>
			<tr><td></td><td></td></tr>
			<tr>
				<td>Số thứ nhất: </td>
				<td>
					<input type="text" name="somot" value="" placeholder="Nhập số thứ nhất">
				</td>
			</tr>
			<tr><td></td><td></td></tr>
			<tr>
				<td>Số thứ hai: </td>
				<td>
					<input type="text" name="sohai" value="" placeholder="Nhập số thứ hai">
				</td>
			</tr>
			<tr><td></td><td></td></tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Tính">
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