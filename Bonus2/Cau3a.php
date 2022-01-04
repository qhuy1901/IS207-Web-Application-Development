<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Tên nhân viên <select id="MaNhanVien" id="MaNhanVien">
    <?php
        Include "connect.php";
        $sql = "SELECT * FROM NHANVIEN";
        $result = $connect->query($sql);
        While($row = $result->fetch_row())
        {
            Echo "<option value='$row[0]'>$row[1]</option>";
        }
    ?>
    </select>
    <button type="button" id="LietKe">Liệt kê</button>
    <div id="tablethietbi"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#LietKe").click(function(){
                var MaNhanVien = $("#MaNhanVien").val();
                $.ajax({
                    url:"loadtablethietbi.php",
                    method: "GET",
                    data:{MaNhanVien: MaNhanVien},
                    success:function(data)
                    {
                        $("#tablethietbi").html(data);
                    }
                });
            });
        });
    </script>    
</body>
</html>