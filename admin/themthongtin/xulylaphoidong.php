<?php

include '../../config/xuly.php'; //kết nối database


$id =$_GET['id'];
$madetai = $_GET['madetai'];
$so = $_POST['txtSo'];
$ngay = $_POST['txtNgay'];
$cancu = $_POST['txtCancu'];
$ngayquyetdinh = $_POST['txtNgayquyetdinh'];
$linhvuc = $_POST['slLinhvuc'];
$chutichhoidong = $_POST['slChutich'];
$phochutich = $_POST['slPhochutich'];
$phanbien1 = $_POST['slPhanbien1'];
$phanbien2 = $_POST['slPhanbien2'];
$phanbien3 = $_POST['slPhanbien3'];
$uyvien1 = $_POST['slUyvien1'];
$uyvien2 = $_POST['slUyvien2'];
$uyvien3 = $_POST['slUyvien3'];
$uyvien4 = $_POST['slUyvien4'];
$uyvien5 = $_POST['slUyvien5'];
$uyvien6 = $_POST['slUyvien6'];
$uyvien7 = $_POST['slUyvien7'];
$thukyhoidong = $_POST['slThuky'];
//Kiểm tra tên này đã có chưa
$sql = "SELECT * FROM thanhlaphoidong WHERE MaDeTaiDuAn ='$madetai'";
$old = mysqli_query($conn,$sql);
if(mysqli_num_rows($old)>0) { ?>
<script type="text/javascript">
    alert("Đề tài này đã lập hội đồng. Vui Lòng Nhập Lại!");
    window.location = "themthongtin.php?mod=laphoidong&madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>";
</script>
<?php
}
else{
$sql = "INSERT INTO `thanhlaphoidong`(`MaDeTaiDuAn`, `DanhSachHoiDong`, `SoQuyetDinh`, `NgayQuyetDinh`, `SoQuyetDinhThanhLap`, `NgayQuyetDinhThanhLap`) VALUES ('$madetai','chutich$chutichhoidong,phochutich$phochutich,phanbien$phanbien1$phanbien2$phanbien3,uyvien$uyvien1$uyvien2$uyvien3$uyvien4$uyvien5$uyvien6$uyvien7,thuky$thukyhoidong','$so','$ngay','$cancu','$ngayquyetdinh')";
// echo $sql;
// var_dump($sql);
// return;
mysqli_query($conn, $sql);
?>
<script type="text/javascript">
    alert("Đã lập hội đồng xét duyệt!");
    window.location = "themthongtin.php?mod=laphoidong&madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>";
</script>
<?php
}
?>