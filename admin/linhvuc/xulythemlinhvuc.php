<?php

include '../../config/xuly.php'; //kết nối database


// xu lý thêm lĩnh vực 

$id = $_GET['id'];
$danhmuc = $_POST['txtLinhvuc'];
//Kiểm tra tên này đã có chưa
$sql = "SELECT * FROM danhmuc WHERE TenDanhMuc ='$danhmuc'";
$old = mysqli_query($conn,$sql);
if(mysqli_num_rows($old)>0) { ?>
<script type="text/javascript">
    alert("Đã tồn tại danh mục này.Vui Lòng Nhập Lại!");
    window.location = "../index.php?mod=linhvuc?id=<?php echo $id; ?>";
</script>
<?php
}
else{
$sql = "INSERT INTO `danhmuc`(`TenDanhMuc`, `Loai`) VALUES ('$danhmuc',1)";
// echo $sql;
// var_dump($sql);
// return;
mysqli_query($conn, $sql);

header("location:../index.php?mod=linhvuc&id=$id");
}
?>