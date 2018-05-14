<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 3.2</title>
</head>
<body>
	<h4>Giai PT bac 2</h4>
	<?php
	  $a = 1;  $b = 4;   $c = 1;
	//Tạo chuỗi phương trình để in
	  $pt = "<b>" . $a ."x<sup>2 </sup>+ ". $b. "x + " .$c. " = 0 </b>";
	//Không giải nếu phương trình là phương trình bậc nhất.
	  if ($a==0)  echo "Đây là phương trình bậc nhất!";
	  else
	  {
	      $delta = $b * $b - 4*$a*$c;
	      if ($delta < 0)  printf ("Phương trình %s vô nghiệm!", $pt);
	      elseif  ($delta == 0) 
	 printf("Phương trình %s có một nghiệm kép x= %.2f", $pt, (-$b/(2*$a)));
	      else
	          {
	                $x1 = (-$b + sqrt($delta))/(2*$a);
	                $x2 = (-$b - sqrt($delta))/(2*$a);
	                printf("Phương trình %s có 2 nghiệm phân biệt:", $pt);
	                printf("x1= %.2f và x2= %.2f", $x1, $x2);
	          }
	  }
	?>
	<div class="name">
        <h3>
        	<mark>Nguyễn Văn Thái - 20156445</mark>
        </h3>
    </div>
</body>
</html>