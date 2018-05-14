<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 2 - 1</title>
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
		$Province = $_GET["province"]; 
		$Industry = $_GET["industry"];

		if($Province == '' || $Industry == ''){
			echo "<script>  alert('Vui lòng lựa chọn đầy đủ thông tin'); window.history.go(-1);</script>";
		} else{
			?>
				<table>
					<tr><td>Province</td>
					<td>:<?php echo $Province; ?></td></tr>
					<tr>
						<td>Industry</td>
						<td>:<?php echo $Industry; ?></td>
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