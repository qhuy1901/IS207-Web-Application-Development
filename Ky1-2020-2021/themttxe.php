<?php
    $SOXE = $_POST['SOXE'];
    $HANGXE = $_POST['HANGXE'];
    $NAMSX = $_POST['NAMSX'];
    $MAKH = $_POST['MAKH'];
    include "connect.php";
    $sql = "INSERT INTO XE VALUE('$SOXE','$HANGXE','$NAMSX', '$MAKH')";
    if ($connect->query($sql) === TRUE)
    {
        echo "Thêm XE thành công";
    }
    // else
    // {
    //     echo "Error deleting record: " . $connect->error;
    // }
    $connect->close();
?>