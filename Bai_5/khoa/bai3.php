<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Nguyễn Văn Thái - 20156445</title>
	<script language=JavaScript>
		function checkInput() {
			if (document.frmPHP.txtID.value=="") {
				alert("Invalid ID, Please enter ID");
				document.frmPHP.txtID.focus();
				return false;
			}
			if (document.frmPHP.txtName.value=="") {
				alert("Please enter Name");
				document.frmPHP.txtName.focus();
				return false;
			}
			return true;
		}
	</script>
</head>
<body>
	<h2 style="color: red;">Nguyễn Văn Thái - 20156445</h2>
	<table>
	<form name="frmPHP" method="post" action="bai3-1.php" onsubmit="return checkInput();">
			<tr>
				<td align="left" class="content-sm"><b>
					Please enter ID and Name
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
				<td align="left" >Name:</td>
			</tr>
			<tr>
				<td align="left" >
					<input type="text" name="txtName" size="25" maxlength="50" class="textbox">
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
</body>
</html>
