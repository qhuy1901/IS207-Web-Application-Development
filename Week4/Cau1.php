<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Câu 1</title>
    <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/site.css" />
    <style>
        table{
            width: 40px;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container">
                <a class="navbar-brand" asp-area="" asp-controller="Home" asp-action="Index"><b>Ta Quang Huy (19520113)</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
                    <ul class="navbar-nav flex-grow-1">
                        <!-- <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" asp-controller="Home" asp-action="Index">Trang chủ</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <main role="main" class="pb-3">
        <?php
            include "connect.php";
            $sql = "select * from NHANVIEN";
            $result = $connect->query($sql);
            echo "<table class='table table-bordered' style='width:60%'>";
            echo "<tr><th>STT</th><th>Mã chi nhánh</th><th>Chức năng</th></tr>";
            if ($result->num_rows > 0)
            {
                while($row = $result->fetch_row())
                {
                    echo "<tr>";
                    echo"<td>$row[0]</td><td>$row[1]</td><td><a href='xoanhanvien.php?manhanvien=$row[0]' class='Xoa'>Xóa</a>
                    <a href='viewnhanvien.php?manhanvien=$row[0]' class='View'>View</a></td>";
                    echo "</tr>";
                }
            }
            else
            {
                echo "Không có dòng nào";
            }
            $connect->close();
        ?>
        </main>
    </div>

    <footer class="border-top footer text-muted">
        <div class="container">
            &copy; 2021 - TaQuangHuy_19520113 - <a asp-area="" asp-controller="Home" asp-action="Privacy">Privacy</a>
        </div>
    </footer>
    <script src="lib/jquery/dist/jquery.min.js"></script>
    <script src="lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/site.js" asp-append-version="true"></script>
</body>
</html>