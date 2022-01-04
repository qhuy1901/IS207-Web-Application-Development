<?php
    $MaChiNhanh = $_GET['MaChiNhanh'];
    Include "connect.php";
    $sql ="SELECT * FROM PhongBan WHERE MaChiNhanh = '$MaChiNhanh'";
    $result = $connect->query($sql);
    While($row = $result->fetch_row())
    {
        Echo "<option value='$row[0]'>$row[1]</option>";
    }
?>
