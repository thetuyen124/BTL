<?php
if (isset($_POST['dangnhap'])) 
{require('clickdangnhap.php');}
?>
<!DOCTYPE html>
<HTML>  
    <HEAD> 
        <TITLE>
            Dang nhap
        </TITLE>
        <link href="/BTL/css/layout.css" rel="stylesheet" media="screen,print" />
        
    
    </HEAD>
    <meta charset="utf8">
    <BODY BGCOLOR = white> 
        <img style=" position: absolute; z-index: 2;top: 0px;right: 0px;" src="/BTL/image/topright.png" width ="25%" />
        <div id="header">
                <span>    HỆ THỐNG QUẢN LÝ ĐIỂM - ĐẠI HỌC THỦY LỢI</span>
        </div>  
        <img id="login" style=" z-index: -1;width: 600px;left: 30%;" src="/BTL/image/login.png" />
        <form id ="login" style="left: 40%;" action='dangnhap.php?do=login' method='POST'>
                <br><br><br><br><br>
            <p>Tài khoản: <input type="text" id="user" name="textus" value="" size="30" /></p>
            <p>Mật khẩu : <input type="password" id="pass" name="textpw" value="" size="30" /></p>
            <p>
                <input type="submit" name="dangnhap" value="Đăng nhập" />
                <a style="left: 5px;" href = "/BTL/php/qenmk.html" target = "_self">[Quên mật khẩu]</a>
            </p>
        </form>
    </BODY> 
</HTML> 