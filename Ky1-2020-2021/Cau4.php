<form action="updatebaoduong.php" method="POST">
    <b>Thanh toán</b>
    Số xe <select name="MABD" id="SOXE">

    </select>
    Ngày nhận xe <input type="date" name="" id="NGAYNHAN">
    Thành tiền <input type="text" id="ThanhTien" name="THANHTIEN">
    <div class="table-cong-viec"></div>
    <input type="submit" value="Thanh toán">
</form>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script>
    $(document).ready(function(){
        $("input[type=date]").change(function(){
            var NGAYNHAN = $("#NGAYNHAN").val();
            $.ajax({
                method:"GET",
                url: "loadsoxe.php",
                data:{NGAYNHAN: NGAYNHAN},
                success:function(data)
                {
                    $("#SOXE").html(data);
                }
            });
        });
        $("body").on("change", "#SOXE", function(){
            var MABD = $("#SOXE").val();
            $.ajax({
                method:"GET",
                url: "loadcongviec.php",
                data:{MABD: MABD},
                success:function(data)
                {
                    $(".table-cong-viec").html(data);
                    var sum = 0;
                    $(".DonGia").each(function() {
                        sum += Number($(this).text());
                    });
                    $("#ThanhTien").val(sum);
                }
            });
        });
        $("body").on("click", ".xoa-cv", function(){
            var parent = $(this).parents('tr');
            var MACV = parent.find('.MACV').val();
            var MABD = $("#SOXE").val();
            $.ajax({
                method:"GET",
                url: "xoactbd.php",
                data:{MACV: MACV, MABD: MABD},
                success:function()
                {
                    parent.remove();
                }
            });
        });
    });
</script>