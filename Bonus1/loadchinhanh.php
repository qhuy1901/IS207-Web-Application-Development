<?php
    $MaCongTy = $_GET['MaCongTy'];
    Include "connect.php";
    $sql ="SELECT * FROM CHINHANH WHERE MaCongTy = '$MaCongTy'";
    $result = $connect->query($sql);
    echo "Tên chi nhánh: <br>";
    While($row = $result->fetch_row())
    {
        Echo "<input type='radio' name='MaChiNhanh' value='$row[0]'>$row[1]<br>";
    }
?>