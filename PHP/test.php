<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $_POST['ngaysinh'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <form align="center" style="font-family:'Times New Roman', Times, serif;font-size:17px;"  action="" method="post">
            Mã sinh viên:<input type="text" name="msv" value="" size=13>
            Họ tên:<input type="text" name="hoten" value="" size=13>
            Lớp:<input type="text" name="lop" value="" size=13><br><br>
            Giới tính:<select name="gioitinh">
                <option>Nam</option>
                <option>Nữ</option>
            </select>
            Ngày sinh:<input type="date" name="ngaysinh" value="" size=6>
            Khóa học:<select>
                <?php
                    $query= "select * from khoahoc";
                    $run=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($run)){
                ?>
                <option><?php echo $row['makhoahoc'] ?></option>
                <?php }?>
            </select>
            Mã ngành:<select>
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
    </body>
</html>