<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PTTK";
$con = mysqli_connect($servername,$username,$password,$dbname);
mysqli_query($con,'SET NAMES UTF8');//khi truy xuất dữ liệu lên web không bị lỗi font tiếng việt
$query="select idsv, hoten,trangthai,idkhoahoc,idnganh,lop from sinhvien where msv='".$_SESSION['masinhvien']."'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_array($run);
$_SESSION['idsv']=$row['idsv'];
$_SESSION['hoten']=$row['hoten'];
$_SESSION['trangthai']=$row['trangthai'];
$_SESSION['khoahoc']=(int)$row['idkhoahoc'];
$_SESSION['nganhhoc']=(int)$row['idnganh'];
$_SESSION['lop']=$row['lop'];
$query1="select * from khoahoc where idkhoahoc='".$_SESSION['khoahoc']."'";
$run1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($run1);
$_SESSION['khoahoc']=$row1['makhoahoc'];
$query2="select * from nganhhoc where idnganh='".$_SESSION['nganhhoc']."'";
$run2=mysqli_query($con,$query2);
$row2=mysqli_fetch_array($run2);
$_SESSION['nganhhoc']=$row2['tennganh'];
?>