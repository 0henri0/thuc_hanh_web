<?php
require "connect.php";
if(isset($_GET["ma"])){
    $maCB = $_GET["ma"];
    $sql="DELETE FROM canbo where MaCB='".$maCB."'";
    $result = mysqli_query($conn, $sql) or die('Lỗi truy vấn!');
    header("Location: B5-canbo.php");
	mysqli_close($conn);
}
?>