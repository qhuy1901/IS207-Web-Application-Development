<b>Thêm thông tin xe khách hàng</b>
<form action="themttxe.php" method="post">
    Họ tên khách hàng
    <?php 
        include "connect.php";
        $sql = "SELECT * FROM KHACHHANG;";
        echo '<select name="MAKH" id="MAKH">';
        $result = $connect->query($sql);
        while ($row = $result->fetch_row()) {
            echo "<option value=".$row[0].">".$row[1]."</option>";
        }
        echo '</select>';
    ?><br>
    Số xe <input name="SOXE" type="text" placeholder="51H-XXX.XX"><br>
    Hãng xe <select name="HANGXE" id="HANGXE" multiple>
        <option value="Toyota">Toyota</option>
        <option value="BMW">BMW</option>
        <option value="Audi">Audi</option>
    </select><br>
    Năm sản xuất <input name="NAMSX" type="text" placeholder="2020"><br>
    <input type="submit" value="Thêm">
</form>
