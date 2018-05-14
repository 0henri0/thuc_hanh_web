<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 2.2</title>
</head>
<body>
	<h4>Scope of Variable</h4>
	<?php
		$a = 100;
		/* global scope */
		function Test()
		{
			global $a;
			$i = 10;
			$a += 10;
			echo "<br>a:= $a";
			echo "<br>i:= $i";
			/* reference to local scope variable */
		}
		Test();
		echo "<br>a:= $a";
		$i=1000;
		echo "<br>i:= $i";
	?>
	<div class="name">
        <h3>
        	<mark>Nguyễn Văn Thái - 20156445</mark>
        </h3>
    </div>
</body>
</html>