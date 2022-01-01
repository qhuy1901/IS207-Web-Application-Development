<?php
    $NGAYNHAN = $_GET['NGAYNHAN'];
    include "connect.php";
    $sql = "SELECT * FROM BAODUONG WHERE NGAYNHAN = '$NGAYNHAN'";
    $result = $connect->query($sql);
    while($row = $result->fetch_row())
    {
        echo "<option value='$row[0]'>$row[5]<option>";
    }
    $connect->close();
?>