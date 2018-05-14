<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 2.11</title>
</head>
<body>
	<h3>In số từ 1 đến 100</h3>
	<div class="name">
        <h3>
        	<mark>Nguyễn Văn Thái - 20156445</mark>
        </h3>
    </div>
	<?php
		for($i=1; $i<=200; $i++){
			if($i%2 == 0 ){
				echo "<b style=\"color: red\">số chẵn:&nbsp&nbsp&nbsp $i</b><br>";
			}else{
				echo "<i style=\"color: blue\">số lẻ:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $i</i><br>";
			}
		}
	?>
</body>
</html>