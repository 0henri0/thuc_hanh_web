<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 5 - Danh sách cán bộ</title>
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
		$sql ="SELECT * FROM canbo";
		$result = mysqli_query($conn, $sql) or die('Lỗi truy vấn!');
		$dscanbo = array();
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		  $dscanbo[] = $row;
		}
	?>
	<h2><mark>Nguyễn Văn Thái - 20156445</mark></h2>
	<h3>Tong so mau tin tim thay: <?=count($dscanbo)?></h3>
	<a href="B5-canbo-them.php">Thêm cán bộ</a>
	<br>
	<br>
	<table border="1">
		<tr>
			<th><b>Mã cán bộ</b></th>
			<th><b>UserName</b></th>
			<th><b>PassWord</b></th>
			<th><b>Họ</b></th>
			<th><b>Tên</b></th>
			<th><b>Giới tính</b></th>
			<th><b>Ngày sinh</b></th>
			<th><b>Nơi sinh</b></th>
			<th><b>Địa chỉ</b></th>
			<th><b>Mã viện</b></th>
			<th><b>Chức danh</b></th>
			<th><b>Số điện thoại</b></th>
			<th><b>Email</b></th>
			<th><b>Sửa</b></th>
			<th><b>Xóa</b></th>
		</tr>
		<?php
		foreach ($dscanbo as $ds) {
			?>
			<tr valign="top">
				<td><?=$ds["MaCB"]?> </td>
				<td><?=$ds["Username"]?> </td>
				<td><?=$ds["Password"]?> </td>
				<td><?=$ds["HoCB"]?> </td>
				<td ><?=$ds["TenCB"]?></td>
				<td><?=$ds["GioiTinh"]?> </td>
				<td><?=$ds["NgaySinh"]?> </td>
				<td><?=$ds["NoiSinh"]?> </td>
				<td><?=$ds["DiaChi"]?> </td>
				<td><?=$ds["Mavien"]?> </td>
				<td><?=$ds["Chucdanh"]?> </td>
				<td><?=$ds["Sodienthoai"]?> </td>
				<td><?=$ds["Email"]?> </td>
				<td><a href="B5-canbo-sua.php?ma=<?=$ds["MaCB"]?>&mavien=<?=$ds['Mavien']?>">sửa</a></td>
				<td><a href="B5-canbo-xoa.php?ma=<?=$ds["MaCB"]?>">xóa</a></td>
			</tr>
			<?php
		}
		?>
	</table>

</body>
</html>