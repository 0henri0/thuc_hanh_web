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
	$connect = mysqli_connect("localhost", "root", "", "qlsinhvien") or die ("Server disconnect");
	mysqli_set_charset($connect, "UTF8");
	$sql = "SELECT * FROM sinhvien";
	$sinhvien = mysqli_query($connect,$sql);
	?>
	<h1 style="color: red;">Nguyễn Văn Thái - 201564458</h1>
	<table>
	<form name="frmPHP" method="post" action="bai5-update-sv-1.php" onsubmit="return checkInput();">
			<tr>
				<td align="left" class="content-sm"><b>
					Please enter MaSV
				</b></td>
			</tr>
			<tr>
				<td align="left" >Mã sinh viên:</td>
			</tr>
			<tr>
				<td align="left">
					<select id="sinhvien" name="txtMaSV">
						<?php $i = 0; ?>
						<?php $name = ""; ?>
						<?php   while ($sv = mysqli_fetch_array($sinhvien)){ ?>
						<?php if($i == 0){$i++; $name = $sv['HoSV']." ".$sv['TenSV']; } ?>
						<option value="<?php echo $sv['MaSV']; ?>"><?php echo $sv['MaSV']; ?></option> 
						<?php } ?>
					</select>
					<span class="sinhvien"><?php echo $name; ?></span>
				</td>
			</tr>
			<tr>
				<td align="left" valign="top"><br>
					<input type="submit" value="Submit" class="button">
					<input type="reset" value="Reset" class="button">
				</td>
			</tr>
		</form>
	</table>

	<script>
		$(document).ready(function(){
			$("#sinhvien").change(function(){
				$.ajax({
					method: "POST",
					data: {id: $(this).val()},
					url: "ajax/getName.php",
					dataType: 'json',
					success: function(data) {
						$(".sinhvien").empty();
						$(".sinhvien").append(data.name);
					}
				});
			});
		});
	</script>
</body>
</html>
