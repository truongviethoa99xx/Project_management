<?php

include '../../config/xuly.php'; //kết nối database

$id =$_GET['id'];
$madetai = $_GET['madetai'];
$ngaythamdinh = $_POST['txtNgaythamdinh'];
$quyetdinh = $_POST['txtQuyetdinh'];
$ngay = $_POST['txtNgay'];
$tongkinhphi = $_POST['txtTongkinhphi'];

//Kiểm tra tên này đã có chưa
$sql = "SELECT * FROM thamdinhkinhphi WHERE MaDeTai ='$madetai'";
$old = mysqli_query($conn,$sql);
if(mysqli_num_rows($old)>0) { ?>
<script type="text/javascript">
    alert("Đã nhập!");
    window.location = "themthongtin.php?mod=thamdinhkinhphi&madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>";
</script>
<?php
}
else{
$sql = "INSERT INTO `thamdinhkinhphi`(`MaDeTai`, `NgayThamDinh`, `SoQuyetDinh`, `NgayQuyetDinh`, `TongKinhPhiDuocDuyet`) VALUES ('$madetai','$ngaythamdinh','$quyetdinh','$ngay','$tongkinhphi')";
// echo $sql;
// var_dump($sql);
// return;
mysqli_query($conn, $sql);
?>
<script type="text/javascript">
    alert("Đã Thẩm định kinh phí thành công!");
    window.location = "themthongtin.php?mod=thamdinhkinhphi&madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>";
</script>
<?php
}
?>