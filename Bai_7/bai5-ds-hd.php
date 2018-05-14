<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Nguyễn Văn Thái - 20156445</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
	<body>
		<h1 style="color: red;">Nguyễn Văn Thái - 20156445</h1>
		<?php

		$connect = mysqli_connect('localhost', 'root', '' ,'qlbanhang') or die ("Server disconnect");
		
		mysqli_set_charset($connect, "UTF8");
		$totalRows = 0;
		$stSQL = "SELECT * FROM hoadon";

		$result = mysqli_query($connect, $stSQL);
		$totalRows = mysqli_num_rows($result);
		?>
		<h3>Tổng số hóa đơn tìm thấy: <?php echo $totalRows; ?></h3>
		<table>
			<tr>
				<th><b>Mã hóa đơn</b></th>
				<th><b>Ngày lập hoán đơn</b></th>
				<th><b>Mã khách hàng</b></th>
				<th><b>Mã nhân viên</b></th>
				<th><b>Ngày giao hàng</b></th>
				<th><b>Tổng tiền</b></th>
			</tr>
			<?php
			if($totalRows>0){
				$i=0;
				while ($row = mysqli_fetch_array ($result))
				{
					$i+=1;
					?>
					<tr valign="top">
						<td><?=$row["id_hd"]?></td>
						<td ><?=$row["ngaylaphd"]?></td>
						<td ><?=$row["id_kh"]?></td>
						<td><?=$row["id_nv"]?></td>
						<td><?=$row["ngaygiaohang"]?></td>
						<td><?=$row["tongtien"]?></td>
					</tr>
					<?php
				}
			}else{
				?>
				<tr valign="top">
					<td >&nbsp;</td>
					<td ><b><font face="Arial" color="#FF0000">
						Không tìm thấy thông tin hóa đơn!</font></b></td>
					</tr>
					<?php
				}
				?>
		</table>
	</body>
</html>
