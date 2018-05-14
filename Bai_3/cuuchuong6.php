<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 3.3</title>
</head>
<body>
	<h4>Bang cuu chuong 6</h4>
	<?php
	$n = 6;
	$S = "<table border=1>";
	$S .="<tr><td colspan=3> Bảng cửu chương  $n </td></tr>";
	for($i=1; $i<=10; $i++)
	{
	 $S .="<tr><td> " .$n ."</td>";
	 $S .="<td> " .$i ."</td>";
	 $S .="<td> " .($n*$i) ."</td></tr>";
	}
	$S .= "</table>";
	echo $S;
	?>
	<div class="name">
        <h3>
        	<mark>Nguyễn Văn Thái - 20156445</mark>
        </h3>
    </div>
</body>
</html>