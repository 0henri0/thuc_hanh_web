<?php ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Nguyễn Văn Thái - 20156445</title>
</head>
<body>
	<h1 style="color: red;">Nguyễn Văn Thái - 20156445</h1>
	<?php 
	session_start();
//huy cac bien session
	unset($_SESSION["username"]); unset($_SESSION["tennv"]);
	?>
	<script language="javascript">
		window.open("bai1-1.php","_self");
	</script>
</body>
</html>
<?php ob_flush(); ?>
