<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 2.3</title>
</head>
<body>
	<h4>Constant</h4>
	<?php
	define("pi",3.14);
	//define("hrs",8);
	function Test(){
		if(defined("pi"))
			echo "<br>pi:=" . pi;
		else
			echo "<br>pi not defined";
		if(defined("hrs"))
			echo "<br>hrs:=" . hrs;
		else
			echo "<br>hrs not defined";
	}
	Test();
	?>
	<div class="name">
        <h3>
        	<mark>Nguyễn Văn Thái - 20156445</mark>
        </h3>
    </div>
</body>
</html>