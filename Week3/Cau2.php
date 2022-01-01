<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3 - Câu 2</title>
</head>
<body>
    <form method="get" acction="#">
        Nhập tên cần tìm <input type="text" name="tencantim"><br><br>
        <input type="Submit" name="Tim" value="Tìm">
    </form>

    <?php
        function InMang($array){
            foreach($array as $ten => $tuoi)
            {
                echo $ten."\t".$tuoi."<br>";
            }
        }
        function TimTen($array, $str)
        {
            foreach($array as $ten => $tuoi)
            {
                if($ten==$str)
                {
                    return true;
                }
            }
            return false;
        }

        function XuatTuoiLonHon20($array)
        {
            echo "<h3>Xuất tên các bạn có tuổi lớn hơn 20</h3>";
            foreach($array as $ten => $tuoi)
            {
                if($tuoi > 20)
                {
                    echo $ten."\t".$tuoi."<br>";
                }
            }
        }

        function SapXepTangDan($array)
        {
            echo "<h3>Sắp xếp mảng một chiều tăng dần theo tuổi</h3>";
            asort($array);
            foreach($array as $ten => $tuoi)
            {
                echo $ten."\t".$tuoi."<br>";
            }
        }

        function ThemPhanTu($array)
        {
            echo "<h3>Thêm một phần tử vào cuối danh mảng</h3>";
            
        }
    ?>

    <?php
        $ban=array("Tuấn"=>21,"Tú"=>19,"Tâm"=>22,"Tùng"=>20);
        if(isset($_GET['Tim'])&&($_GET['Tim']=="Tìm"))
        {
            $ten = $_GET['tencantim'];
            if(TimTen($ban,$ten)==true)
            {
                echo "Tìm thấy ".$ten." trong mảng<br>";
            }
            else
            {
                echo "Tìm không thấy <br>";
            }
            echo "<h3>Xuất mảng</h3>";
            InMang($ban);
            XuatTuoiLonHon20($ban);
            SapXepTangDan($ban);

        }
    ?>
</body>
</html>