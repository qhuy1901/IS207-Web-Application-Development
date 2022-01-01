<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Câu 1</title>
</head>
<body>
    <form method="get" action="#">
        <input type="input" name="chieudai"><br><br>
        <input type="input" name="chieurong"><br><br>
        <input type="Submit" value="Tính" name="Submit">
    </form> 
    <?php
        if(isset($_GET['Submit'])&&($_GET['Submit']=="Tính"))
        {
            $dai= $_GET['chieudai'];
            $rong= $_GET['chieurong'];
            $dientich= (float)$dai * (float)$rong;
            $chuvi = ((float)$dai+(float)$rong)*2;
            echo "Diện tích:".$dientich."<br>";
            echo "Chu vi:".$chuvi;
        }
    ?>
</body>
</html>