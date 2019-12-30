<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PTTK";
$con = mysqli_connect($servername,$username,$password,$dbname);
mysqli_query($con,'SET NAMES UTF8');//khi truy xuất dữ liệu lên web không bị lỗi font tiếng việt
$query="select hoten,trangthai,makhoahoc,manganh,lop from sinhvien where msv='".$_SESSION['masinhvien']."'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_array($run);
$_SESSION['hoten']=$row['hoten'];
$_SESSION['trangthai']=$row['trangthai'];
$_SESSION['khoahoc']=$row['makhoahoc'];
$_SESSION['nganhhoc']=$row['manganh'];
$_SESSION['lop']=$row['lop'];
$query2="select * from nganhhoc where manganh='".$_SESSION['nganhhoc']."'";
$run2=mysqli_query($con,$query2);
$row2=mysqli_fetch_array($run2);
$_SESSION['nganhhoc']=$row2['tennganh'];
?>