<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 0</title>
</head>
<body>
	<h2><mark>Nguyễn Văn Thái - 20156445</mark></h2>
	<h4>Danh sach can bo</h4>
	<?php
		$x = 0;
		$conn = mysqli_connect("localhost", "root", "", "canbo") or die(mysqli_error());
		mysqli_set_charset($conn, 'UTF8');
		$result = mysqli_query($conn, "SELECT * FROM canbo;") or die(mysqli_error());
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			echo $x . "-&nbsp;" . $row['HoCB'] . "&nbsp;" . $row['TenCB'] . ": &nbsp;" . $row['NgaySinh'] . "<br>";
			$x++;
		}
	?>
</body>
</html>