<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 4</title>
</head>
<body>
	<h4>Bang cuu chuong từ 2 đến 5</h4>
	<?php
	for($n=2; $n<=5; $n++){
		$S = "<table border=1 style=\"float: left; margin-right: 50px;\">";
		$S .="<tr><td colspan=3> Bảng cửu chương  $n </td></tr>";
		for($i=1; $i<=10; $i++)
		{
		 $S .="<tr><td> " .$n ."</td>";
		 $S .="<td> " .$i ."</td>";
		 $S .="<td> " .($n*$i) ."</td></tr>";
		}
		$S .= "</table>";
		echo $S;
	}
	?>
	<br>
	<div class="name" style="margin-top: 300px;">
        <h3>
        	<mark>Nguyễn Văn Thái - 20156445</mark>
        </h3>
    </div>
</body>
</html>