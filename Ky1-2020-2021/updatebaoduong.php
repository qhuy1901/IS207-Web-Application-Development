<?php
    $MABD = $_POST['MABD'];
    $NGAYTRA = date('Y-m-d');
    $THANHTIEN = $_POST['THANHTIEN'];
    include "connect.php";
    $sql = "UPDATE BAODUONG SET NGAYTRA = '$NGAYTRA', THANHTIEN = '$THANHTIEN' WHERE MABD = '$MABD'";
    $connect->query($sql)
?>