<?php
    $MABD = $_GET['MABD'];
    include "connect.php";
    $sql = "SELECT CV.MACV, TENCV, DONGIA FROM CT_BD JOIN CONGVIEC CV ON CT_BD.MACV = CV.MACV WHERE MABD = '$MABD'";
    $result = $connect->query($sql);
    $output = "<table border=1><tr><th>Tên công việc</th><th>Đơn giá</th><th>Chức năng</th></tr>";
    while($row = $result->fetch_row())
    {
        $output.= "<tr><td>$row[1]</td><td class='DonGia'>$row[2]</td>";
        $output.= "<td><button type='button' class='xoa-cv'>Xóa</button><input type='hidden' class='MACV' value='$row[0]'></td></tr>";
    }
    $output .= "</table>";
    $connect->close();
    echo $output;
?>