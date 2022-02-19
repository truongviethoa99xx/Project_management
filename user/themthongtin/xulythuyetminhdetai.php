<?php

include '../../config/xuly.php'; //kết nối database
$id =$_GET['id'];
$madetai = $_GET['madetai'];
$tgthuchientu = $_POST['thuchientu'];
$tendetai = $_POST['tendetai'];
$loai = $_POST['loai'];
$linhvuc = $_POST['linhvuc'];
$phuongthuc = $_POST['phuongthuc'];
$den = $_POST['den'];
$tongkinhphi = $_POST['tongkinhphi'];
$tungansach = $_POST['tungansach'];
$nguonvonkhac = $_POST['nguonvonkhac'];
$thuocchuongtrinh = $_POST['thuocchuongtrinh'];
$hoten = $_POST['hoten'];
$hocham = $_POST['hocham'];
$dienthoairieng = $_POST['dienthoairieng'];
$dienthoaicoquan = $_POST['dienthoaicoquan'];
$dtdd = $_POST['dtdd'];
$email = $_POST['email'];
$tendonvi = $_POST['tendonvi'];
$diachi = $_POST['diachi'];
$dienthoai = $_POST['dienthoai'];
$fax = $_POST['fax'];
$tgthuchientuso = 0 ;
$tgthuchientuso++;
$tgthuchiendenso = 0 ;
$tgthuchiendenso++ ;

$sql ="UPDATE `danhsachdetaiduan` SET `Loai`='$loai',`LinhVuc`='$linhvuc',`TenDeTaiDuAn`='$tendetai',`HocHamHocVi`='$hocham',`LoaiHoSo`='$phuongthuc', `ThoiGianThucHienTu`='$tgthuchientu',`ThoiGianThucHienTuSo`='$tgthuchientuso',`ThoiGianThucHienDen`='$den',`ThoiGianThucHienDenSo`='$tgthuchiendenso',`TongKinhPhi`='$tongkinhphi',`TuNganSach`='$tungansach',`NguonVonKhac`='$nguonvonkhac',`ThuocChuongTrinh`='$thuocchuongtrinh',`ChuNhiemDeTai`='$hoten',`HocHamHocVi`='$hocham',`DienThoaiCoQuan`='$dienthoaicoquan',`DienThoaiNhaRieng`='$dienthoairieng',`DienThoaiDiDong`='$dtdd',`Email`='$email',`TenDonViChuTri`='$tendonvi',`DiaChiDonVi`='$diachi',`DienThoaiDonVi`='$dienthoai',`FaxDonvi`='$fax' WHERE MaDeTaiDuAn = '$madetai'";

$result = mysqli_query($conn, $sql);
if($result){
?>
<script type="text/javascript">
    alert("Thuyết minh đề tài thành công!");
    window.location = "themthongtin.php?mod=thuyetminh&madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>";
</script>
<?php
}
else{
    echo "Failed";
}
?>