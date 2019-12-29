<?php session_start() ?>
<!DOCTYPE html>
<HTML>  
    <HEAD> 
        <meta charset="utf-8">
        <TITLE>
            Dai Hoc Thuy Loi
        </TITLE>
        <link href="layout.css" rel="stylesheet" media="screen,print" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </HEAD>
    
    <BODY BGCOLOR = white> 
        <img style=" position: absolute; z-index: 2;top: 0px;right: 0px;" src="/BTL/image/topright.png"  >
        <div style="position:absolute;z-index:3;top:3px;right:3px;font-family:'Times New Roman', Times, serif;"> <?php echo $_SESSION['masinhvien'] ?> </div>
        <div style="line-height: 90px;background-color: #56a4fe;font-weight: 300;font-family:'Times New Roman', Times, serif;font-size: 18px;color:white;">
            <span >   ĐẠI HỌC THỦY LỢI</span>
        </div> 
        <span style="position:absolute;right:14px;"> 
            <a href ="trangchu.php" style="background-color: #56a4fe;color:white;"> Trang chủ</a>
            |
            <a href="home.php" style="background-color: #56a4fe;color:white;">Đăng xuất</a>
        </span>
        <div >
            <ul style="background:white;width: 250px;padding: 15px;list-style-type: none;text-align: left;font-family:'Times New Roman', Times, serif;font-size:20px;">
                <li><a href='#'>Tra lịch giảng dạy</a></li>
                <li><a href='#'>Chương trình đào tạo</a></li>
                <li><a href='#'>Giảng đường trực tuyến</a></li>
                <li><a href='diem.php'>Tra cứu điểm</a></li>
                <li><a href='#'>Tra cứu học phí</a></li>
            </ul>
        </div>
    </BODY> 
</HTML> 