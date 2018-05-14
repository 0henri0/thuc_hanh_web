<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bài 5 - sửa giảng dạy</title>
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
    $id = $_GET['id'];
    $maCB = $_GET['ma'];
    $sql2 = "SELECT * FROM canbo WHERE MaCB != '$maCB'";
    $canbo = mysqli_query($conn, $sql2) or die('Lỗi truy vấn!');
    $dscanbo = array();
    while($row = mysqli_fetch_array($canbo, MYSQLI_ASSOC))
    {
      $dscanbo[] = $row;
    }
    $sql3 = "SELECT * FROM canbo WHERE MaCB = '$maCB'";
    $result1 = mysqli_query($conn, $sql3) or die('Lỗi truy vấn!');
    $canbo = array();
    $canbo =  mysqli_fetch_assoc($result1);
    $sql4 = "SELECT * FROM giangday WHERE id = '$id'";
    $result2 = mysqli_query($conn, $sql4) or die('Lỗi truy vấn!');
    $giangday = array();
    $giangday =  mysqli_fetch_assoc($result2);
    if(isset($_POST['submit'])){
        $txtMaCB = $_POST['txtMaCB'];
        $txtMaMH = $_POST['txtMaMH'];
        $txtMaKy = $_POST['txtMaKy'];
        $txtMaLop = $_POST['txtMaLop'];
        $txtSoSV = $_POST['txtSoSV'];
        $sql = "UPDATE giangday SET MaCB = N'".$txtMaCB."', MaMH = N'".$txtMaMH."', Maky = N'".$txtMaKy."', Malop = N'".$txtMaLop."', Sosv = N'".$txtSoSV."' WHERE id = '$id'";
        $result = mysqli_query($conn, $sql) or die('Lỗi truy vấn!');
    ?>
    <script>
      window.location.href = "B5-giangday-sua.php?id=<?=$id?>&ma=<?=$txtMaCB?>";
    </script>
    <?php
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
        <form name="frmPHP" method="POST" action="B5-giangday-sua.php?id=<?=$id?>&ma=<?=$maCB?>" onsubmit="return checkInput();">
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
                                <option value="<?=$maCB?>"><?=$canbo['HoCB']." ".$canbo['TenCB']." - Mã: ".$canbo['MaCB']?></option>
                                <?php
                                foreach ($dscanbo as $ds) {
                                ?>
                                    <option value="<?=$ds['MaCB']?>">
                                        <?=$ds['HoCB']." ".$ds['TenCB']." - Mã: ".$ds['MaCB']?>
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
                            <input type="text" name="txtMaMH" size="25" maxlength="50" class="textbox" value="<?=$giangday['MaMH']?>">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Mã kỳ:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtMaKy" size="25" maxlength="50" class="textbox" value="<?=$giangday['Maky']?>">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Mã lớp:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtMaLop" size="25" maxlength="50" class="textbox" value="<?=$giangday['Malop']?>">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Số sinh viên:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtSoSV" size="25" maxlength="50" class="textbox" value="<?=$giangday['Sosv']?>">
                        </td>
                    </tr>
                    <tr>
                        <td align="left" valign="top">
                            <br>
                            <input type="submit" name="submit" value="Submit" class="button">
                            <a href="B5-giangday.php">Back</a>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</body>

</html>