<?php
header('Content-Type: text/html; charset=UTF-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$con = mysqli_connect($servername,$username,$password,$dbname);
$username = addslashes($_POST['textus']);
$password = addslashes($_POST['textpw']);
if($username==""||$password=="")
    echo "<script type='text/javascript'>alert('Vui lòng nhập đầy đủ tài khoản mật khẩu.');</script>";
else{
    $query ="SELECT id, pass FROM dn where id='".$_POST['textus']."'";
    $retval = mysqli_query($con,$query);
    if (mysqli_num_rows($retval) == 0) {
        echo "<script type='text/javascript'>alert('Tên đăng nhập không tồn tại.');</script>";
    }
    else{
        $row = mysqli_fetch_array($retval);
        if ($password != $row['pass']) {
            echo "<script type='text/javascript'>alert('Mật khẩu không chính xác.');</script>";
        }
        else{
            header('location:trangchu.php');
        }
    }
}
?>