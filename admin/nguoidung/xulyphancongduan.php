<?php

include '../../config/xuly.php';

$id = $_GET['id'];
$madetai = $_GET['madetai'];
$nguoithuly = $_POST['slNguoithuly'];
$sql = "UPDATE `danhsachdetaiduan` SET `NguoiQuanLy`='$nguoithuly' WHERE MaDeTaiDuAn = '$madetai'";
mysqli_query($conn, $sql);
?>
<script type="text/javascript">
    alert("Phân công lại thành công!");
    window.location = "../index.php?mod=phancongnv&id=<?php echo $id; ?>";
</script>
<?php
?>