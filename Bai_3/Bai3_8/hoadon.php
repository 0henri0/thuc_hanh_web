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
    	<h1 style="color: red">HÓA ĐƠN BÁN HÀNG</h1>
      <form id="frm_info" name="frm_info" method="post" action="index.php" onsubmit="return CheckForm()">
        <table border="1">
          <tr class="a">
            <div>
              <td>Mua</td>
              <td>STT</td>
              <td style="background: #aad4ff">Tên sản phẩm</td>
              <td style="background: #aad4ff">Đơn giá</td>
              <td style="background: #aad4ff">Số lượng</td>
              <td style="background: #aad4ff">Thành tiền</td>
            </div>
          </tr>
          <tr>
            <div>
              <td><input type="checkbox"></td>
              <td>1</td>
              <td>Sách Tin học cơ bản</td>
              <td>15000</td>
              <td><input name="txtname" type="text" id="textfield" tabindex="1" size="12" maxlength="25" /></td>
              <td><input style="color: gray" value="0" type="text" id="textfield" tabindex="1" size="12" /></td>
            </div>
          </tr>
          <tr>
            <div>
              <td><input type="checkbox"></td>
              <td>2</td>
              <td>Sách Word</td>
              <td>15000</td>
              <td><input name="txtname" type="text" id="textfield" tabindex="1" size="12" maxlength="25" /></td>
              <td><input style="color: gray" value="0" type="text" id="textfield" tabindex="1" size="12" /></td>
            </div>
          </tr>
          <tr>
            <div>
              <td><input type="checkbox"></td>
              <td>3</td>
              <td>Sách PowerPoint</td>
              <td>15000</td>
              <td><input name="txtname" type="text" id="textfield" tabindex="1" size="12" maxlength="25" /></td>
              <td><input style="color: gray" value="0" type="text" id="textfield" tabindex="1" size="12" /></td>
            </div>
          </tr>
          <tr>
            <div>
              <td><input type="checkbox"></td>
              <td>4</td>
              <td>USB KingStone 2G</td>
              <td>120000</td>
              <td><input name="txtname" type="text" id="textfield" tabindex="1" size="12" maxlength="25" /></td>
              <td><input style="color: gray" value="0" type="text" id="textfield" tabindex="1" size="12" /></td>
            </div>
          </tr>
          <tr>
            <td colspan="4"><input type="submit" name="Gui" value="Nhập lại" style="margin-left: 110px"></td>
            <td>Tổng cộng</td>
            <td><input style="color: gray" value="0" type="text" id="textfield" tabindex="1" size="12" /></td>
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