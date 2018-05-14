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
	$sql = "SELECT * FROM monhoc";
	$monhoc = mysqli_query($connect,$sql);
	?>
	<h1 style="color: red;">Nguyễn Văn Thái - 20156445</h1>
	<table>
	<form name="frmPHP" method="post" action="bai5-delete-mh-1.php" onsubmit="return checkInput();">
			<tr>
				<td align="left" class="content-sm"><b>
					Please enter MaMH
				</b></td>
			</tr>
			<tr>
				<td align="left" >Mã môn học:</td>
			</tr>
			<tr>
				<td align="left">
					<select id="monhoc" name="txtMaMH">
						<?php $j = 0; ?>
						<?php $MH = ""; ?>
						<?php   while ($mh = mysqli_fetch_array($monhoc)){ ?>
						<?php if($j == 0){$j++; $MH = $mh['TenMH']; } ?>
						<option value="<?php echo $mh['MaMH']; ?>"><?php echo $mh['MaMH']; ?></option> 
						<?php } ?>
					</select>
					<span class="monhoc"><?php echo $MH; ?></span>
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
			$("#monhoc").change(function(){
				$.ajax({
					method: "POST",
					data: {id: $(this).val()},
					url: "ajax/getMH.php",
					dataType: 'json',
					success: function(data) {
						$(".monhoc").empty();
						$(".monhoc").append(data.name);
					}
				});
			});
		});
	</script>
</body>
</html>
