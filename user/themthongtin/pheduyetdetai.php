<?php
    include '../../config/xuly.php';
    $id = $_GET['id'];
?>
<ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="index.php?id=<?php echo $id; ?>">Quản lý đề tài</a></li>
    <li><i class="fa fa-file"></i><a href="index.php?mod=detai&id=<?php echo $id; ?>"> Phê duyệt đề tài </a></li>
</ol>
<?php
      $madetai = $_GET['madetai'];
      $query = "SELECT * FROM danhsachdetaiduan WHERE MaDeTaiDuAn = '$madetai'";
      $result = mysqli_query($conn, $query);
      if(mysqli_num_rows($result) > 0){
        $i = 0;
        while ($r = mysqli_fetch_assoc($result)){
        $i++;
        $tendetai = $r['TenDeTaiDuAn'];
        }
      }
?>
<!-- ------------------------------------------------------------------------------ -->
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
             	Đề tài: <?php echo $tendetai ?>
             </header>
             <div class="panel-body">
                <form class="form-horizontal " method="POST" action="xulypheduyet.php?madetai=<?php echo $madetai; ?>&id=<?php echo $id; ?>">
                  	<div class="form-group">
                    	<label class="col-sm-2 control-label">Số quyết định thành lập hội đồng</label>
                    	<div class="col-sm-10">
                      		<input type="text" class="form-control" name="txtSo"> 
                    	</div>
                  	</div>
                  	<div class="form-group">
                    	<label class="col-sm-2 control-label">Ngày ra quyết định </label>
                    	<div class="col-sm-10">
                      		<input type="datetime-local" class="form-control" name="txtNgay">
                    	</div>
                  	</div>
                  	<div class="form-group">
                    	<label class="col-sm-2 control-label">Căn cứ quyết định số</label>
                    	<div class="col-sm-10">
                      		<input type="text" class="form-control" name="txtCancu">
                    	</div>
                  	</div>
                  	<div class="form-group">
                    	<label class="col-sm-2 control-label">Ngày ra quyết định</label>
                    	<div class="col-sm-10">
                      		<input type="datetime-local" class="form-control" name="txtNgayquyetdinh">
                    	</div>
                	</div>
                  <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Lưu</button>
                        </div>
                    </div>
                	</form>
                </div>
            </section>
        </div>
    </div>