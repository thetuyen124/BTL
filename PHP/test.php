<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body><table align='center' style="width:85%;font-size:14px;" id="t01">
            <thread>
                <tr>
                    <th>STT</th>
                </tr>
            </thread>
            <tbody>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "PTTK";
                    $con = mysqli_connect($servername,$username,$password,$dbname);
                    $query="select * from sinhvien";
                    $run=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($run)){
                ?>
                    <tr>
                        <td> <?php echo $row['msv'] ?> </td>
                    </tr>
                    <?php
                    } 
                    ?>
            </tbody>
        </table>
    </body>
</html>