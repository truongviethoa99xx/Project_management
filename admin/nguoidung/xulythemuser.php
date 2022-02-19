<?php

include '../../config/xuly.php';

$id = $_GET['id'];
$hoten = $_POST['txtHoten'];
$username = $_POST['txtTaikhoan'];
$password = $_POST['txtMatkhau'];
$password = md5($password);
$capquyen = $_POST['radioCapquyen'];
//Kiểm tra tên đăng nhập này đã có người dùng chưa

$sql = "SELECT * FROM admin WHERE TenDangNhap ='$username'";
$old = mysqli_query($conn,$sql);
if(mysqli_num_rows($old)>0) { 
?>
<script type="text/javascript">
    alert("Đã tồn tại tài khoản này.Vui Lòng Nhập Lại!");
    window.location = "../index.php?mod=index.php?mod=nguoidung&id=<?php echo $id; ?>";
</script>
<?php
}
else{
$sql = "INSERT INTO `admin`(`TenHienThi`, `TenDangNhap`, `MatKhau`, `PhanQuyen`) VALUES ('$hoten', '$username', '$password', '$capquyen')";
// echo $sql;
// var_dump($sql);
// return;
mysqli_query($conn, $sql);

header("location:../index.php?mod=nguoidung&id=$id");
}
?>