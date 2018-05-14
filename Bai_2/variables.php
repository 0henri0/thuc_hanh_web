<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>:: Welcomw to PHP</title>
</head>
<body>
	<h4>Variable</h4>
	<?php
		$sotrang=10;
		$record=5;
		$check = true;
		$strSQL="select * from tblCustomers";
		echo "$strSQL" . "<br>";
		echo '$strSQL' . '<br>';
		$myarrs= array("first", "last", "company");
		$myarrs[0] = "Number 0";
		$myarrs[1] = "Number 1";
		$myarrs[2] = "Number 2";
		echo $myarrs[1];
		echo "<br>";
		echo $myarrs[2];
	?>
	<div class="name">
        <h3>
        	<mark>Nguyễn Văn Thái - 20156445</mark>
        </h3>
    </div>
</body>
</html>