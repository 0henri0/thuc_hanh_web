<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Trang chủ</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="name" style="text-align: center;">
        <h3>
          <mark>Nguyễn Văn Thái - 20156445</mark>
        </h3>
    </div>
  <div id="wrap">
    <div id="header">    
      <div id="header-tabs">
        <ul>
          <li id="current"><a href="#"><span>Tab1</span></a></li>
          <li><a href="#"><span>Tab2</span></a></li>
          <li><a href="#"><span>Tab3</span></a></li>                
          <li><a href="#"><span>Tab4</span></a></li>
          <li><a href="#"><span>Tab5</span></a></li>
          <li><a href="#"><span>Tab6</span></a></li>
          <li><a href="#"><span>Tab7</span></a></li>
          <li><a href="#"><span>Tab8</span></a></li>
        </ul>
      --> Đây là TabMenu
    </div>    
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>-->Đây là Header</p>
  </div>
  <div id="content-wrap">
    <div id="main">
    	<h1 style="color: red">PHIẾU ĐĂNG KÝ HỌC TIN HỌC</h1>
      <form id="frm_info" name="frm_info" method="post" action="index.php" onsubmit="return CheckForm()">
        <table bgcolor="#aad4ff" border="1">
          <tr>
            <div>
              <td>Họ Tên</td>
              <td><input name="txtname" type="text" id="textfield" tabindex="1" size="15" maxlength="25" /></td>
              <td>Điện Thoại</td>
              <td><input name="txtname" type="text" id="textfield" tabindex="1" size="15" maxlength="25" /></td>
            </div>
          </tr>
          <tr>
            <div>
              <td>Ngày Sinh</td>
              <td><input name="txtname" type="text" id="textfield" tabindex="1" size="15" maxlength="25" /></td>
              <td>Nơi Sinh</td>
              <td><input name="txtname" type="text" id="textfield" tabindex="1" size="15" maxlength="25" /></td>
            </div>
          </tr>
          <tr>
            <td>Môn Học</td>
            <td>
              <select name="selhomeland" id="homeland" tabindex="6">
                <option value="Tin học căn bản" selected="selected">Tin học căn bản</option>
                <option value="Word">Word</option>
                <option value="Excel">Excel</option>
                <option value="Access1">Access1</option>
                <option value="PowerPoint">PowerPoint</option>
                <option value="Thiết kế Web">Thiết kế Web</option>
              </select>
            </td>
            <td>Ca Học</td>
            <td>
              <select name="selhomeland" id="homeland" tabindex="5">
                <option value="AB" selected="selected">AB</option>
                <option value="CJ">CJ</option>
                <option value="DE">DE</option>
                <option value="HI">HI</option>
                <option value="KL">KL</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Ngày</td>
            <td>
              <select name="selhomeland" id="homeland" tabindex="6">
                <option value="246" selected="selected">246</option>
                <option value="357">357</option>
                <option value="234567">234567</option>
                <option value="Chủ Nhật">Chủ Nhật</option>
              </select>
            </td>
            <td>Giờ</td>
            <td>
              <select name="selhomeland" id="homeland" tabindex="5">
                <option value="AB" selected="selected">7h00 -> 11h00</option>
                <option value="CJ">7h30 -> 17h00</option>
                <option value="DE">11h00 -> 13h00</option>
                <option value="HI">13h00 -> 17h00</option>
              </select>
            </td>
          </tr>
          <tr>
            <div>
              <td>Khai Giảng</td>
              <td><input name="txtname" type="text" id="textfield" tabindex="1" size="15" maxlength="25" /></td>
              <td>Kết Thúc</td>
              <td><input name="txtname" type="text" id="textfield" tabindex="1" size="15" maxlength="25" /></td>
            </div>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" name="Gui" value="Gửi" style="margin-left: 110px"></td>
            <td colspan="2"><input type="submit" name="Xoa" value="Xóa" style="margin-left: 100px"></td>
          </tr>      
        </table>
      </form>
    </div>
    <div id="sidebar">
    	<h1>Đăng nhập</h1>
      <form name="frmlogin" method="post" id="frmlogin" action="log_exc.php">
        <p><strong>Tài khoản</strong>&nbsp <input name="txuser" type="text" class="textbox" maxlength="50" /></p>		  
        <p><strong>Mật khẩu</strong> &nbsp <input name="txpass" type="password" class="textbox" maxlength="50" /></p>
        <p align="center">
          <input name="login" class="loginbutton" value="Đăng nhập" type="submit"/>
        </p>		
      </form>      
    </div>
  </div>
  <div id="footer">
    <p align="center">--> Đây là Footer </p>
  </div>
</div>
</body>
</html>