<?php session_start() ;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PTTK";
$con = mysqli_connect($servername,$username,$password,$dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["mkcu"])) { $mkcu = $_POST['mkcu']; }
    if(isset($_POST["mkmoi"])) { $mkmoi = $_POST['mkmoi']; }
    $query ="select matkhau from sinhvien where msv='".$_SESSION['masinhvien']."'";
    $mk = mysqli_query($con,$query);
    $row = mysqli_fetch_array($mk);
    if ($mkcu != $row['matkhau']) {
        echo "<script type='text/javascript'>alert('Mật khẩu cũ không chính xác.');</script>";
    }
    else
    {
        if($mkmoi!=""){
            $query="update sinhvien set matkhau='".$mkmoi."' where msv='".$_SESSION['masinhvien']."'";    
            if(!mysqli_query($con,$query))
                echo "<script type='text/javascript'>alert('Lỗi khi sửa mật khẩu sinh viên');</script>";
            else {
                
                header('location:dangnhap.php');
                echo "<script type='text/javascript'>alert('Sửa thành công');</script>";
            }
        }
        else
            echo "<script type='text/javascript'>alert('Nhập mật khẩu mới');</script>";
    }
}
?>
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
        <div style="position:absolute;z-index:3;top:3px;right:3px;font-family:'Times New Roman', Times, serif;"><?php echo $_SESSION['masinhvien'] ?> </div>
        <div style="line-height: 90px;background-color: #56a4fe;font-weight: 300;font-family:'Times New Roman', Times, serif;font-size: 18px;color:white;">
            <span >   ĐẠI HỌC THỦY LỢI</span>
        </div> 
        <span style="position:absolute;right:10px;"> 
            <a href="trangchu.php" style="background-color: #56a4fe;color:white;">Home</a>
            <a href="home.php" style="background-color: #56a4fe;color:white;">Đăng xuất</a>
        </span> 
        <h3 style="font-family:'Times New Roman', Times, serif;color:#56a4fe" > Đổi mật khẩu </h3>
        <br><br><br><br>
        <form align="center" style="font-family:'Times New Roman', Times, serif;font-size:17px;" method="post">
        Mật khẩu  cũ :<input type="password" name ="mkcu" values="" size=13><br>
        Mật khẩu mới:<input type="password" name="mkmoi" value="" size=13><br>
        <input type="submit" name="doi" value="Đổi"/>
        </form>
    </body>
</html>