<?php
        $MaNhanVien_Old = $_POST['MaNhanVien_Old'];
        $MaThietBi_Old = $_POST['MaThietBi_Old'];
        $MaCanHo_Old = $_POST['MaCanHo_Old'];
        $LanThu_Old = $_POST['LanThu_Old'];
        $MaThietBi = $_POST['MaThietBi'];
        $MaCanHo = $_POST['MaCanHo'];
        $LanThu = $_POST['LanThu'];
        $NgayBaoTri = $_POST['NgayBaoTri'];
        Include "connect.php";
        $sql = "UPDATE NV_BT 
        SET MaThietBi='$MaThietBi',MaCanHo='$MaCanHo', LanThu=$LanThu, NgayBaoTri='$NgayBaoTri' 
        WHERE MaNhanVien = '$MaNhanVien_Old' AND MaThietBi = '$MaThietBi_Old' AND MaCanHo = '$MaCanHo_Old' AND LanThu =$LanThu_Old";
        echo $sql;
        $result = $connect->query($sql);
?>