<b>Thêm bảo dưỡng</b>
<form action="thembd.php" method="POST">
    Số xe <input type="text" name="SOXE" id="SOXE" placeholder="51H-XXX.XX">
    Họ tên khách hàng <input type="text" id="HOTENKH" placeholder="Trần Anh Hùng">
    Mã bảo dưỡng <input type="text" name="MABD" placeholder="BD001">
    Số KM <input type="text"name="SOKM" placeholder="20000">
    Nội dung <input type="text" name="NOIDUNG" placeholder="Bảo dưỡng 20000">
    <input type="submit" value="Thêm">
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script>
    $(document).ready(function(){
        $('#SOXE').change(function(){
            var SOXE = $('#SOXE').val();
            $.ajax({
                url: 'gettenkh.php',
                type: 'GET',
                data:{SOXE: SOXE},
                success:function(result){
                    $('#HOTENKH').val(result);
                }
            });
        });
    });
</script>