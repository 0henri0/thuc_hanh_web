<?php
require "connect.php";
$sql2 = "SELECT * FROM vien";
$result = mysqli_query($conn, $sql2) or die('Lỗi truy vấn!');
$totalRows = 0;
$totalRows = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 4</title>
	<script language=JavaScript>
		function checkInput() {
			if (document.frmPHP.txtID.value=="") {
				alert("Invalid ID, Please enter ID");
				document.frmPHP.txtID.focus();
				//focus() thực thi một chức năng khi người dùng truy cập vào các phần tử như <input> <textarea> <select>
				return false;
			}
			else{
				alert('Dữ liệu hợp lệ, chấp nhận submit form');
				return true;
			}
		}
	</script>
	<?php
	if(isset($_POST['submit'])){
		$txtID = $_POST["txtID"];
		$affectrow=0;
		$conn = mysqli_connect("localhost", "root", "", "canbo") or die('Kết nối thất bại!');
		mysqli_set_charset($conn, 'UTF8');
		$sql="DELETE FROM vien where Mavien='".$txtID."'";
		$results = mysqli_query($conn, $sql) or die('Lỗi truy vấn!');
		?>
	    <script>
	      window.location.href = window.location.href;
	    </script>
	    <?php
		mysqli_close($conn);
	}
	?>
	<style type="text/css">
		.wrap{
			margin: 50px 0 0 500px;
		}
	</style>
</head>
<body>
	<div class="wrap">
		<h2><mark>Nguyễn Văn Thái - 20156445</mark></h2>
		<table border="1">
			<tr>
				<th><b>Mã vien</b></th>
				<th><b>Tên vien</b></th>
			</tr>
			<?php
			if($totalRows>0){
				$i=0;
				while ($row = mysqli_fetch_array ($result)){
					$i+=1;
			?>
			<tr valign="top">
				<td><?=$row["Mavien"]?> </td>
				<td ><?=$row["Tenvien"]?></td>
			</tr>
			<?php
				}
			}else{
			?>
			<tr valign="top">
				<td >&nbsp;</td>
				<td > <b><font face="Arial" color="#FF0000">Khong tim thay thong tin hang hoa!</font></b></td>
			</tr>
			<?php
			}
			?>
		</table>
		<br>
		<table>
			<!-- onsubmit dùng để validate khi submit form -->
			<form name="frmPHP" method="POST" action="B4-vien-xoa.php" onsubmit="return checkInput();">
				<tr>
					<td align="left" class="content-sm"><b>
						Please enter ID
					</b></td>
				</tr>
				<tr>
					<td align="left" >ID:</td>
				</tr>
				<tr>
					<td align="left">
						<input type="text" name="txtID" size="25" maxlength="3" class="textbox">
					</td>
				</tr>
				<tr>
					<td align="left" valign="top"> <br>
						<input type="submit" name="submit" value="Delete" class="button">
						<input type="reset" value="Reset" class="button">
						<a href="B1-vien.php"> Back</a>
					</td>
				</tr>
			</form>
		</table>
	</div>
</body>
</html>