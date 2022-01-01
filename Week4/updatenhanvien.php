<?php
    $manhanvien = $_POST['manhanvien'];
    $tennhanvien = $_POST['tennhanvien'];
    $luong = (int)$_POST['luong'];
    $gioitinh = (int)$_POST['gioitinh'];
    $mapb = $_POST['mapb'];
    include "connect.php";
    $sql = "UPDATE NHANVIEN SET TenNhanVien='$tennhanvien', GioiTinh='$gioitinh', MaPhong='$mapb', LuongThang = '$luong' WHERE MaNhanVien='$manhanvien'";
    if ($connect->query($sql) === TRUE)
    {
        echo "Cập nhật thông tin nhân viên thành công";
        echo $gioitinh;
        echo  $mapb;
        echo $luong;
    }
    else
    {
        echo "Error deleting record: " . $connect->error;
    }
    $connect->close();
?>