<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 5 - Danh sách giảng dạy</title>
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
	<?php
		require "connect.php";
		$sql ="SELECT * FROM giangday";
		$result = mysqli_query($conn, $sql) or die('Lỗi truy vấn!');
		$dsgiangday = array();
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		  $dsgiangday[] = $row;
		}
	?>
	<h2><mark>Nguyễn Văn Thái - 20156445</mark></h2>
	<h3>Tong so mau tin tim thay: <?=count($dsgiangday)?></h3>
	<a href="B5-giangday-them.php">Thêm giảng dạy</a>
	<br>
	<br>
	<table border="1">
		<tr>
			<th><b>STT</b></th>
			<th><b>Mã cán bộ</b></th>
			<th><b>Mã môn học</b></th>
			<th><b>Mã kỳ</b></th>
			<th><b>Mã lớp</b></th>
			<th><b>Số sinh viên</b></th>
			<th><b>Sửa</b></th>
			<th><b>Xóa</b></th>
		</tr>
		<?php
		foreach ($dsgiangday as $ds) {
			?>
			<tr valign="top">
				<td><?=$ds["id"]?> </td>
				<td><?=$ds["MaCB"]?> </td>
				<td><?=$ds["MaMH"]?> </td>
				<td><?=$ds["Maky"]?> </td>
				<td><?=$ds["Malop"]?> </td>
				<td ><?=$ds["Sosv"]?></td>
				<td><a href="B5-giangday-sua.php?id=<?=$ds["id"]?>&ma=<?=$ds["MaCB"]?>">sửa</a></td>
				<td><a href="B5-giangday-xoa.php?id=<?=$ds["id"]?>">xóa</a></td>
			</tr>
			<?php
		}
		?>
	</table>

</body>
</html>