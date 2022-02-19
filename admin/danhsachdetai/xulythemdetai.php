<?php

include '../../config/xuly.php';

$id = $_GET['id'];
$madetai = $_POST['MaDeTai'];
$tendetai = $_POST['TenDeTai'];
$linhvuc = $_POST['linhvuc'];
$loai = $_POST['loai'];
$phuongthuc = $_POST['phuongthuc'];
$nguoithuly = $_POST['nguoithuly'];
$thoigian = date_default_timezone_set('Asia/Ho_Chi_Minh');
$thoigian = date("Y-m-d H:i:s ");

//Kiểm tra tên đăng nhập này đã có người dùng chưa

$sql = "SELECT * FROM danhsachdetaiduan WHERE MaDeTaiDuAn ='$madetai'";
$old = mysqli_query($conn,$sql);
if(mysqli_num_rows($old)>0) { ?>
<script type="text/javascript">
    alert("Đã tồn tại đề tài này.Vui Lòng Nhập Lại!");
    window.location = "../index.php?mod=themdetai&id=<?php echo $id; ?>";
</script>
<?php
}
else{
$sql = "INSERT INTO `danhsachdetaiduan`(`MaDeTaiDuAn`, `Loai`, `LinhVuc`, `TenDeTaiDuAn`, `LoaiHoSo`, `NguoiQuanLy`, `NgayKhoiTaoDeTai`) VALUES ('$madetai', '$loai', '$linhvuc', '$tendetai', '$phuongthuc', '$nguoithuly', '$thoigian')";
// echo $sql;
// var_dump($sql);
// return;
mysqli_query($conn, $sql);
?>
<script type="text/javascript">
    alert("Thêm đề tài thành công!");
    window.location = "../index.php?mod=detai&id=<?php echo $id; ?>";
</script>
<?php
}
?>