<?php

include '../../config/xuly.php';

$id = $_GET['id'];
$hoten = $_POST['txtHoten'];
$gioitinh = $_POST['txtGioitinh'];
$hocham = $_POST['txtHocham'];
$chucvu = $_POST['txtChucvu'];
$linhvuc = $_POST['txtLinhvuc'];
$noicongtac = $_POST['txtNoicongtac'];
$diachi = $_POST['txtDiachi'];
$sodienthoai = $_POST['txtSodienthoai'];
$email = $_POST['txtEmail'];

//Kiểm tra tên đăng nhập này đã có người dùng chưa
$sql = "SELECT * FROM hoidongkhoahoc WHERE HoTen ='$hoten'";
$old = mysqli_query($conn,$sql);
if(mysqli_num_rows($old)>0) { ?>
<script type="text/javascript">
    alert("Đã tồn tại người này.Vui Lòng Nhập Lại!");
    window.location = "index.php?mod=hoidong&id=<?php echo $id; ?>";
</script>
<?php
}
else{
$sql = "INSERT INTO `hoidongkhoahoc`(`HoTen`, `GioiTinh`, `HocHamHocVi`, `ChucVu`, `LinhVuc`, `NoiCongTac`, `DiaChi`, `DienThoai`, `Email`) VALUES ('$hoten', '$gioitinh', '$hocham', '$chucvu', '$linhvuc', '$noicongtac', '$diachi', '$sodienthoai', '$email')";
// echo $sql;
// var_dump($sql);
// return;
mysqli_query($conn, $sql);

header("location: ../index.php?mod=hoidong&id=$id");
}
?>