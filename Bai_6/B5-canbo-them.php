<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bài 5 - bảng cán bộ</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <script language=JavaScript>
    $(function() {
        $.datepicker.regional['vi'] = {
            closeText: 'Ðóng',
            prevText: '&#x3c;Trước',
            nextText: 'Tiếp&#x3e;',
            currentText: 'Hôm nay',
            monthNames: [' Tháng Một', 'Tháng Hai', 'Tháng Ba', 'Tháng Tư', 'Tháng Năm', 'Tháng Sáu',
                'Tháng Bảy', 'Tháng Tám', 'Tháng Chín', 'Tháng Mười', 'Tháng Mười Một', 'Tháng Mười Hai'
            ],
            monthNamesShort: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6',
                'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'
            ],
            dayNames: ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy'],
            dayNamesShort: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'],
            dayNamesMin: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'],
            weekHeader: 'Tu',
            dateFormat: 'yy-mm-dd',
            firstDay: 0,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['vi']);
        $(".datepicker").datepicker();
    });

    function checkInput() {
        if (document.frmPHP.txtID.value == "") {
            alert("Invalid ID, Vui lòng nhập ID");
            document.frmPHP.txtID.focus();
            //focus() thực thi một chức năng khi người dùng truy cập vào các phần tử như <input> <textarea> <select>
            return false;
        } else if (document.frmPHP.txtName.value == "") {
            alert("Vui lòng nhập UserName");
            document.frmPHP.txtName.focus();
            return false;
        } else if (document.frmPHP.txtPass.value == "") {
            alert("Vui lòng nhập Password");
            document.frmPHP.txtPass.focus();
            return false;
        } else if (document.frmPHP.txtHo.value == "") {
            alert("Vui lòng nhập Họ");
            document.frmPHP.txtHo.focus();
            return false;
        } else if (document.frmPHP.txtTen.value == "") {
            alert("Vui lòng nhập Tên");
            document.frmPHP.txtTen.focus();
            return false;
        } else if (document.frmPHP.txtGT.value == "") {
            alert("Vui lòng nhập Giới Tính");
            document.frmPHP.txtGT.focus();
            return false;
        } else if (document.frmPHP.txtNgay.value == "") {
            alert("Vui lòng nhập Date");
            document.frmPHP.txtNgay.focus();
            return false;
        } else if (document.frmPHP.txtNS.value == "") {
            alert("Vui lòng nhập Nơi Sinh");
            document.frmPHP.txtNS.focus();
            return false;
        } else if (document.frmPHP.txtDC.value == "") {
            alert("Vui lòng nhập Địa Chỉ");
            document.frmPHP.txtDC.focus();
            return false;
        } else if (document.frmPHP.txtMV.value == "") {
            alert("Vui lòng nhập Mã Viện");
            document.frmPHP.txtMV.focus();
            return false;
        } else if (document.frmPHP.txtCD.value == "") {
            alert("Vui lòng nhập Chức Danh");
            document.frmPHP.txtCD.focus();
            return false;
        } else if (document.frmPHP.txtSo.value == "") {
            alert("Vui lòng nhập Số Điện Thoại");
            document.frmPHP.txtSo.focus();
            return false;
        } else if (document.frmPHP.txtEmail.value == "") {
            alert("Vui lòng nhập Email");
            document.frmPHP.txtEmail.focus();
            return false;
        } else {
            alert('Dữ liệu hợp lệ, chấp nhận submit form');
            return true;
        }
    }
    </script>
    <?php
	require "connect.php";
	$sql2 = "SELECT * FROM vien";
	$vien = mysqli_query($conn, $sql2) or die('Lỗi truy vấn!');
	$dsvien = array();
	while($row = mysqli_fetch_array($vien, MYSQLI_ASSOC))
	{
	  $dsvien[] = $row;
	}
	if(isset($_POST['submit'])){
		$affectrow=0;
		$txtID = $_POST['txtID'];
		$txtName = $_POST['txtName'];
		$txtPass = $_POST['txtPass'];
		$txtHo = $_POST['txtHo'];
		$txtTen = $_POST['txtTen'];
		$txtGT = $_POST['txtGT'];
		$txtNgay = $_POST['txtNgay'];
		$txtNS = $_POST['txtNS'];
		$txtDC = $_POST['txtDC'];
		$txtMV = $_POST['txtMV'];
		$txtCD = $_POST['txtCD'];
		$txtSo = $_POST['txtSo'];
		$txtEmail = $_POST['txtEmail'];
		$sql="INSERT INTO canbo(MaCB, Username, Password, HoCB, TenCB, GioiTinh, NgaySinh, NoiSinh, DiaChi, Mavien, Chucdanh, Sodienthoai, Email) ";
		$sql .=" VALUES('".$txtID."','".$txtName."','".$txtPass."','".$txtHo."','".$txtTen."','".$txtGT."','".$txtNgay."','".$txtNS."','".$txtDC."','".$txtMV."','".$txtCD."','".$txtSo."','".$txtEmail."')";
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
        <form name="frmPHP" method="POST" action="B5-canbo-them.php" onsubmit="return checkInput();">
            <div class="table1" style="float: left;">
                <table>
                    <tr>
                        <td align="left" class="content-sm"><b>Vui lòng nhập data</b></td>
                    </tr>
                    <tr>
                        <td align="left">MaCB:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtID" size="25" maxlength="3" class="textbox">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Username:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtName" size="25" maxlength="50" class="textbox">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Password:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtPass" size="25" maxlength="50" class="textbox">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Họ CB:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtHo" size="25" maxlength="50" class="textbox">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Tên CB:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtTen" size="25" maxlength="50" class="textbox">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Giới tính:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtGT" size="25" maxlength="50" class="textbox">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Ngày sinh:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtNgay" size="25" maxlength="50" class="textbox datepicker">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="table2" style="float: left;">
                <table>
                    <tr>
                        <td align="left" class="content-sm"><b>Vui lòng nhập data</b></td>
                    </tr>
                    <tr>
                        <td align="left">Nơi sinh:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtNS" size="25" maxlength="50" class="textbox">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Địa chỉ:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtDC" size="25" maxlength="100" class="textbox">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Mã viện:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <select name="txtMV" style="padding: 1px;">
                                <option value="">-- -Chọn viện ---</option>
                                <?php
								foreach ($dsvien as $ds) {
								?>
                                    <option value="<?=$ds['Mavien']?>">
                                        <?=$ds['Tenvien']?>
                                    </option>
                                    <?php
								}
								?>
                            </select>
                            <!-- <input type="text" name="txtMV" size="25" maxlength="50" class="textbox"> -->
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Chức danh:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtCD" size="25" maxlength="50" class="textbox">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Số điện thoại:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtSo" size="25" maxlength="50" class="textbox">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Email:</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="text" name="txtEmail" size="25" maxlength="50" class="textbox">
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
        <a href="B5-canbo.php">Back</a>
    </div>
</body>

</html>