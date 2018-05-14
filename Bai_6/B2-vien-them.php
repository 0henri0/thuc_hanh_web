<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bài 2 - Thêm viện</title>
    <script language=JavaScript>
    
    function checkInput() {
        if (document.frmPHP.txtMaVien.value == "") {
            alert("Invalid ID, Vui lòng nhập mã viện");
            document.frmPHP.txtMaVien.focus();
            //focus() thực thi một chức năng khi người dùng truy cập vào các phần tử như <input> <textarea> <select>
            return false;
        } else if (document.frmPHP.txtTenVien.value == "") {
            alert("Vui lòng nhập tên viện");
            document.frmPHP.txtTenVien.focus();
            return false;
        } else {
            alert('Dữ liệu hợp lệ, chấp nhận submit form');
            return true;
        }
    }
  </script>
    <?php
	require "connect.php";
	if(isset($_POST['submit'])){
		$affectrow=0;
		$txtMaVien = $_POST['txtMaVien'];
		$txtTenVien = $_POST['txtTenVien'];
		$sql="INSERT INTO vien(Mavien, Tenvien) ";
		$sql .=" VALUES('".$txtMaVien."','".$txtTenVien."')";
		$result = mysqli_query($conn, $sql) or die('Lỗi truy vấn!');
		if($result) $affectrow = mysqli_affected_rows($conn); //trả về số dòng bị ảnh hưởng các truy vấn SELECT, INSERT, UPDATE, REPLACE, hoặc DELETE trước đó
		mysqli_close($conn);
	}
	?>
        <style>
        .wrap {
            margin: 0 0 0 350px;
        }
        </style>
</head>

<body>
    <div class="wrap">
        <h2><mark>Nguyễn Văn Thái - 20156445</mark></h2>
        <!-- onsubmit dùng để validate khi submit form -->
        <form name="frmPHP" method="POST" action="B2-vien-them.php" onsubmit="return checkInput();">
            <div class="table1" style="float: left;">
                <table>
                    <tr>
                        <td align="left" class="content-sm"><b>Vui lòng nhập data</b></td>
                    </tr>
                    <tr>
                        <td align="left">Mã viện:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtMaVien" size="25" maxlength="30" class="textbox">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Tên viện:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtTenVien" size="25" maxlength="1000" class="textbox">
                        </td>
                    </tr>
                    <tr>
                        <td align="left" valign="top">
                            <br>
                            <input type="submit" name="submit" value="Submit" class="button">
                            <input type="reset" value="Reset" class="button">
                        </td>
                    </tr>
                </table>
            </div>
        </form>
        <h3>Them mau tin</h3>
        <p>So mau tin them vao:
            <?php if(isset($affectrow)) echo($affectrow);else echo " 0";?>
        </p>
        <a href="B1-vien.php">Back</a>
    </div>
</body>

</html>