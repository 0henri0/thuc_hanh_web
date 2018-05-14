<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Bài 1 - danh sách khoa</title>
	<style type="text/css">
		body{
			margin: 50px 0 0 500px;
		}
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
		<h2><mark>Nguyễn Văn Thái - 20156445</mark></h2>
		<?php

		$connect = mysqli_connect('localhost', 'root', '' ,'qlsinhvien') or die ('Server disconnect');
		mysqli_set_charset($connect, "UTF8");
		$totalRows = 0;
		$stSQL = 'SELECT * FROM khoa';

		$result = mysqli_query($connect, $stSQL);
		$totalRows = mysqli_num_rows($result);
		?>
		<h3>Tổng số khóa học tìm thấy: <?php echo $totalRows; ?></h3>
		<a href="bai2.php"> Thêm khoa / </a>
		<a href="bai3.php"> Sửa khoa / </a>
		<a href="bai4.php"> Xóa Khoa</a>
		<br>
		<br>
		<table>
			<tr>
				<th><b>Mã khoa</b></th>
				<th><b>Tên khoa</b></th>
			</tr>
			<?php
			if($totalRows>0){
				$i=0;
				while ($row = mysqli_fetch_array ($result))
				{
					$i+=1;
					?>
					<tr valign="top">
						<td><?=$row['MaKH']?></td>
						<td ><?=$row['TenKhoa']?></td>
					</tr>
					<?php
				}
			}else{
				?>
				<tr valign="top">
					<td >&nbsp;</td>
					<td ><b><font face="Arial" color="#FF0000">
						Không tìm thấy thông tin khóa học!</font></b></td>
					</tr>
					<?php
				}
				?>
		</table>
	</body>
</html>
