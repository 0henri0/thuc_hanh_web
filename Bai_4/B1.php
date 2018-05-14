<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 1</title>
</head>
<style type="text/css">
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
<body>
	<div class="wrap">
		<h2>Form variable</h2>
		<table width="40%">
			<form action="B1-1.php" method="POST">
				<tr>
					<td>Name</td><td>: <input type="text" name="fullname" placeholder="Nhập tên ..." style="padding: 5px;" size="50"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>:  
						<input type="radio" value="Male" name="gender" checked=""> Male
						<input type="radio" value="Female" name="gender"> Female
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
	</div>

</body>
</html>