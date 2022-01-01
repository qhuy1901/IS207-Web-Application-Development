<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Câu 1</title>
    <style>
        table, tr, td{
            border: 1px solid black;
        }
        table{
            border-collapse: collapse;
           
        }
    </style>
</head>
<body>
    <form method="get" action="#">
        <table>
            <tr>
                <td>Hệ số a</td>
                <td>
                    <input type="input" name="a"><br><br>
                </td>
            </tr>
            
            <tr>
                <td>Hệ số b</td>
                <td>
                    <input type="input" name="b"><br><br>
                </td>
            </tr>

            <tr>
                <td>Hệ số c</td>
                <td>
                    <input type="input" name="c"><br><br>
                </td>
            </tr>

            <tr>
                <td colspan="2" style=" text-align:center;">
                    <input type="Submit" value="Giải" name="Submit">
                </td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_GET['Submit'])&&($_GET['Submit']=="Giải"))
        {
            $a= $_GET['a'];
            $b= $_GET['b'];
            $c= $_GET['c'];
            $delta = ((float)$b)*((float)$b) - 4 * (float)$a * (float)$c;
            if($delta < 0)
                echo "Phương trình vô nghiệm.";
            else if($delta == 0)
            {
                $x = -((float)$b)/ (2 * (float)$a);
                echo "Phương trình có nghiệm kép x = ". $x . "<br>";
            }
            else
            {
                $x1 = (-((float)$b) + sqrt($delta)) / (2 * (float)$a);
                $x2 = (-((float)$b) - sqrt($delta)) / (2 * (float)$a);
                echo "Phương trình có 2 nghiệm phân biệt: <br>";
                echo "x1 = ". $x1 . "<br>";
                echo "x2 = ". $x2 . "<br>";
            }
        }
    ?>
</body>
</html>