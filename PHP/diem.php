<?php
    session_start() ;
    include('givaosession.php');
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "PTTK";
    $con = mysqli_connect($servername,$username,$password,$dbname);
    mysqli_query($con,'SET NAMES UTF8');//khi truy xuất dữ liệu lên web không bị lỗi font tiếng việt
?>
<HTML>  
    <HEAD> 
        <meta charset="utf-8">
        <TITLE>
            Quan ly diem sinh vien
        </TITLE>
        <link href="layout.css" rel="stylesheet" media="screen,print" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </HEAD>
    
    <BODY BGCOLOR = white> 
        <script language="javascript">
            function chonky(a){
                <?php 

                ?>
            }
        </script>
        <script language="javascript">
            function chonloc(a){
            }
        </script>

        <img style=" position: absolute; z-index: 2;top: 0px;right: 0px;" src="/BTL/image/topright.png"  >
        <div style="position:absolute;z-index:3;top:3px;right:3px;font-family:'Times New Roman', Times, serif;"> <?php echo $_SESSION['masinhvien'] ?> </div>
        <div id="header">
            <span>    HỆ THỐNG QUẢN LÝ ĐIỂM - ĐẠI HỌC THỦY LỢI</span>
        </div> 

        
        <span style="position:absolute;right:14px;"> 
            <a href ="trangchu.php" style="background-color: #56a4fe;color:white;"> Trang chủ</a>
            |
            <a href="home.php" style="background-color: #56a4fe;color:white;">Đăng xuất</a>
        </span>
        <br><br>
        <table align="center" style="width: 80%;line-height: 35px;">
            <tr>
                <td class="field" style="width: 150px;" >Mã sinh viên:</td>
                <td class="data" style="width: 187px;"><strong><?php echo $_SESSION['masinhvien'] ?></strong></td>
                <td class="field">Họ tên:</td>
                <td class="data"><strong><?php echo $_SESSION['hoten'] ?></strong></td>
                <td class="field">Trạng thái:</td>
                <td class="data"><strong><?php echo $_SESSION['trangthai'] ?></strong></td>
            </tr>
            <tr>
                <td class="field">Khóa:</td>
                <td class="data"><strong><?php echo $_SESSION['khoahoc'] ?></strong></td>
                <td class="field">Ngành:</td>
                <td class="data"><strong><?php echo $_SESSION['nganhhoc'] ?></strong></td>
                <td class="field">Lớp:</td>
                <td class="data"><strong><?php echo $_SESSION['lop'] ?></strong></td>
            </tr>
        </table>
        <table align="center" style="width: 80%;line-height: 35px;">
            <tr>
                <td class="field" style="width: 12.2%;">Chọn học kỳ:</td>
                <td>
                    <div class="dropdown" style="width: 52.812489px;">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Kỳ học
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a onclick="chonky(1)">Kỳ 1</a></li>
                            <li><a onclick="chonky(2)">Kỳ 2</a></li>
                            <li><a onclick="chonky(3)">Kỳ 3</a></li>
                            <li><a onclick="chonky(4)">Kỳ 4</a></li>
                            <li><a onclick="chonky(5)">Kỳ 5</a></li>
                            <li><a onclick="chonky(6)">Kỳ 6</a></li>
                            <li><a onclick="chonky(7)">Kỳ 7</a></li>
                            <li><a onclick="chonky(8)">Kỳ 8</a></li>
                        </ul>
                    </div>
                </td>
                <td class="field">Lọc</td>
                <td>
                    <div class="dropdown" style="width: 228px;">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Lọc
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a onclick= "chonloc(1)">Hiển thị tất cả học phần có điểm</a></li>
                          <li><a onclick= "chonloc(2)">Hiển thị những môn đã đạt</a></li>
                          <li><a onclick= "chonloc(3)">Hiển thị những môn chưa đạt</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        </table>
        <br><br><br>
        <table align='center' style="width:85%;font-size:14px;" id="t01">
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
                    $query1="select *from diem where fksv='".$_SESSION['idsv']."'";
                    $run=mysqli_query($con,$query1);
                    $n=mysqli_num_rows($run);
                    $i=1;
                    while ($diem=mysqli_fetch_array($run) ){
                        $query2="select mamon,tenmon,sotinchi,kyhoc from monhoc where idmonhoc=".$diem['fkmon'];
                        $run2=mysqli_query($con,$query2);
                        $mon=mysqli_fetch_array($run2);
                        $query3="select *from sinhvien where idsv=".$diem['fksv'];
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
    </BODY> 
</HTML> 