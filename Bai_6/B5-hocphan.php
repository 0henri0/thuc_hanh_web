<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 5 - Danh sách học phần</title>
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
		$sql ="SELECT * FROM hocphan";
		$result = mysqli_query($conn, $sql) or die('Lỗi truy vấn!');
		$dshocphan = array();
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		  $dshocphan[] = $row;
		}
	?>
	<h2><mark>Nguyễn Văn Thái - 20156445</mark></h2>
	<h3>Tong so mau tin tim thay: <?=count($dshocphan)?></h3>
	<a href="B5-hocphan-them.php">Thêm học phần</a>
	<br>
	<br>
	<table border="1">
		<tr>
			<th><b>Mã học phần</b></th>
			<th><b>Tên học phần</b></th>
			<th><b>Khối lượng</b></th>
			<th><b>Loại giờ</b></th>
			<th><b>Sửa</b></th>
			<th><b>Xóa</b></th>
		</tr>
		<?php
		foreach ($dshocphan as $ds) {
			?>
			<tr valign="top">
				<td><?=$ds["MaHP"]?> </td>
				<td><?=$ds["TenHP"]?> </td>
				<td><?=$ds["Khoiluong"]?> </td>
				<td><?=$ds["Loaigio"]?> </td>
				<td><a href="B5-hocphan-sua.php?ma=<?=$ds["MaHP"]?>">sửa</a></td>
				<td><a href="B5-hocphan-xoa.php?ma=<?=$ds["MaHP"]?>">xóa</a></td>
			</tr>
			<?php
		}
		?>
	</table>

</body>
</html>