<?php

include '../../config/xuly.php';

$id = $_GET['id'];
$danhmuc = $_POST['txtDanhmuc'];
//Kiểm tra tên này đã có chưa
$sql = "SELECT * FROM danhmuc WHERE TenDanhMuc ='$danhmuc'";
$old = mysqli_query($conn,$sql);
if(mysqli_num_rows($old)>0) { ?>
<script type="text/javascript">
    alert("Đã tồn tại danh mục này.Vui Lòng Nhập Lại!");
    window.location = "../index.php?mod=hochamhocvi&id=<?php echo $id; ?>";
</script>
<?php
}
else{
$sql = "INSERT INTO `danhmuc`(`TenDanhMuc`, `Loai`) VALUES ('$danhmuc',2)";
// echo $sql;
// var_dump($sql);
// return;
mysqli_query($conn, $sql);
?>
<script type="text/javascript">
    alert("Thêm thành công!");
    window.location = "../index.php?mod=hochamhocvi&id=<?php echo $id; ?>";
</script>
<?php
}
?>