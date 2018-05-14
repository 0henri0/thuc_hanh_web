<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bài 5 - Thêm học phần</title>
    <script language=JavaScript>
    
    function checkInput() {
        if (document.frmPHP.txtMaHP.value == "") {
            alert("Invalid ID, Vui lòng nhập mã học phần");
            document.frmPHP.txtMaHP.focus();
            //focus() thực thi một chức năng khi người dùng truy cập vào các phần tử như <input> <textarea> <select>
            return false;
        } else if (document.frmPHP.txtTenHP.value == "") {
            alert("Vui lòng nhập tên học phần");
            document.frmPHP.txtTenHP.focus();
            return false;
        } else if (document.frmPHP.txtKL.value == "") {
            alert("Vui lòng nhập khối lượng");
            document.frmPHP.txtKL.focus();
            return false;
        } else if (document.frmPHP.txtLG.value == "") {
            alert("Vui lòng nhập loại giờ");
            document.frmPHP.txtLG.focus();
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
		$txtMaHP = $_POST['txtMaHP'];
		$txtTenHP = $_POST['txtTenHP'];
		$txtKL = $_POST['txtKL'];
		$txtLG = $_POST['txtLG'];
		$sql="INSERT INTO hocphan(MaHP, TenHP, Khoiluong, Loaigio) ";
		$sql .=" VALUES('".$txtMaHP."','".$txtTenHP."','".$txtKL."','".$txtLG."')";
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
        <form name="frmPHP" method="POST" action="B5-hocphan-them.php" onsubmit="return checkInput();">
            <div class="table1" style="float: left;">
                <table>
                    <tr>
                        <td align="left" class="content-sm"><b>Vui lòng nhập data</b></td>
                    </tr>
                    <tr>
                        <td align="left">Mã học phần:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtMaHP" size="25" maxlength="30" class="textbox">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Tên học phần:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtTenHP" size="25" maxlength="1000" class="textbox">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Khối lượng:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtKL" size="25" maxlength="50" class="textbox">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Loại giờ:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtLG" size="25" maxlength="50" class="textbox">
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
        <a href="B5-hocphan.php">Back</a>
    </div>
</body>

</html>