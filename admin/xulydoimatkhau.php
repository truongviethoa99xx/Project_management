<?php
 
include '../config/xuly.php';
 
$old_pass = $_POST['txtOldpass'];
$old_pass = md5($old_pass);
$new_pass = $_POST['txtNewpass'];
$re_new_pass = $_POST['txtNhaplai'];
 
$id = $_GET['id'];
$query = "SELECT * FROM admin WHERE ID = '$id'" ;
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        $i = 0;
        while ($r = mysqli_fetch_assoc($result)){
        $i++;
        $matkhau =$r['MatKhau'];
        }
    }
// so sánh mật khẩu cũ nhập vào có đúng hay không
if ($old_pass != $matkhau)
{
?>
<script type="text/javascript">
   alert("Mật khẩu cũ sai mời nhập lại, đảm bảo đã tắt caps lock!!");
   window.location = "index.php?mod=doimatkhau&id=<?php echo $id; ?>";
</script>
<?php
}
// độ dài mật khẩu
else if (strlen($new_pass) < 8)
{
?>
<script type="text/javascript">
   alert("Mật khẩu quá ngắn, hãy thử với mật khẩu khác an toàn hơn!!");
   window.location = "index.php?mod=doimatkhau&id=<?php echo $id; ?>";
</script>
<?php
}
// kiểm tra mật khẩu mới với cái nhập lại
else if ($new_pass != $re_new_pass)
{
?>
<script type="text/javascript">
   alert("Nhập lại mật khẩu mới không khớp, đảm bảo đã tắt caps lock!!");
   window.location = "index.php?mod=doimatkhau&id=<?php echo $id; ?>";
</script>
<?php
}
// nếu đúng thì update mat khau mới và show lên dòng đổi mk thành công
else
{
    $new_pass = md5($new_pass); 
    $sql_change_pass = "UPDATE admin SET MatKhau = '$new_pass' WHERE ID = '$id'";
    // echo $sql_change_pass;
    // return;
    mysqli_query($conn, $sql_change_pass);
?>
<script type="text/javascript">
   alert("Đổi mật khẩu thành công! Mời bạn đăng nhập lại!!");
   window.location = "../index.html";
</script>
<?php
}
 
?>