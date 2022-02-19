<?php

include '../../config/xuly.php'; //kết nối database


$id =$_GET['id'];
$madetai = $_GET['madetai'];
$tghop = $_POST['txtTghop'];
$ketqua = $_POST['radioKetqua'];
//Kiểm tra tên này đã có chưa
$sql = "SELECT * FROM hophoidong WHERE MaDeTai ='$madetai'";
$old = mysqli_query($conn,$sql);
if(mysqli_num_rows($old)>0) { ?>
<script type="text/javascript">
    alert("Đã nhập!");
    window.location = "themthongtin.php?mod=ketqua&madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>";
</script>
<?php
}
else{
$sql = "INSERT INTO `hophoidong`(`MaDeTai`, `NgayHopHoiDong`, `KetQua`) VALUES ('$madetai','$tghop','$ketqua')";
// echo $sql;
// var_dump($sql);
// return;
mysqli_query($conn, $sql);
?>
<script type="text/javascript">
    alert("Đã được đánh giá!");
    window.location = "themthongtin.php?mod=ketqua&madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>";
</script>
<?php
}
?>