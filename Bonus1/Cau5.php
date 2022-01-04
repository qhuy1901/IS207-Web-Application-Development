<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Tên công ty <select id="MaCongTy" name="MaCongTy">
    <?php
        Include "connect.php";
        $sql = "SELECT * FROM CONGTY";
        $result = $connect->query($sql);
        While($row = $result->fetch_row())
        {
            Echo "<option value='$row[0]'>$row[1]</option>";
        }
    ?>
    </select>
    <div id="ChiNhanh"></div>
    <div id="tablephongban"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#MaCongTy").change(function(){
            var MaCongTy = $("#MaCongTy").val();
            $.ajax({
                url:"loadchinhanh.php",
                method:"GET",
                data:{MaCongTy:MaCongTy},
                success:function(data)
                {
                    $("#ChiNhanh").html(data);
                    $("#tablephongban").empty();
                }
            });
        });
        $('body').on('change','input[type=radio][name=MaChiNhanh]', function(){
            var MaChiNhanh = $(this).val();
            $.ajax({
                url:"loadtablephongban.php",
                method:"GET",
                data:{MaChiNhanh:MaChiNhanh},
                success:function(data)
                {
                    $("#tablephongban").html(data);
                }
            });
        });
    });
    </script>
</body>
</html>