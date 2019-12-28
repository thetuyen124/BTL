<HTML>  
    <HEAD> 
        <meta charset="utf-8">
        <TITLE>
            Quan ly diem sinh vien
        </TITLE>
        <link href="/BTL/css/layout.css" rel="stylesheet" media="screen,print" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </HEAD>
    
    <BODY BGCOLOR = white> 
        <script language="javascript">
            function chonky(a){
                var re=document.getElementById("hocky");
            }
        </script>
        <script language="javascript">
            function chonloc(a){
            }
        </script>

        <img style=" position: absolute; z-index: 2;top: 0px;right: 0px;" src="/BTL/image/topright.png"  >
        <div id="header">
            <span>    HỆ THỐNG QUẢN LÝ ĐIỂM - ĐẠI HỌC THỦY LỢI</span>
        </div> 
        
        <br><br><br><br><br>
        <span style="position:absolute;right:14px;"> 
            <a href ="trangchu.php" style="background-color: #56a4fe;color:white;"> Trang chủ</a>
            |
            <a href="home.php" style="background-color: #56a4fe;color:white;">Đăng xuất</a>
        </span>
        <br><br>
        <table align="center" style="width: 80%;line-height: 35px;">
            <tr>
                <td class="field" style="width: 150px;" >Mã sinh viên:</td>
                <td class="data" style="width: 187px;"><strong>dakdkasdk</strong></td>
                <td class="field">Họ tên:</td>
                <td class="data"><strong>dakdkasdk</strong></td>
                <td class="field">Trạng thái:</td>
                <td class="data"><strong>dakdkasdk</strong></td>
            </tr>
            <tr>
                <td class="field">Khóa:</td>
                <td class="data"><strong>dakdkasdk</strong></td>
                <td class="field">Ngành:</td>
                <td class="data"><strong>dakdkasdk</strong></td>
                <td class="field">Lớp:</td>
                <td class="data"><strong>59TH3</strong></td>
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
                            <li class="dropdown-header">2019-2020</li>
                            <li><a onclick="chonky(119)">Kỳ 1</a></li>
                            <li><a onclick="chonky(219)">Kỳ 2</a></li>
                            <li class="dropdown-header">2018-2019</li>
                            <li><a onclick="chonky(118)">Kỳ 1</a></li>
                            <li><a onclick="chonky(218)">Kỳ 2</a></li>
                        </ul>
                    </div>
                </td>
                <td class="field">Lọc</td>
                <td>
                    <div class="dropdown" style="width: 228px;">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Lọc
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a chonloc(1)>Hiển thị tất cả học phần có điểm</a></li>
                          <li><a chonloc(2)>Hiển thị những môn đã đạt</a></li>
                          <li><a chonloc(3)>Hiển thị những môn chưa đạt</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        </table>
    </BODY> 
</HTML> 