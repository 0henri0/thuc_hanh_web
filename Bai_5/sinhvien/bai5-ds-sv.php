<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Nguyễn Văn Thái - 20156445</title>
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
</head>
	<body>
		<h1 style="color: red;">Nguyễn Văn Thái - 201564458</h1>
		<?php

		$connect = mysqli_connect("localhost", "root", "", "qlsinhvien") or die ("Server disconnect");
		mysqli_set_charset($connect, "UTF8");
		$totalRows = 0;
		$stSQL = "SELECT * FROM sinhvien";

		$result = mysqli_query($connect,$stSQL);
		$totalRows = mysqli_num_rows($result);
		?>
		<h3>Tổng số sinh viên tìm thấy: <?php echo $totalRows; ?></h3>
		<a href="bai5-insert-sv.php"> Thêm sinh viên / </a>
		<a href="bai5-update-sv.php"> Sửa sinh viên / </a>
		<a href="bai5-delete-sv.php"> Xóa sinh viên</a>
		<br><br>
		<table>
			<tr>
				<th><b>Mã sinh viên</b></th>
				<th><b>Họ sinh viên</b></th>
				<th><b>Tên sinh viên</b></th>
				<th><b>Giới tính</b></th>
				<th><b>Ngày sinh</b></th>
				<th><b>Nơi sinh</b></th>
				<th><b>Địa chỉ</b></th>
				<th><b>Mã khoa</b></th>
				<th><b>Học bổng</b></th>
			</tr>
			<?php
			if($totalRows>0){
				$i=0;
				while ($row = mysqli_fetch_array ($result))
				{
					$i+=1;
					?>
					<tr valign="top">
						<td><?=$row["MaSV"]?></td>
						<td ><?=$row["HoSV"]?></td>
						<td ><?=$row["TenSV"]?></td>
						<td ><?=$row["GioiTinh"]?></td>
						<td ><?=$row["NgaySinh"]?></td>
						<td ><?=$row["NoiSinh"]?></td>
						<td ><?=$row["DiaChi"]?></td>
						<td ><?=$row["MaKH"]?></td>
						<td ><?=$row["HocBong"]?></td>
					</tr>
					<?php
				}
			}else{
				?>
				<tr valign="top">
					<td >&nbsp;</td>
					<td ><b><font face="Arial" color="#FF0000">
						Không tìm thấy thông tin sinh viên!</font></b></td>
					</tr>
					<?php
				}
				?>
		</table>
	</body>
</html>
