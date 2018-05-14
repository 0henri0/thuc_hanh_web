<?php
function isSNT($so){
 	$kq = 1;
 	for($i = 2; $i <= sqrt($so); $i++){
  		if($so % $i == 0 && $so > 2){
   			$kq = 0;
   			break;
  		}
	}
	return $kq;
}

if(isset($_POST['submit'])){
	if($_POST['n'] == ''){
		echo "<script>  alert('Vui lòng nhập đầy đủ thông tin!!!');</script>";
	}elseif(isset($_POST['n'])){
		$n = $_POST['n'];
		if($n < 2) $kq= 'Không có SNT';
		elseif($n == 2) $kq= '2 là SNT';
		else{
			$kq = 2;
  			for($i = 3; $i <= $n; $i++){
   				if(isSNT($i) == 1) $kq= $kq ." ". $i . " ";
  			}
  			$kq = $kq . " là các SNT";
 		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 8</title>
	<style>
		body{
			color: blue;
			margin-top: 100px;
			background-color: #dedede;
		}
		h2{
			text-align: center;
		}
		table{
			margin: 0 auto;
			padding: 20px;
			border:3px solid blue ;
		}
		table td{
			padding: 7px;
		}
		table tr:first-child{
			color: #B90707;
		}
		table tr td:first-child{
			text-align: right;
		}
		a {
			color: #B712B1;
		}
	</style>
</head>
<body>
	<h2>TÌM SỐ NGUYÊN TỐ</h2>
	<table width="40%">
		<form action="B8.php" method="POST">
			<tr>
				<td>
					Nhập N:
				</td>
				<td style="text-align: center;">
					<?php
						if(isset($n)) {
							?>
							<input type="number" name="n" value="<?=$n?>">
							<?php
						}else{
							?>
							<input type="number" name="n" value="" placeholder="Nhập n">
							<?php
						}
					?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td colspan="2" style="text-align: center">
					<input type="submit" name="submit" value="Các số nguyên tố <= N">
				</td>
			</tr>
			<tr>
				<td></td>
				<td colspan="2" style="text-align: center;">
					<input type="text" name="ngay" value="<?php if(isset($kq)) echo "$kq";?>" size="30" disabled="true">		
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><b><mark>Nguyễn Văn Thái - 20156445</mark></b></td>
			</tr>
		</form>	
	</table>
</body>
</html>