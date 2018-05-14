<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bài 5 - Thêm cán bộ</title>
    <script language=JavaScript>
    
    function checkInput() {
        if (document.frmPHP.txtMaCB.value == "") {
            alert("Invalid ID, Vui lòng chọn Mã cán bộ");
            document.frmPHP.txtMaCB.focus();
            //focus() thực thi một chức năng khi người dùng truy cập vào các phần tử như <input> <textarea> <select>
            return false;
        } else if (document.frmPHP.txtMaMH.value == "") {
            alert("Vui lòng nhập Mã môn học");
            document.frmPHP.txtMaMH.focus();
            return false;
        } else if (document.frmPHP.txtMaKy.value == "") {
            alert("Vui lòng nhập Mã kỳ");
            document.frmPHP.txtMaKy.focus();
            return false;
        } else if (document.frmPHP.txtMaLop.value == "") {
            alert("Vui lòng nhập Mã lớp");
            document.frmPHP.txtMaLop.focus();
            return false;
        } else if (document.frmPHP.txtSoSV.value == "") {
            alert("Vui lòng nhập Số sinh viên");
            document.frmPHP.txtSoSV.focus();
            return false;
        } else {
            alert('Dữ liệu hợp lệ, chấp nhận submit form');
            return true;
        }
    }
  </script>
    <?php
	require "connect.php";
	$sql2 = "SELECT * FROM canbo";
	$canbo = mysqli_query($conn, $sql2) or die('Lỗi truy vấn!');
	$dscanbo = array();
	while($row = mysqli_fetch_array($canbo, MYSQLI_ASSOC))
	{
	  $dscanbo[] = $row;
	}
	if(isset($_POST['submit'])){
		$affectrow=0;
		$txtMaCB = $_POST['txtMaCB'];
		$txtMaMH = $_POST['txtMaMH'];
		$txtMaKy = $_POST['txtMaKy'];
		$txtMaLop = $_POST['txtMaLop'];
		$txtSoSV = $_POST['txtSoSV'];
		$sql="INSERT INTO giangday(MaCB, MaMH, Maky, Malop, Sosv) ";
		$sql .=" VALUES('".$txtMaCB."','".$txtMaMH."','".$txtMaKy."','".$txtMaLop."','".$txtSoSV."')";
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
        <form name="frmPHP" method="POST" action="B5-giangday-them.php" onsubmit="return checkInput();">
            <div class="table1" style="float: left;">
                <table>
                    <tr>
                        <td align="left" class="content-sm"><b>Vui lòng nhập data</b></td>
                    </tr>
                    <tr>
                        <td align="left">Mã cán bộ:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <!-- <input type="text" name="txtMaCB" size="25" maxlength="3" class="textbox"> -->
                            <select name="txtMaCB" style="padding: 1px;">
                                <option value="">-- -Chọn cán bộ ---</option>
                                <?php
                                foreach ($dscanbo as $ds) {
                                ?>
                                    <option value="<?=$ds['MaCB']?>">
                                        <?=$ds['HoCB']." ".$ds['TenCB']." - ".$ds['MaCB']?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Mã môn học:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtMaMH" size="25" maxlength="50" class="textbox">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Mã kỳ:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtMaKy" size="25" maxlength="50" class="textbox">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Mã lớp:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtMaLop" size="25" maxlength="50" class="textbox">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Số sinh viên:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtSoSV" size="25" maxlength="50" class="textbox">
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
        <a href="B5-giangday.php">Back</a>
    </div>
</body>

</html>