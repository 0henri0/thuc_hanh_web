<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bài 3 - Sửa viện</title>
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
    $maVien = $_GET['ma'];
    $sql2 = "SELECT * FROM vien WHERE Mavien = '$maVien'";
    $result = mysqli_query($conn, $sql2) or die('Lỗi truy vấn!');
    $vien = array();
    $vien =  mysqli_fetch_assoc($result);
    if(isset($_POST['submit'])){
        $txtMaVien = $_POST['txtMaVien'];
        $txtTenVien = $_POST['txtTenVien'];
        $sql="UPDATE vien SET Mavien = N'".$txtMaVien."', Tenvien = N'".$txtTenVien."' WHERE Mavien = '$maVien'";
        $result = mysqli_query($conn, $sql) or die('Lỗi truy vấn!');
        ?>
        <script>
          window.location.href = "B3-vien-sua.php?ma=<?=$txtMaVien?>";
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
        <form name="frmPHP" method="POST" action="B3-vien-sua.php?ma=<?=$maVien?>"" onsubmit="return checkInput();">
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
                            <input type="text" name="txtMaVien" size="25" maxlength="30" class="textbox" value="<?=$vien['Mavien']?>">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Tên viện:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtTenVien" size="25" maxlength="1000" class="textbox" value="<?=$vien['Tenvien']?>">
                        </td>
                    </tr>
                    <tr>
                        <td align="left" valign="top">
                            <br>
                            <input type="submit" name="submit" value="Submit" class="button">
                            <a href="B1-vien.php">Back</a>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</body>

</html>