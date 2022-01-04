<?php
    $MaChiNhanh = $_GET['MaChiNhanh'];
    Include "connect.php";
    $sql ="SELECT * FROM PhongBan WHERE MaChiNhanh = '$MaChiNhanh'";
    $result = $connect->query($sql);
    echo "Danh sách các phòng ban trong chi nhánh: ";
    echo "<table border='1'><tr><th>STT</th><th>Tên phòng ban</th></tr>";
    $i = 1;
    While($row = $result->fetch_row())
    {
        Echo "<tr><td>$i</td><td>$row[1]</td></tr>";
        $i++;
    }
    echo "</table>";
?>