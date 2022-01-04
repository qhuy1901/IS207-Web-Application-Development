<?php
    $MaNhanVien = $_POST['MaNhanVien'];
    $TenNhanVien = $_POST['TenNhanVien'];
    $LuongThang = $_POST['LuongThang'];
    $GioiTinh = $_POST['GioiTinh'];
    $MaPhong = $_POST['MaPhong'];
    Include "connect.php";
    $sql = "INSERT INTO NhanVien VALUES('$MaNhanVien', '$TenNhanVien', '$LuongThang', '$GioiTinh', '$MaPhong')";
    $connect->query($sql);
?>
