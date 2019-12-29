<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PTTK";
$con = mysqli_connect($servername,$username,$password,$dbname);
mysqli_query($con,'SET NAMES UTF8');//khi truy xuất dữ liệu lên web không bị lỗi font tiếng việt
 
if(!$con){
 
   die('Ket noi that bai:'.mysqli_connect_error());
 
}else{
 
    echo"Ket noi thanh cong";
 
}
 
?>