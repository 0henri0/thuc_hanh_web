<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
	<table>
		<form action="B2-1.php" method="get">
			<tr>
				<td>Province</td>
				<td>:
					<select name="province">
						<option value="HAN">Ha Noi</option>
						<option value="HCM">Ho Chi Minh</option>
						<option value="HUE">Hue</option>
					</select> 
				</td>
			</tr>
			<tr>
				<td>Industry</td>
				<td>:
					<select name="industry" multiple>
						<option value="AUT">Automobile</option>
						<option value="FOO">Foods</option>
						<option value="ENG">Enginering</option>
						<option value="GAR">Garment</option>
					</select> 
				</td>
			</tr> 
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" value="Submit"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><b><mark>Nguyễn Văn Thái - 20156445</mark></b></td>
			</tr>
		</form>
	</table>

</body>
</html>