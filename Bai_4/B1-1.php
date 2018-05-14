<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 1</title>
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
</head>
<body>
	<h2>Form variable</h2>
	<?php 
		if($_POST["fullname"] == ''){
			echo "<script>  alert('Vui lòng nhập đầy đủ thông tin'); window.history.go(-1);</script>";
		}else{
			$Name = $_POST["fullname"]; 
			$Gender = $_POST["gender"];
			?>
			<table>
				<tr>
					<td>Name</td>
					<td> : <?php echo $Name; ?> </td>
				</tr>
				<tr>
					<td>Gender</td>
					<td> : <?php echo $Gender; ?></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><b><mark>Nguyễn Văn Thái - 20156445</mark></b></td>
				</tr>
			</table>
			<?php
		}
	?> 
</body>
</html>