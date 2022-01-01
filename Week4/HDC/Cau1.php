<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         if(isset($_GET['Submit'])&&($_GET['Submit']=="Thêm"))
         {
             include 'connect.php';
             $macongty= $_GET['ma'];
             $tencongty=$_GET['ten'];
             $diachi= $_GET['diachi'];
             $str = "insert into CONGTY values ('$macongty','$tencongty','$diachi')";
             if($connect->query($str)==true){
                 echo "Thêm thành công";
             }
             else{
                 echo "Thêm không thành công";
             }
             $connect->close();
         }   
    ?>
    <form method="get" action="/Cau1.php">
        <table border="1" cellspacing="0">
            <tr><td>Mã công ty </td><td><input type="input" name="ma"></td></tr>
            <tr><td>Tên công ty </td><td><input type="input" name="ten"></td></tr>
            <tr><td>Địa chỉ </td><td><input type="input" name="diachi"></td></tr>
            <tr>
                <td align="center"><input type="Submit" value="Thêm" name="Submit"></td>
                <td><input type="Reset" value="Reset"></td>
            </tr>
        </table>
       </form>
</body>
</html>

