<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PTTK";
$con = mysqli_connect($servername,$username,$password,$dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["msv"])) { $msv = $_POST['msv']; }
    if(isset($_POST["hoten"])) { $hoten = $_POST['hoten']; }
    if(isset($_POST["lop"])) { $lop = $_POST['lop']; }
    if(isset($_POST["gioitinh"])) { $gioitinh = $_POST['gioitinh']; }
    if(isset($_POST["ngaysinh"])) { $ngaysinh = $_POST['ngaysinh']; }
    if(isset($_POST["khoahoc"])) { $makhoahoc = $_POST['khoahoc']; }
    if(isset($_POST["nganh"])) { $manganh = $_POST['nganh']; }
    $query="insert into sinhvien(msv,hoten,lop,gioitinh,ngaysinh,trangthai,manganh,makhoahoc,matkhau) values('".$msv."',N'".$hoten."','".$lop."',N'".$gioitinh."','".$ngaysinh."','Đang học','".$manganh."','".$makhoahoc."','".$ngaysinh."')";
    if(!mysqli_query($con,$query))
        echo "<script type='text/javascript'>alert('Lỗi khi thêm sinh viên');</script>";
    else
        echo "<script type='text/javascript'>alert('Thêm thành công');</script>";
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
        <div style="position:absolute;z-index:3;top:3px;right:3px;font-family:'Times New Roman', Times, serif;">Admin </div>
        <div style="line-height: 90px;background-color: #56a4fe;font-weight: 300;font-family:'Times New Roman', Times, serif;font-size: 18px;color:white;">
            <span >   ĐẠI HỌC THỦY LỢI</span>
        </div> 
        <span style="position:absolute;right:10px;"> 
            <a href="admin.php" style="background-color: #56a4fe;color:white;">Home</a>
            <a href="home.php" style="background-color: #56a4fe;color:white;">Đăng xuất</a>
        </span>
        <script type="text/javascript">
            function xoa(){
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    if(isset($_GET["dlmsv"])) { $msv = $_GET['dlmsv']; }
                    $query="delete from sinhvien where msv='".$msv."'";
                    if(!mysqli_query($con,$query));
                    echo "<script type='text/javascript'>alert('Lỗi khi xóa sinh viên');</script>";
                }
            ?>
            }
            </script>
        <h3 style="font-family:'Times New Roman', Times, serif;color:#56a4fe" > Thêm sinh viên </h3>
        <br><br>
        <form align="center" style="font-family:'Times New Roman', Times, serif;font-size:17px;"  action="" method="post">
            Mã sinh viên:<input type="text" name="msv" value="" size=13>
            Họ tên:<input type="text" name="hoten" value="" size=13>
            Lớp:<input type="text" name="lop" value="" size=13><br><br>
            Giới tính:<select name="gioitinh">
                <option>Nam</option>
                <option>Nữ</option>
            </select>
            Ngày sinh:<input type="date" name="ngaysinh" value="" size=6>
            Khóa học:<select name="khoahoc">
                <option>k57</option>
                <option>k58</option>
                <option>k59</option>
                <option>k60</option>
                <option>k61</option>
            </select>
            Mã ngành:<select name="nganh">
            <?php
                    $query= "select * from nganhhoc";
                    $run=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($run)){
            ?>
                <option><?php echo $row['manganh'] ?></option>
            <?php }?>
            </select>
            <input type="submit" name="them" value="Thêm"/>
        </form>
        
        <h3 style="font-family:'Times New Roman', Times, serif;color:#56a4fe;" > Xóa sinh viên </h3>
        <br><br>
        <form align="center" style="font-family:'Times New Roman', Times, serif;font-size:17px;">
            Mã sinh viên:<select name="dlmsv">
            <?php
                $query= "select * from sinhvien where msv!= 'admin' and trangthai=N'Đang học'";
                $run=mysqli_query($con,$query);
                while($row=mysqli_fetch_array($run)){
            ?>
            <option><?php echo $row["msv"]?></option>
                <?php }?>
            </select>
            <input type="submit" name="xoa" onclick="return xoa()" value="Xóa"/>
        </form>
        <br><br><br>
        <table align='center' style="width:85%;font-size:16px;" id="t01">
            <thread>
                <tr>
                    <th>STT</th>
                    <th>Mã Sinh viên</th>
                    <th>Họ tên</th>
                    <th>Lớp</th>
                    <th>Giới tính</th>
                    <th>Ngày sinh</th>
                    <th>Trạng thái </th>
                    <th>Mã khóa học</th>
                </tr>
            </thread>
            <tbody>
                <?php
                    $query1="select *from sinhvien where msv!='admin'";
                    $run=mysqli_query($con,$query1);
                    $i=1;
                    while ($sinhvien=mysqli_fetch_array($run) ){
                ?>
                    <tr>
                        <td> <?php echo $i ?> </td>
                        <td> <?php echo $sinhvien['msv'] ?> </td>
                        <td> <?php echo $sinhvien['hoten'] ?> </td>
                        <td> <?php echo $sinhvien['lop'] ?> </td>
                        <td> <?php echo $sinhvien['gioitinh'] ?> </td>
                        <td> <?php echo $sinhvien['ngaysinh'] ?> </td>
                        <td> <?php echo $sinhvien['trangthai'] ?> </td>
                        <td> <?php echo $sinhvien['makhoahoc'] ?> </td>
                    </tr>
                    <?php
                        $i++;
                    } 
                    ?>
            </tbody>
        </table>
    </body>
</html>