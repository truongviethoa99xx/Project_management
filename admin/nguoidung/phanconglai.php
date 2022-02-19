<?php
	include '../config/xuly.php';
?>
<?php
                $madetai = $_GET['madetai'];
                $id = $_GET['id'];
                $query = "SELECT * FROM danhsachdetaiduan WHERE MaDeTaiDuAn = '$madetai'";
                $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0){
                    $i = 0;
                while ($r = mysqli_fetch_assoc($result)){
                    $tendetai = $r['TenDeTaiDuAn'];
              }
            }
?>
<h3 class="page-header"><i class="fa fa-calendar"> Phân công lại</i></h3>
<br/>
<ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="index.php?mod=trangchu&id=<?php echo $id; ?>">Home</a></li>
    <li><i class="fa fa-calendar"></i>Phân công lại</li>
</ol>
<!-- ------------------------------------------------ -->
Đề tài :<?php echo $tendetai ?>
<form method="POST" action="nguoidung/xulyphancongduan.php?madetai=<?php echo $madetai ?>&id=<?php echo $id; ?>">
<div class="form-group">
    <label class="col-sm-2 control-label">Người thụ lý</label>
		<div class="form-group col-md-3" style="margin-left:0px;">
			<select id="inputState" class="form-control" name="slNguoithuly">
				<option selected="selected" value="">--Chọn--</option>
				    <?php
				       	$query = "SELECT * FROM admin";
                        $result = mysqli_query($conn, $query);
                        if (mysqli_num_rows($result) > 0) {
                            $i = 0;
                            while ($r = mysqli_fetch_assoc($result)) {
                                    echo "<option value='$r[ID]'>$r[TenHienThi]</option>";
                            }
                        }
                    ?>
			</select>
    	</div>
</div>
<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Lưu</button>
    </div>
</div>
</form>