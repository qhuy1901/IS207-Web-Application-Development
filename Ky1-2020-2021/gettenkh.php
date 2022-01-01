<?php
    $SOXE = $_GET['SOXE'];
    include "connect.php";
    $sql = "SELECT HOTENKH FROM KHACHHANG K JOIN XE X ON K.MAKH = X.MAKH WHERE X.SOXE = '$SOXE'";
    $result = $connect->query($sql);
    $row = $result->fetch_row();
    $connect->close();
    echo $row[0];
?>