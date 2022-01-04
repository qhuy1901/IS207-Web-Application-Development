<?php
        $MaNhanVien = $_GET['MaNhanVien'];
        Include "connect.php";
        $sql = "SELECT * FROM NV_BT WHERE MaNhanVien = '$MaNhanVien'";
        $result = $connect->query($sql);
        echo "Danh sách thiết bị của nhân viên được chọn sửa";
        echo "<table border='1'><tr><th>Mã thiết bị</th><th>Mã căn hộ</th><th>Lần thứ</th><th>Ngày bảo trì</th><th>Chức năng</th></tr>";
        While($row = $result->fetch_row())
        {
            Echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td><a href='Cau3d.php?MaNhanVien=$row[0]&MaThietBi=$row[1]&MaCanHo=$row[2]&LanThu=$row[3]'>Xem</a></td></tr>";
        }
        echo "</table>";
    ?>