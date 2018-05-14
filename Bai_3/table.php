<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 3.5</title>
</head>
<body>
	<div class="name">
        <h3>
        	<mark>Nguyễn Văn Thái - 20156445</mark>
        </h3>
    </div>
    <br>
	<?php
	?>
	<table border="1" width="50%" style="text-align: center;">
	<tr>
	<th>STT</th>
	<th>Tên Sách</th>
	<th>Nội Dung Sách</th>
	</tr>
	<?php
	for ($i=1; $i <= 100 ; $i++) { 
		?>
			<tr>
				<td><?=$i?></td>
				<td>TenSach<?=$i?></td>
				<td>NoiDungSach<?=$i?></td>
			</tr>
		<?php
	}
	?>
	</table>
	<?php
	?>
</body>
</html>