<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Nguyễn Văn Thái - 20156445</title>
	
</head>
<body>
	<?php	
	$connect = mysqli_connect('localhost', 'root', '' ,'qlbanhang') or die ("Server disconnect");
	
	mysqli_set_charset($connect, "UTF8");
	$sql = "SELECT * FROM hoadon";
	$hoadon = mysqli_query($connect, $sql);
	?>
	<h1 style="color: red;">Nguyễn Văn Thái - 20156445</h1>
	<table>
	<form name="frmPHP" method="post" action="bai5-delete-hd-1.php">
			<tr>
				<td align="left" class="content-sm"><b>
					Please enter id_hd
				</b></td>
			</tr>
			<tr>
				<td align="left" >Mã hóa đơn:</td>
			</tr>
			<tr>
				<td align="left">
					<select name="id_hd">
						<?php   while ($hd = mysqli_fetch_array($hoadon)){ ?>
						<option value="<?php echo $hd['id_hd']; ?>"><?php echo $hd['id_hd']; ?></option> 
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td align="left" valign="top"><br>
					<input type="submit" value="Submit" class="button">
				</td>
			</tr>
		</form>
	</table>
</body>
</html>
