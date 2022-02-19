<?php

$id = $_GET['id'];
include '../../config/xuly.php'; 

$danhmuc = $_POST['txtChucvu'];
$sql = "SELECT * FROM danhmuc WHERE TenDanhMuc ='$danhmuc'";
$old = mysqli_query($conn,$sql);
if(mysqli_num_rows($old)>0) { ?>
<script type="text/javascript">
    alert("Đã tồn tại chức vụ này.Vui Lòng Nhập Lại!");
    window.location = "../index.php?mod=chucvu&id=<?php echo $id; ?>";
</script>
<?php
}
else{
$sql = "INSERT INTO `danhmuc`(`TenDanhMuc`, `Loai`) VALUES ('$danhmuc',3)";
mysqli_query($conn, $sql);
?>
<script type="text/javascript">
    alert("Thêm chức vụ thành công!");
    window.location = "../index.php?mod=chucvu&id=<?php echo $id; ?>";
</script>
<?php
}
?>