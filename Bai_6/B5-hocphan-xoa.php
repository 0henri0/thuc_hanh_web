<?php
require "connect.php";
if(isset($_GET["ma"])){
    $maHP = $_GET["ma"];
    $sql="DELETE FROM hocphan where MaHP='".$maHP."'";
    $result = mysqli_query($conn, $sql) or die('Lỗi truy vấn!');
    header("Location: B5-hocphan.php");
	mysqli_close($conn);
}
?>