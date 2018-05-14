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
		$stSQL = "SELECT * FROM monhoc";

		$result = mysqli_query($connect,$stSQL);
		$totalRows = mysqli_num_rows($result);
		?>
		<h3>Tổng số môn học tìm thấy: <?php echo $totalRows; ?></h3>
		<a href="bai5-insert-mh.php"> Thêm môn học / </a>
		<a href="bai5-update-mh.php"> Sửa môn học / </a>
		<a href="bai5-delete-mh.php"> Xóa môn học</a>
		<br><br>
		<table>
			<tr>
				<th><b>Mã môn học</b></th>
				<th><b>Tên môn học</b></th>
				<th><b>Số tiết</b></th>
			</tr>
			<?php
			if($totalRows>0){
				$i=0;
				while ($row = mysqli_fetch_array ($result))
				{
					$i+=1;
					?>
					<tr valign="top">
						<td><?=$row["MaMH"]?></td>
						<td ><?=$row["TenMH"]?></td>
						<td ><?=$row["SoTiet"]?></td>
					</tr>
					<?php
				}
			}else{
				?>
				<tr valign="top">
					<td >&nbsp;</td>
					<td ><b><font face="Arial" color="#FF0000">
						Không tìm thấy thông tin môn học!</font></b></td>
					</tr>
					<?php
				}
				?>
		</table>
	</body>
</html>
