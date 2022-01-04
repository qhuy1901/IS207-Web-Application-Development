<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="updatebaoduong.php" method="POST">
        <?php
            $MaNhanVien = $_GET['MaNhanVien'];
            $MaThietBi = $_GET['MaThietBi'];
            $LanThu = $_GET['LanThu'];
            $MaCanHo = $_GET['MaCanHo'];
            Include "connect.php";
            $sql = "SELECT * FROM NV_BT WHERE MaNhanVien = '$MaNhanVien' AND MaThietBi='$MaThietBi' AND MaCanHo='$MaCanHo' AND LanThu=$LanThu";
            $result = $connect->query($sql);
            if($row = $result->fetch_row())
            {
                // Dữ liệu dùng để xem và sửa
                echo "Mã thiết bị <input type='text' name='MaThietBi' value='$row[1]'>";
                echo "Mã căn hộ <input type='text' name='MaCanHo' value='$row[2]'>";
                echo "Lần sửa <input type='text' name='LanThu' value='$row[3]'>";
                echo "Ngày sửa <input type='date' name='NgayBaoTri' value='$row[4]'>";

                // Dữ liệu cũ dùng để cập nhật
                echo "<input type='hidden' name='MaNhanVien_Old' value='$row[0]'>";
                echo "<input type='hidden' name='MaThietBi_Old' value='$row[1]'>";
                echo "<input type='hidden' name='MaCanHo_Old' value='$row[2]'>";
                echo "<input type='hidden' name='LanThu_Old' value='$row[3]'>";
            }
        ?>
        <input type="submit" value="Update"/>
    </form>
</body>
</html>

