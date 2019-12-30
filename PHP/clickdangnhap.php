<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PTTK";
$con = mysqli_connect($servername,$username,$password,$dbname);
if (!$con)
    echo "<script type='text/javascript'>alert('connect false');</script>";
$user = addslashes($_POST['textus']);
$pass = addslashes($_POST['textpw']);
if($user==""||$pass=="")
    echo "<script type='text/javascript'>alert('Vui lòng nhập đầy đủ tài khoản mật khẩu.');</script>";
else{
    $query ="SELECT msv, matkhau FROM sinhvien where msv='".$user."'";
    $retval = mysqli_query($con,$query);
    if (mysqli_num_rows($retval) == 0) {
        echo "<script type='text/javascript'>alert('Tên đăng nhập không tồn tại.');</script>";
    }
    else{
        $row = mysqli_fetch_array($retval);
        if ($pass != $row['matkhau']) {
            echo "<script type='text/javascript'>alert('Mật khẩu không chính xác.');</script>";
        }
        else{
            $_SESSION['masinhvien']=$user;
            if($user=='admin')
                header('location:admin.php');
            else
                header('location:trangchu.php');
        }
    }
}
?>