<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 1 - Danh sách viện</title>
</head>
<style type="text/css">
	table{
		border-collapse: collapse;
	}
	table tr, th, td{
		padding: 8px;
	}
	th{
	    background-color: #008040;
	    color: white;
	}
	tr:nth-child(even){
	    background-color: #F0F0F0;
	}
</style>
<body>
	<h2><mark>Nguyễn Văn Thái - 20156445</mark></h2>
	<?php
		require "connect.php";
		$sql ="SELECT * FROM vien";
		$result = mysqli_query($conn, $sql) or die('Lỗi truy vấn!');
		$dsvien = array();
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		  $dsvien[] = $row;
		}
	?>
	<h3>Tong so mau tin tim thay: <?=count($dsvien)?></h3>
	<a href="B2-vien-them.php">Thêm viện</a>
	<br>
	<br>
	<table border="1">
		<tr>
			<th><b>Mã viện</b></th>
			<th><b>Tên viện</b></th>
			<th><b>Sửa</b></th>
			<th><b>Xóa</b></th>
		</tr>
		<?php
		foreach ($dsvien as $ds) {
			?>
			<tr valign="top">
				<td><?=$ds["Mavien"]?> </td>
				<td><?=$ds["Tenvien"]?> </td>
				<td><a href="B3-vien-sua.php?ma=<?=$ds["Mavien"]?>">sửa</a></td>
				<td><a href="B4-vien-xoa.php?ma=<?=$ds["Mavien"]?>">xóa</a></td>
			</tr>
			<?php
		}
		?>
	</table>

</body>
</html>