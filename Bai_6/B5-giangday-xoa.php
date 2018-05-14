<?php
require "connect.php";
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql="DELETE FROM giangday where id='".$id."'";
    $result = mysqli_query($conn, $sql) or die('Lỗi truy vấn!');
    header("Location: B5-giangday.php");
	mysqli_close($conn);
}
?>