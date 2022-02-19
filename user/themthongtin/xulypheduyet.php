<?php

include '../../config/xuly.php'; //kết nối database

$id =$_GET['id'];
$madetai = $_GET['madetai'];
$so = $_POST['txtSo'];
$ngay = $_POST['txtNgay'];
$cancu = $_POST['txtCancu'];
$ngayquyetdinh = $_POST['txtNgayquyetdinh'];

//Kiểm tra tên này đã có chưa
$sql = "SELECT * FROM pheduyetdetai WHERE MaDeTai ='$madetai'";
$old = mysqli_query($conn,$sql);
if(mysqli_num_rows($old)>0) { ?>
<script type="text/javascript">
    alert("Đã nhập!");
    window.location = "themthongtin.php?mod=pheduyetdetai&madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>";
</script>";
</script>
<?php
}
else{
$sql = "INSERT INTO `pheduyetdetai`(`MaDeTai`, `SoQuyetDinh`, `NgayQD`, `SoToTrinh`, `NgayTrinh`) VALUES ('$madetai','$so','$ngay','$cancu','$ngayquyetdinh')";
// echo $sql;
// var_dump($sql);
// return;
mysqli_query($conn, $sql);
?>
<script type="text/javascript">
    alert("Xử lý phê duyệt đề tài thành công!");
    window.location = "themthongtin.php?mod=pheduyetdetai&madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>";
</script>
<?php
}
?>