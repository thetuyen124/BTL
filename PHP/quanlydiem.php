<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PTTK";
$con = mysqli_connect($servername,$username,$password,$dbname);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["masv"])) { $title = $_POST['masv']; }
    if(isset($_POST["mamon"])) { $date = $_POST['mamon']; }
    if(isset($_POST["dqt"])) { $description = $_POST['dqt']; }
    if(isset($_POST["dt"])) { $content = $_POST['dt']; }
    
    
    $sql = "asdasd";

    if (mysqli_query($con, $sql)) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
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
        <div style="position:absolute;z-index:3;top:3px;right:3px;font-family:'Times New Roman', Times, serif;">Admin </div>
        <div style="line-height: 90px;background-color: #56a4fe;font-weight: 300;font-family:'Times New Roman', Times, serif;font-size: 18px;color:white;">
            <span >   ĐẠI HỌC THỦY LỢI</span>
        </div> 
        <span style="position:absolute;right:10px;"> 
            <a href="admin.php" style="background-color: #56a4fe;color:white;">Home</a>
            <a href="home.php" style="background-color: #56a4fe;color:white;">Đăng xuất</a>
        </span>
        <h3 style="font-family:'Times New Roman', Times, serif;color:#56a4fe" > Quản lý điểm sinh viên </h3>
        <br><br><br><br><br>
        <form align="center" style="font-family:'Times New Roman', Times, serif;font-size:17px;"  action="" method="post">
            Mã sinh viên: <select name="masv">
                <?php
                    $query= "select * from sinhvien where msv !='admin'";
                    $run=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($run)){
                ?>
                <option><?php echo $row['msv'] ?></option>
                <?php }?>
                </select>
            Mã môn: <select name="mamon">
                <?php
                    $query= "select * from monhoc order by mamon asc";
                    $run=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($run)){
                ?>
                <option><?php echo $row['mamon'] ?></option>
                <?php }?>
                </select>
            Điểm quá trình:<input type="text" id="dqt" name="dqt" value="" size=13/>
            Điểm thi:<input type="text" id="dt" name="dt" value="" size=13/>
            <input type="submit" name="them" value="Thêm"/>
        </form>

        <BR><BR><BR><BR>
        <table align='center' style="width:85%;font-size:16px;" id="t01">
            <thread>
                <tr>
                    <th>STT</th>
                    <th>Mã học phần</th>
                    <th>Tên học phần</th>
                    <th>Số tín chỉ</th>
                    <th>Kỳ học</th>
                    <th>Đánh giá</th>
                    <th>Mã sinh viên</th>
                    <th>Quá trình</th>
                    <th>Thi</th>
                    <th>TKHP</th>
                    <th>Điểm chữ</th>
                </tr>
            </thread>
            <tbody>
                <?php
                    $query1="select *from diem where msv='".$_SESSION['masinhvien']."'";
                    $run=mysqli_query($con,$query1);
                    $i=1;
                    while ($diem=mysqli_fetch_array($run) ){
                        $query2="select mamon,tenmon,sotinchi,kyhoc from monhoc where mamonhoc=".$diem['mamon'];
                        $run2=mysqli_query($con,$query2);
                        $mon=mysqli_fetch_array($run2);
                        $query3="select *from sinhvien where msv=".$diem['msv'];
                        $run3=mysqli_query($con,$query3);
                        $sinhvien=mysqli_fetch_array($run3);
                ?>
                    <tr>
                        <td> <?php echo $i ?> </td>
                        <td> <?php echo $mon['mamon'] ?> </td>
                        <td> <?php echo $mon['tenmon'] ?> </td>
                        <td> <?php echo $mon['sotinchi'] ?> </td>
                        <td> <?php echo $mon['kyhoc'] ?> </td>
                        <td> <?php echo $diem['danhgia'] ?> </td>
                        <td> <?php echo $sinhvien['msv'] ?> </td>
                        <td> <?php echo $diem['diemqt'] ?> </td>
                        <td> <?php echo $diem['diemthi'] ?> </td>
                        <td> <?php echo $diem['tkhp'] ?> </td>
                        <td> <?php echo $diem['diemchu'] ?> </td>
                    </tr>
                    <?php
                        $i++;
                    } 
                    ?>
            </tbody>
        </table>
    </body>
</html>