<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Câu 1</title>
    <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/site.css" />
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container">
                <a class="navbar-brand" href="Cau1.php"><b>Ta Quang Huy (19520113)</b></a>
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
            $manhanvien = $_GET['manhanvien'];
            include "connect.php";
            $sql = "SELECT * FROM NHANVIEN WHERE MaNhanVien='$manhanvien'";
            $result = $connect->query($sql);
            if ($result->num_rows > 0)
            {
                $row = $result->fetch_row();
                echo "<form action='updatenhanvien.php' method='POST'><table class='table table-bordered' style='width:60%'>
                    <tbody>
                            <tr>
                                <td>Mã nhân viên</td>
                                <td>
                                    <input type='text' name='manhanvien' value='$row[0]'>
                                </td>
                            </tr>
                            <tr>
                                <td>Tên nhân viên</td>
                                <td>
                                    <input type='text' name='tennhanvien' value='$row[1]'>
                                </td>
                            </tr>
                            <tr>
                                <td>Lương tháng</td>
                                <td>
                                    <input type='text'  name='luong' value='$row[2]'>
                                </td>
                            </tr>
                            <tr>
                                <td>Giới tính</td>
                                <td>";
                if($row[3] == 1) 
                    echo "<input type='checkbox' name='gioitinh' value='1' checked>";
                else 
                    echo "<input type='checkbox' name='gioitinh' value='0'>";
                echo "</td></tr><tr><td>Mã phòng ban</td><td><select name='mapb' id='MaPB'>";
                $sql = "SELECT * FROM PHONGBAN";
                $result = $connect->query($sql);
                if ($result->num_rows > 0)
                {
                    while($phongban = $result->fetch_row())
                    {
                        if($phongban[0] == $row[4])
                            echo "<option value='$phongban[0]' selected>$phongban[0]</option>";
                        else
                            echo "<option value='$phongban[0]'>$phongban[0]</option>";
                    }
                }
                echo "</select></td>
                            </tr>
                            <tr>
                                <td colspan='2' style='text-align: center;'>
                                    <button type='submit'>Cập nhật</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>";    
            }
            else
            {
                echo "Error deleting record: " . $connect->error;
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
    <script src="~/js/site.js" asp-append-version="true"></script>
    <!-- @RenderSection("Scripts", required: false) -->
</body>
</html>
