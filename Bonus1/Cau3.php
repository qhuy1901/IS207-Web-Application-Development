<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Tên chi nhánh <select id="MaChiNhanh" id="MaChiNhanh">
    <?php
        Include "connect.php";
        $sql = "SELECT * FROM CHINHANH";
        $result = $connect->query($sql);
        While($row = $result->fetch_row())
        {
            Echo "<option value='$row[0]'>$row[1]</option>";
        }
    ?>
    </select>   
    Tên phòng ban <select id="MaPhong" name ="MaPhong">

    </select>
    Mã nhân viên <input type="text" id ="MaNhanVien"/>
    Tên nhân viên <input type="text" id ="TenNhanVien"/>
    Lương <input type="text" id ="LuongThang"/>
    Giới tính <input type="checkbox" id="GioiTinh"/>
    <button type="button" id="Them">Thêm</button>
    <div id="ThongBao"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#Them").click(function(){
            var MaPhong = $("#MaPhong").val();
            var MaNhanVien = $("#MaNhanVien").val();
            var LuongThang = $("#LuongThang").val();
            var TenNhanVien = $("#TenNhanVien").val();
            var GioiTinh = 0;
            if ($('#GioiTinh').is(":checked"))
            {
                GioiTinh = 1;
            }
            $.ajax({
                url: "themnhanvien.php",
                method:"POST",
                data:{MaPhong: MaPhong, MaNhanVien:MaNhanVien, LuongThang:LuongThang, TenNhanVien: TenNhanVien, GioiTinh:GioiTinh},
                success:function()
                {
                    $("#ThongBao").append("<b>Thêm nhân viên thành công!</b>");
                }
            });
        });
        $("#MaChiNhanh").change(function(){
            var MaChiNhanh = $("#MaChiNhanh").val();
            $.ajax({
                url:"loadcbbphongban.php",
                method:"GET",
                data:{MaChiNhanh:MaChiNhanh},
                success:function(data)
                {
                    $("#MaPhong").html(data);
                }
            });
        });
    });
    </script>
</body>
</html>