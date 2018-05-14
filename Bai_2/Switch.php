<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 2.7</title>
</head>
<body>
	<h4>SWITCH Statement</h4>
	<?php
		$j=3;
		$j=date("w");
		$str="";
		switch($j) {
		case 0:
			$str="Today is Sunday";
			break;
		case 1:
			$str="Today is Monday";
			break;
		case 2:
			$str="Today is Tueday";
			break;
		case 3:
			$str="Today is Wednesday";
			break;
		case 4:
			$str="Today is Thursday";
			break;
		case 5:
			$str="Today is Friday";
			break;
		case 6:
			$str="Today is Saturday";
			break;
		default:
			$str="Today is Sunday";
			break;
		}
		echo $str;
	?>
	<div class="name">
        <h3>
        	<mark>Nguyễn Văn Thái - 20156445</mark>
        </h3>
    </div>
</body>
</html>